<?php
/**
 * Template for displaying Know More page */

get_header(); ?>
<span style="font-size: 50px;" class="ir-arriba fa fa-angle-up"></span>
<div class="row">
  <div class="col-md-8">
    <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <p class="d-inline-block mt-5 mb-0 h4"><?php printf( __( 'Chose a theme', 'cristobalj' ));?></p>
        <div id="kmorebannercontainer">
          <img id="knowmore" class="mobilekmore" src="<?php echo get_template_directory_uri(); ?>/images/kmore.jpg" alt="banner know more">
          <div id="bigkmoreContainer" class="bigkmoreContainer ">
            <img id="knowmore bigmorebanner" class="bigkmore" src="<?php echo get_template_directory_uri(); ?>/images/another.png" alt="banner know more">
            <a href="#Psicoteatro" class="imgChange1 textBig"><?php printf( __( 'Psicoteatro', 'cristobalj' ));?></a>
            <a href="#BIO" class="imgChange2 textSmall"><?php printf( __( '', 'cristobalj' ));?></a>
            <a href="#Psicochamanismo" class="imgChange3 textBig"><?php printf( __( 'Psicochamanismo', 'cristobalj' ));?></a>
            <a href="#Metagenealo" class="imgChange5 textBig"><?php printf( __( 'Metagenealogía', 'cristobalj' ));?></a>
            <a href="#Therapies" class="imgChange6 textSmall"><?php printf( __( '', 'cristobalj' ));?></a>
            <a href="#Investigation" class="imgChange7 textBig"><?php printf( __( 'Investigation', 'cristobalj' ));?></a>
            <a href="#Psicomagic" class="imgChange8 textSmall"><?php printf( __( '', 'cristobalj' ));?></a>
            <a href="#Tarot" class="imgChange9 textBig"><?php printf( __( 'Tarot', 'cristobalj' ));?></a>
            <a href="#Videos" class="imgChange10 textSmall"><?php printf( __( '', 'cristobalj' ));?></a>
            <a href="#Psicomagic" class="imgChange8 textBig"><?php printf( __( 'Psicomagia', 'cristobalj' ));?></a>
            <a href="#Teachers" class="imgChange12 textSmall"><?php printf( __( '', 'cristobalj' ));?></a>
            <a href="#Travels" class="imgChange13 textBig"><?php printf( __( 'Travels', 'cristobalj' ));?></a>
            <a href="#Press" class="imgChange14 textSmall"><?php printf( __( 'Press', 'cristobalj' ));?></a>
            <a href="#Colectiva" class="imgChange15 textBig"><?php printf( __( 'Psicomagia Colectiva', 'cristobalj' ));?></a>
            <a href="#Art" class="imgChange16 textSmall"><?php printf( __( 'Art', 'cristobalj' ));?></a>
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
          <h3 id="Metagenealo" class="moretitle">
            <?php
            printf(__('<span class="morecolor" >Metagenealogia</span>', 'cristobalj' ));
            ?>
          </h3>
          <?php printf(__("<p>The forces of repetition and creation in their endless dynamic impel us both to repeat the same and to yield to what we are authentically. Individuals, at the same time, can have a positive and a negative vision from their great-grandparents, grandparents and parents, thus converting each relative into a double entity: one luminous and the other obscure. Two energy fields that, despite opposing, are complementary. In the present time, the spirit that materializes adjoins the matter that is spiritualized, the supraconscious with the unconscious, the attempt to realize the future with the intent to repeat the past, the essential being with the socio-cultural being, the desire to create with the desire to imitate. To the study of the genealogical tree under its simultaneous and complementary aspects, treasure and trap, I have called it Metagenealogy.</p>
          <p>Alejandro Jodorowsky (creator of Metagenalogy)</p>

          <p>Metagenealogy is a method of analysis of the genealogical tree that allows to expand the vision of its psychic dimension. This makes us understand to what extent what we think, feel, desire or live, as well as our conflicts and illnesses can be the result of a family, social, historical or patriarchal educational waste. The metagenealogy reveals a system of repetitions of dates, illnesses, births, deaths, accidents and names. All these are maps that are traversed and transmitted from generation to generation until they reach us with the precision of a clock. We tend to identify ourselves and be faithful to our relatives, to the point that it can be painful, paralyzing and self destructive. At the same time, these characters - to whom we maintain loyalty - imitated other figures of the past, forming a hereditary chain of prisons. Revealing the dynamics of the clan allows us to understand what inhibits within us the possibility of living, creating, being and loving from the essential being. On the other hand, it is essential to accept that everything is perfect and that the genealogy is a perfect spiritual process in action, that is never wrong, that has its laws and orders and that everything always has its raison d'etre, although we do not always like it or we agree One does not work to repair something that 'should not' have been, but rather to accept it as it was and integrate it from the soul. Very often, after a genealogical analysis, Cristobal prepares a family psychic or psychomagnetic constellation, where he invites a group to dramatize the situations seen and re-align them with the current of life.
          <br>Tarot For Carl Gustav Jung, the archetypes are innate energies common to all human beings, which are transmitted through myths or appear in dreams, stories, legends, rituals and works of art. They would be the organs of our psychological organism that, collaborating, allow our transformative alchemical process to take place. In the Tarot, the archetypes can act as patterns of behavior when the individual needs to solve an existential difficulty. The 78 arcana of the Tarot are archetypes with infinite interpretations, where each one has a multitude of aspects. However, the drawing of the letter will be only a mask. It becomes the key that, if you know how to interpret and integrate it, will activate the allied dimension of the archetype. For this, Cristóbal Jodorowsky uses the arcana of the Tarot as doors to contact with universal energies in himself. These doors, when activated, allow a profound change in the psyche, so that our soul expresses itself in all freedom.

          <br>In ancient cultures there were 'cuts' of gods that in the background could be dimensions of our own mind. Cristóbal's work with the Tarot is to awaken the courts of gods or inner archetypes of each being, using the arcana as a therapeutic tool that allows us to get in touch with our inner world and observe our acquired patterns of behavior, in order to create an internal structure of reference. The Tarot allows us to interpret the human psyche and the different dimensions of our consciousness. Thanks to its symbolic nature, we can see reflected our deeper reality in the arcane, a situation that will help us focus reality from another angle, and integrate life difficulties, sorrows and pain more easily. The Tarot can also be a spectacular representation of our inner family, a mirror of our intimate world that reflects our knots and genealogical burdens, conflicts or complex relationships with parents, grandparents, brothers and other relatives of the present or the past. It also reflects our neurotic repetitions, the cycles in which we are trapped, the mechanisms by which we become ill ... All this, in one direction: the encounter with the deepest of our Essential Being.  Even though the Tarot is an instrument that communicates us with the unconscious dimension. Cristobal thinks that when one chooses a letter it is the supra-conscious dimension (that knows everything) that chooses it in us to help us unveil what the ego is not always willing to see for fear of changing the frame of reference and mutate.
          </p>", 'cristobalj' )); ?>
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
          <?php printf(__("<p>Psychomagic is the therapeutic technique, initiated by Alejandro Jodorowsky, who combines shamanism, folk magic, psychology, intuition, mysticism, oriental philosophy, art, with a healing purpose. Psychomagia is a healing practice that acts through the symbol, metaphor and beauty, essentially with the language of dreams. By not considering the unconscious dimension as an enemy and losing the fear of seeing oneself, one can discover the traumas that cause suffering. However, even if one knows what happens to him and why, he is not entirely free of pain. Psychomagia does not pretend - like psychoanalysis - to heal through the word by converting the messages that the unconscious dimension sends into a rational discourse, but to teach the rational to handle unconscious language.
          <br>The processes of our brain are more symbolic and analogical than logical. For him, a photograph not only represents the person portrayed, but is herself. Consider a part as the whole, project people who populate their memory about real beings or things. In the psychomagy the client is proposed concrete actions, to perform a symbolic act that, in some way, will restore his memory and allow him to perform the unrealizable.

          <br>However, to ensure that the act gives an optimal result, the consultant must first free himself from the morality imposed by his family, society and culture. If you do so, for example, without fear, you can paste a photograph of your father on two watermelons and you can blow them up. Its unconscious dimension will take for granted murder and castration. The consultant will feel more free. That which frightens us loses strength the moment we stop fighting it or moving it away from the mind to integrate it through a psychomagic act that helps us to awaken and make life a lucid dream full of consciousness. It is not enough to understand the reason for a conflict; we must act on it, give it an outlet to the impulse, to the repetitive behavior that makes our existence difficult. This is how psychomagia was created, psychochamanism and, later, the psychroritual.
          </p>", 'cristobalj' )); ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
        </div>
        <div id="mainContainer" class="more">
          <h3 id="Colectiva" class="moretitle">
            <?php
            printf(__('<span class="morecolor" >Psicomagia Colectiva</span>', 'cristobalj' ));
            ?>
          </h3>
          <?php printf(__("<p>Todo está interconectado, cuando un individuo hace un esfuerzo transformador y progresa, esa información entra inmediatamente en el psico-campo de la humanidad y, de alguna manera afecta de forma positiva a lo colectivo participando a su inevitable proceso transformación. Es decir que, cuando un grupo de personas se sintoniza individualmente con los campos amplios de conciencia que nos mueven, la activación colectiva de esas dimensiones desde lo personal, afecta y eleva más aún la vibración de cada participante.

          <br>Después de años de experiencia reuniendo a grupos numerosos en diferentes partes del mundo, relazando Psicoteatros, Psicorituales, constelaciones, psicomagia, tarot y tanto más, he podido comprobar y experimentar esos paradigmas. Vi y sentí, hasta qué punto un grupo de personas concentradas, encausando una misma intención terapéutica y espiritual, se contagiaban entre sí de energía positiva, sanadora a través de esa trama invisible: . Así que, cuando una persona solucionaba algo públicamente todos y todas vivimos esa misma sanación.   </p>

          <p>Hoy con esta nueva propuesta de “Psicomagia colectiva” que para mí es, una forma de ritual contemporáneo, realizado con también mucho humor para que las personas puedan dulcemente tomar conciencia, he decidido utilizar las herramientas que están a mi disposición, para que juntos participemos al proceso de evolución de la humanidad a través de nuestra experiencia, proponiendo ejercidos colectivos, individuales, meditaciones, terapias mutuas, lecturas de tarot, teatralizaciones del Árbol genealógico, psicomagia y tantas otras vivencias.

          <br>Según mi visión, hoy en día la transformación se hace también colectivamente, en grupos que obran juntos como abejas, dedicadas a producir la miel consiente, transformadora que todos necesitamos para mover a esta sociedad.
          </p>", 'cristobalj' )); ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
        </div>
        <div id="mainContainer" class="more">
          <h3 id="Tarot" class="moretitle">
            <?php
            printf(__('<span class="morecolor" >Tarot</span>', 'cristobalj' ));
            ?>
          </h3>
          <?php printf(__("<p>For Carl Gustav Jung, children are innate energy common to all human beings, which are transmitted through myths or that appear in dreams, stories, legends, rituals and works of art.
          They have the organs of our psychological organism that collaborate in our transformative Alchemical process. They are carried out. In the Tarot, the archetypes can act as patterns of behavior when the individual needs to solve an existential difficulty. The 78 arcana of the Tarot are interpretations with infinite interpretations, where each one has a multitude of aspects. However, the drawing of the letter is only a mask. It becomes the key that, if you know how to interpret and integrate it, will activate the allied dimension of the archetype.
          For this, Cristóbal Jodorowsky uses the arcana of the Tarot as doors to contact the universal energies themselves. These doors, when activated, allow a profound change in the psyche, so that our soul can express itself in all freedom.

          <br>In ancient cultures there were 'cuts' of gods that in the background could be dimensions of our own mind. Cristóbal's work with the Tarot is to awaken the courts of gods or inner archetypes of each being, using the arcana as a therapeutic tool that allows us to get in touch with our inner world and observe our acquired patterns of behavior, in order to create an internal structure of reference.

          <br>The Tarot allows us to interpret the human psyche and the different dimensions of our consciousness. Thanks to its symbolic nature, we can see reflected our deeper reality in the arcane, a situation that will help us focus reality from another angle, and integrate life difficulties, sorrows and pain more easily.

          <br>The Tarot can also be a spectacular representation of our inner family, a mirror of our intimate world that reflects our knots and genealogical burdens, conflicts or complex relationships with parents, grandparents, brothers and other relatives of the present or the past. It also reflects our neurotic repetitions, the cycles in which we are trapped, the mechanisms by which we become ill ... All this, in one direction: the encounter with the deepest of our Essential Being.
           <br>Even though the Tarot is an instrument that communicates us with the unconscious dimension. Cristobal thinks that when one chooses a letter it is the supra-conscious dimension (that knows everything) that chooses it in us to help us unveil what the ego is not always willing to see for fear of changing the frame of reference and mutate.</p>", 'cristobalj' )); ?>
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
          <?php printf(__("<p>For several years Cristóbal Jodorowsky has been organizing trips around the world, finding traditional sources of shamanism and spirituality. The participation in the rituals and trance sessions of the mediums in the initiatory trips is for Cristóbal Jodorowsky a possibility of research on shamanism. This means that the phenomenology is analyzed in the cults visited in order to reinterpret it in the light of the knowledge of psychotherapy and the paradigms of today. These initiatory groups focus on moving from the popular forms of spiritual and magical beliefs to psycho-shamanism, where toxic and religious folkloric aspects are left aside to preserve the essence of psychic functioning. Thus, consciously and autonomously they are applied autonomously to the management of psychic potentials. In these rites, the forms of participation in worship are respected with their language and liturgies, but this does not mean that the group feels identified with their cosmology and spiritual vision. Over the past few years, these groups have toured the shamanic work centers of the favelas of the big cities, El Salto del Angel in Venezuela, the sacred mountain of Sorte, (center of the cult of María Lionza), the jungles of Orinoco, the Peruvian Andean mountain range, and a long etcetera. These initiatic travelers visited the Market of the Witches of Mexico City, Yucatan, the Lacandon jungles and the Mayan sites; They participated in sacred ceremonies on Mount Tepozteco and experienced indigenous temazcales.</p>
          <p>In these works, travelers can work day after day with shamans and healers of different spiritual traditions, integrating a holistic view of the traditional cosmovisions of the American continent.
          <br>It also proposes a Tarot itinerant seminar that includes a tour through natural scenarios specifically chosen to work in depth, guided by the hand of Cristobal Jodorowsky, in practices and introspective exercises that allow us to have an experiential access to the integration of each arcana of the Tarot. Marseille, in search of a broader experience of study about its archetypal implications in our psyche. Within the framework of the uniquely sumptuous Mayan landscapes of southeastern Mexico, a deep work of self-knowledge and inner therapeutic work is carried out, which offers us greater tools to be reborn in fullness to wider dimensions of our being. In addition, traveling expeditions are a good opportunity for work and consultations in psychomagy and Tarot, generating a personal journey from meditation and self-analysis to psycho-christian ritual.</p>", 'cristobalj' )); ?>
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
        <?php while (have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile ?>
      </main><!-- #main -->
    </div><!-- #primary -->

  </div>
  <div id="sidebar_2" class="col-md-4 text-center">
    <?php get_template_part('agenda'); ?>
    <iframe class="morevideo mt-2" width="100%" src="https://www.youtube.com/embed/F8FBxAGIlpY">
    </iframe>
    <?php get_template_part( 'mainbanner' );  ?>
  </div>

</div>

<?php
get_footer();
?>
