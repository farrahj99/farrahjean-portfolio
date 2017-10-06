<?php
/**
 * Template Name: Home Template
 */
?>


<!-- Instantiate WordPress Query Object for Projects -->
<?php
  $args = array('post_type' => 'project');
  $projects_query = new WP_Query($args);
?>


<!-- do something until you have nothing to show -->
<?php if ($projects_query->have_posts() ): ?>
    <?php while ($projects_query->have_posts() ) :?>
        <?php $projects_query->the_post(); ?>

        <!-- image for banner -->
        <img class="banner" src="<?php the_field('thumbnail'); ?>" />

        <!-- repeater - various items w/ repeater - ul li -->
        <?php if (have_rows('tech_stack') ): ?>
            <?php while(have_rows('tech_stack') ): ?>
                <?php the_row(); ?>
                  <p><?php the_sub_field('languages'); ?></p>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php // colons replace brackets ?>

<?php if (have_posts() ): ?>
    <?php while ( have_posts() ): ?>
    <?php the_post(); ?>
     <section class="banner-example">
        <?php // shows the title of the page paragraph ?>
        <div class="title">
            <h1><?php the_title(); ?></h1>
        </div>

        
        <?php // shows the content in the WYSIWYG editor paragraph ?>
        <?php the_content(); ?>
        <?php // shows the featured page of this page?>
        <?php if (has_post_thumbnail() ): ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <?php // static code next ?>
        <section class="secondSec">
            <span class="secondSpan">About Farrah</span>

            <p class="firstPara">
            Curiosity has not killed this cat! My artistry spans from screenwriting, 
            creative directing, theatre and my latest addition, 
            web development. With coding, my imagination can run wild while 
            still feeding my sense of style and my need for novelty. I have found my niche with
            designing and creating an alternate universe filled with wondrous, customized websites.
            Learning team-building skills while attending both General Assembly and Resilient 
            Coders has assisted in perfecting my leadership capabilities. Being a Front-End Developer has 
            taught me to utilize empathy towards finding the solution to each problem we encounter in our 
            code. 
        

        </section>
        
        
        <!-- skills section -->
        
        <section class="firstSec">
            <span class="firstSpan">Skills</span>


        <?php if (have_rows('skills_icons') ): ?>
            <?php while(have_rows('skills_icons') ): ?>
                <?php the_row(); ?>
                    <img class="icons" src="<?php the_sub_field('skills_pics'); ?>" />
            <?php endwhile; ?>
        <?php endif; ?>
        </section> 
        

       
        <!-- section with projects -->

        <section class="thirdSec">
            <img class="bgPic" src="<?php the_field('background_pic'); ?>" />
            <span class="projects">PROJECTS</span>

            <section class="first">
                <a href="https://farrahj99.github.io/Black-Girl-Magic-Interactive-Book/BGM.html" target="_blank"><img class="bgm" src="<?php the_field('bgm'); ?>" /></a>
                <span class="firstImg">Black Girl Magic Interactive Book</span>
                <span class="imgOne">Tools: HTML, CSS3, jQuery</span>
            </section>
     
            <section class="second">
                <a href="https://farrahj99.github.io/Recipe-API/" target="_blank"><img class="recipe" src="<?php the_field('recipe_api'); ?>" /></a>
                <span class="secondImg">Recipe API</span>
                <span class="imgTwo">Tools: HTML, CSS3, jQuery</span>
            </section>

            <section class="third">
                <a href="https://farrahj99.github.io/farrah-hackathon/" target="_blank"><img class="hackathon" src="<?php the_field('hackathon'); ?>" /></a>   
                <span class="thirdImg">Personal Portfolio</span>
                <span class="imgThree">Tools: HTML, CSS3, JS</span>
            </section>
        </section>

        <!-- Get In Touch Section -->

        <section class="contact">

            <h3>GET IN TOUCH</h3>
            <h4><?php the_field('contact_us'); ?></h4>

            <h5>I am currently available for freelance work.</h5>

            <section class="sectionClass"></section>
            <h5 class="emailTwo">CONTACT</h5>
            <a class="emailThree" href="mailto:farrahjean99@gmail.com"> EMAIL AT FARRAHJEAN99@GMAIL.COM</a>

            <img class="img-circle" src="<?php the_field('circle'); ?>" />

            <ul>
                <li><a href="https://github.com/farrahj99" target="_blank"><img class="githubTwo" src="https://i.imgur.com/XfGAR81.png"></a></li>
                <li><a href="https://www.linkedin.com/in/farrah-jean/" target="_blank"><img class="linkedTwo" src="https://i.imgur.com/FfBH3YB.png"></a></li>
                <li><a href="https://twitter.com/farrahj91" target="_blank"><img class="twitterTwo" src="https://i.imgur.com/Ssl0HU6.png"></a></li>
            </ul>


            <a class="resume" href="<?= get_template_directory_uri(); ?>/dist/images/farrah_resume.png" download>
                DOWNLOAD RESUME HERE
            </a>

            
            <!-- www.123contactform.com script begins here -->
            <script type="text/javascript" defer src="//www.123contactform.com/embed/3023731.js?type=lightbox" data-role="form" data-default-width="207px" data-embed-type="lightbox-floating-button" data-embed-image-link="http://www.123contactform.com/verticalbutton2.php?&bg=696969&fnt=FFFFFF&pos=1&text=Email Me&font=arialblk" data-embed-placement="1"></script>
            <!-- www.123contactform.com script ends here -->


        </section>

     </section>
  <?php endwhile; ?>
<?php endif; ?>