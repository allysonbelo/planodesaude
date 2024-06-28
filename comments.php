<?php
// Evita o carregamento direto do arquivo
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area">

  <?php comment_form(); ?>

  <?php if (have_comments()) : ?>
    <h2 class="comments-title">
      <?php
      $comments_number = get_comments_number();
      if ('1' === $comments_number) {
        printf(
          /* translators: %s: post title */
          esc_html__('Uma resposta para &ldquo;%s&rdquo;', 'textdomain'),
          '<span>' . get_the_title() . '</span>'
        );
      } else {
        printf(
          /* translators: 1: number of comments, 2: post title */
          esc_html(_nx(
            '%1$s respostas para &ldquo;%2$s&rdquo;',
            '%1$s respostas para &ldquo;%2$s&rdquo;',
            $comments_number,
            'comments title',
            'textdomain'
          )),
          number_format_i18n($comments_number),
          '<span>' . get_the_title() . '</span>'
        );
      }
      ?>
    </h2>

    <ol class="comment-list">
      <?php
      wp_list_comments(array(
        'style'      => 'ol',
        'short_ping' => true,
        'avatar_size' => 40,
      ));
      ?>
    </ol><!-- .comment-list -->

    <?php the_comments_navigation(); ?>

    <?php if (!comments_open()) : ?>
      <p class="no-comments"><?php esc_html_e('Os comentários estão fechados.', 'textdomain'); ?></p>
    <?php endif; ?>

  <?php endif; // Check for have_comments(). 
  ?>

</div><!-- #comments -->

<style>
  .comment-awaiting-moderation {
    color: red;
  }

  .comment-form-url {
    display: none;
  }

  .comment-author.vcard img {
    margin: 0px;
  }

  .comment-list {
    display: flex;
    flex-direction: column;
    row-gap: 20px;
  }

  .comment.even.thread-even.depth-1 {
    display: flex;
    flex-direction: column;
    row-gap: 20px;
  }

  .comment.odd.alt.thread-odd.thread-alt.depth-1.parent,
  .comment.odd.alt.thread-even.depth-1.parent,
  .comment.odd.alt.depth-2 {
    display: flex;
    flex-direction: column;
    row-gap: 20px;
  }

  .comment-body .comment-author.vcard {
    margin-bottom: 20px;
  }

  .comments-area {
    margin-bottom: 40px;
  }

  .comments-area .children{
    margin-top: 20px;
    margin-bottom: 20px;
  }
</style>