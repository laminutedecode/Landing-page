<?php
$count = absint(get_comments_number());
;?>

<div class="comments-container">
    <!-- Afficher le nombre de commentaire -->
    <?php if ($count >= 1) : ?>
        <span class="nb-comments"><?= $count; ?> Commentaire<?= $count > 1 ? 's' : ''; ?></span>

    <?php endif; ?>

    <!-- Afficher les commentaires parents -->
    <?php
    $comments = get_comments(array(
        'post_id' => get_the_ID(),
        'status' => 'approve', // Afficher uniquement les commentaires approuvés
        'parent' => 0 // Récupérer seulement les commentaires parents
    ));

    if (!empty($comments)) {
        foreach ($comments as $comment) { ?>
            <div class="comment-card">
                <div class="comment-author">
                    <?php echo get_avatar($comment->comment_author_email, 60); ?> <!-- Affiche l'image Gravatar -->
                    <p><?php echo $comment->comment_author; ?></p>
                </div>
                <div class="comment-content">
                    <p> <?php echo $comment->comment_content; ?></p>
                </div>
                <div class="comment-meta">
                    <p><?php echo get_comment_date('F j, Y', $comment->comment_ID); ?></p>
                    <a href="#" class="reply-link" onclick="showCommentForm(<?php echo $comment->comment_ID; ?>)">Répondre</a>
                </div>

                <!-- Formulaire de réponse -->
                <div class="comment-reply-form" id="comment-reply-form-<?php echo $comment->comment_ID; ?>" style="display:none;">
                    <p>Vous répondez à <?php echo $comment->comment_author; ?></p>
                    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="comment-form">
                        <label for="author">Nom <span class="required">*</span></label>
                        <input id="author" name="author" type="text" required="required">
                        <label for="email">Email <span class="required">*</span></label>
                        <input id="email" name="email" type="email" required="required">
                        <label for="comment">Commentaire <span class="required">*</span></label>
                        <textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea>
                        <input name="submit" type="submit" class="btn" value="Commenter">
                        <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>">
                        <input type="hidden" name="comment_parent" value="<?php echo $comment->comment_ID; ?>">
                    </form>
                </div>

                <div class="reponse-content" id="comment-reply-content-<?php echo $comment->comment_ID; ?>">
                    <?php
                    $replies = get_comments(array(
                        'post_id' => get_the_ID(),
                        'status' => 'approve',
                        'parent' => $comment->comment_ID // Récupérer les réponses pour ce commentaire spécifique
                    ));

                    if (!empty($replies)) {
                        foreach ($replies as $reply) { ?>
                            <div class="reply">
                                <div class="reply-content-author">
                                    <p><?php echo $reply->comment_author; ?> à répondu:</p>
                                </div>
                                <div class="reply-content">
                                    <p><?php echo $reply->comment_content; ?></p>
                                </div>
                            </div>
                        <?php }
                    }
                    ?>
                </div>
            </div>
        <?php }
    } else {
        echo '<p>Aucun commentaire</p>';
    }
    ?>

    <!-- Afficher le formulaire -->
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form">
        <label for="author">Nom <span class="required">*</span></label>
        <input id="author" name="author" type="text" required="required">
        <label for="email">Email <span class="required">*</span></label>
        <input id="email" name="email" type="email" required="required">
        <label for="comment">Commentaire <span class="required">*</span></label>
        <textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea>
        <input name="submit" type="submit" id="submit" class="btn" value="Commenter">
        <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
    </form>
</div>


<script>
    function showCommentForm(commentID){
        let formID = `comment-reply-form-${commentID}`;
        let form = document.getElementById(formID);

        let forms = document.querySelectorAll('.comment-reply-form');

        forms.forEach(function(form){
            form.style.display = 'none';
        });
        if(form.style.display === 'none' || form.style.display === ''){
            form.style.display = 'block';
        }else {
            form.stye.display = 'none';
        }
    }
</script>