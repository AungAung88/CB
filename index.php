<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <section class="col-lg-9">
                <div class="jumbotron">
                  <h1>Hello, world!</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>  

                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php get_template_part("content") ?>
                    <?php endwhile ?>
                <?php endif ?>

            </section>
            <?php get_sidebar("sidebar"); ?>
        </div>
    </div>
<?php get_footer(); ?>