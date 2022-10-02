<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>




  <header id="mainHeader">
    <p id="siteTitle"><?php echo get_bloginfo('name'); ?></p>
  </header>








    <h1>Latest Posts</h1>
  <section id="mainContent">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
    ?>
        <article class="post">
          <header class="article-header">
            <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
            <?php the_post_thumbnail('large', array('class' => 'featured')); ?>
            <ul>
              <li><?php the_author(); ?></li>
              <li><?php the_date(); ?></li>
              <li><?php the_category(', ') . the_tags(', '); ?></li>
            </ul>
          </header><!-- .article-header -->
          <?php
          if (is_singular()) {
            the_content();
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;
          } else {
            the_excerpt();
          }
          // Comment Loop

          ?>
        </article>
    <?php
      } //end while on main loop
    } else {
      echo 'no content found';
    } //end if on main loop
    ?>
    <aside id="MainSidebar">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet mauris commodo quis imperdiet massa tincidunt. Lectus proin nibh nisl condimentum id venenatis. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Quis viverra nibh cras pulvinar mattis nunc. Lacus sed viverra tellus in. Risus commodo viverra maecenas accumsan. Risus ultricies tristique nulla aliquet enim tortor at auctor urna. Non consectetur a erat nam. Nullam non nisi est sit amet facilisis magna etiam. Ornare massa eget egestas purus viverra accumsan in nisl. Donec ac odio tempor orci dapibus ultrices. Viverra tellus in hac habitasse platea dictumst vestibulum. Ut morbi tincidunt augue interdum velit euismod in pellentesque. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Sit amet est placerat in. Sed odio morbi quis commodo odio. Vitae elementum curabitur vitae nunc sed velit dignissim sodales. Volutpat odio facilisis mauris sit. Maecenas ultricies mi eget mauris pharetra et.
    </aside>
  </section>




























  <?php wp_footer(); ?>


</body>

</html>