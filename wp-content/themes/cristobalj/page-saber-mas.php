<?php
/**
 * Template for displaying Know More page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <p class="d-inline-block mt-5 mb-0 h4"><?php printf( __( 'Chose a theme', 'cristobalj' ));?></p>
    <div id="kmorebannercontainer">
      <img id="knowmore" class="mobilekmore" src="<?php echo get_template_directory_uri(); ?>/images/kmore.jpg" alt="banner know more">
      <div id="bigkmoreContainer" class="bigkmoreContainer">
        <img id="knowmore bigmorebanner" class="bigkmore" src="<?php echo get_template_directory_uri(); ?>/images/another.png" alt="banner know more">
        <a href="#Psicoteatro" class="imgChange1 textBig"><?php printf( __( 'Psicoteatro', 'cristobalj' ));?></a>
        <a href="#BIO" class="imgChange2 textSmall"><?php printf( __( 'BIO', 'cristobalj' ));?></a>
        <a href="#Psicochamanismo" class="imgChange3 textBig"><?php printf( __( 'Psicochamanismo', 'cristobalj' ));?></a>
        <a href="#Workshops" class="imgChange4 textSmall"><?php printf( __( 'Workshops', 'cristobalj' ));?></a>
        <a href="#Metagenealo" class="imgChange5 textBig"><?php printf( __( 'Metagenealogía', 'cristobalj' ));?></a>
        <a href="#Therapies" class="imgChange6 textSmall"><?php printf( __( 'Therapies', 'cristobalj' ));?></a>
        <a href="#Investigation" class="imgChange7 textBig"><?php printf( __( 'Investigation', 'cristobalj' ));?></a>
        <a href="#Psicomagic" class="imgChange8 textSmall"><?php printf( __( 'Psicomagic', 'cristobalj' ));?></a>
        <a href="#Tarot" class="imgChange9 textBig"><?php printf( __( 'Tarot', 'cristobalj' ));?></a>
        <a href="#Videos" class="imgChange10 textSmall"><?php printf( __( 'Videos', 'cristobalj' ));?></a>
        <a href="#Studies" class="imgChange11 textBig"><?php printf( __( 'Studies', 'cristobalj' ));?></a>
        <a href="#Teachers" class="imgChange12 textSmall"><?php printf( __( 'Teachers', 'cristobalj' ));?></a>
        <a href="#Travels" class="imgChange13 textBig"><?php printf( __( 'Travels', 'cristobalj' ));?></a>
        <a href="#Press" class="imgChange14 textSmall"><?php printf( __( 'Press', 'cristobalj' ));?></a>
        <a href="#Ngram" class="imgChange15 textBig"><?php printf( __( 'N-gram', 'cristobalj' ));?></a>
        <a href="#Art" class="imgChange16 textSmall"><?php printf( __( 'Art', 'cristobalj' ));?></a>
      </div>
      <div class="flex-column justify-content-center align-items-center" id="moreQuote">
        <p class="quote"><?php printf( __( 'The integration of aspects and keys are fundamental for personal development', 'cristobalj' ));?></p>
      </div>
    </div>


    <div id="mainContainer" class="more mt-5">
      <h3 id="Psicoteatro" class="moretitle">
        <?php
        printf( __( 'My life on ', 'cristobalj' ));
        printf(__('<span class="morecolor" > the Psicoteatro</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>The PsicoTeatro is an open and free space, but also very respectful and safe. A place and a time where you learn things that are very important for yourself and for others, as well as the ideal place to play and express yourself without any specific objective. It is an experience: a living centered on the here and now. But it is also pure perception and feeling. Occasion to lie down and just focus on how you feel and chance to create without brakes, build an I that you like more or draw new realities. A session where it is forbidden to judge and where no one is wrong. It comes to try, to experiment, to discover, to enjoy and with it, working with oneself, to grow !!<br> It is an opportunity to forget the problems, because they are also solved when you invest and work in your well-being, in the development of the skills, in learning of yourself, in the relationship with your emotions, in integrating all the parts of your person, in short, when you allow yourself WALK TO YOUR HAPPINESS.</p>", 'cristobalj' )); ?>
    </div>
    <iframe class="morevideo" width="100%" src="https://www.youtube.com/embed/F8FBxAGIlpY">
    </iframe>
    <div id="mainContainer" class="more">
      <h3 id="Psicochamanismo" class="moretitle">
        <?php
        printf( __( 'My life on ', 'cristobalj' ));
        printf(__('<span class="morecolor" > the Psicochamanismo</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>At an archaic level, the human being responds to an innate instinct of family conservation. He is scheduled to fight for the survival of his clan. For the archaic brain an idea, an emotional structure, a prohibition, an order or a belief, may be the metaphor of an ancestor. That is why it is so difficult for us to shed all those aspects that prevent us from growing, since this could represent the murder of a member (or of all) our species. This is how we keep alive ideas, memories, phantasms, morals, behavioral structures, and ideologies that come from the genealogical lineage.</p>", 'cristobalj' )); ?>
      <ul id="chamanslides" class="">
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/1.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/2.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/3.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/4.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/5.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/6.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/7.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/8.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/9.jpg" alt=""></li>
      </ul>
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Psicomagic" class="moretitle">
        <?php
        printf( __( 'My life on ', 'cristobalj' ));
        printf(__('<span class="morecolor" > the Psicomagia</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Psychomagia is a form of ultra advanced therapy. It is a response to psychoanalysis. Psychomagia proposes to cure something by acts that speak directly to the unconscious. I use all the shamanic tradition of witchcraft and Mexican healers, but without superstition. A psychomagic act is like giving a loving kick in the ass to reality. This impulse you give her, surprisingly, makes her leave the inertia and begin to dance.</p>", 'cristobalj' )); ?>
      <ul id="magicslides" class="">
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/29.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/30.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/31.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/32.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/33.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/34.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/35.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/36.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/37.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/38.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/39.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/40.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/41.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/42.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/43.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/44.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/45.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/46.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/47.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/48.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/49.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/50.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/51.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/52.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/53.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/54.jpg" alt=""></li>
      </ul>
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Workshops" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Workshops</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>A Living Experience guided by Cristobal Jodorowsky, where he participates will learn more about his personal neurosis, family unconscious contracts, ego projections and geneological knots, as well as the consequences that all these factors cause in his current affective life.</p>", 'cristobalj' )); ?>
      <ul id="theaterslides" class="">
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/23.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/24.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/25.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/26.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/27.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/cristobal/28.jpg" alt=""></li>
      </ul>
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Metagenealo" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Metagenealogia</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo optio repudiandae, a consequatur. Placeat labore dolorum perferendis cupiditate quam illo.</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Therapies" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Therapies</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis doloribus nulla tempora, quas dolores mollitia iste at, ullam molestias enim!</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Investigation" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Investigation</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex laborum sequi provident, aliquid eaque atque est dolore mollitia unde, omnis.</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Psicomagic" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Psicomagic</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis reprehenderit nostrum suscipit dolorem quam sequi quibusdam dicta accusantium, facilis repellat?</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Tarot" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Tarot</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore expedita accusantium obcaecati impedit ad, eveniet officiis debitis in illum enim.</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Videos" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Videos</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quaerat minus delectus voluptatum praesentium dolorem facilis sit ea mollitia possimus!</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Studies" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Studies</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis architecto consectetur non provident ratione eos consequuntur a voluptas tenetur autem.</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Teachers" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Teachers</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, totam, fugit. Laudantium aliquam odit voluptas fugiat, est consequatur animi adipisci?</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Press" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Press</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta voluptates id officiis consequatur iste magnam quibusdam eos repellat qui facilis?</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Travels" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Travels</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam excepturi quia sequi dicta magnam obcaecati quibusdam nobis nihil inventore reiciendis.</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Art" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Art</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam excepturi quia sequi dicta magnam obcaecati quibusdam nobis nihil inventore reiciendis.</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Ngram" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >N-gram</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam excepturi quia sequi dicta magnam obcaecati quibusdam nobis nihil inventore reiciendis.</p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <?php while (have_posts()): the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile ?>
    
    <?php get_template_part( 'secondarybanner' );  ?>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>