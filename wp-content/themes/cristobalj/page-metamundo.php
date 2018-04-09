<?php
/**
 * Template for displaying METAMUNDO page
 */
get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <img id="metabanner"  src="<?php echo get_template_directory_uri(); ?>/images/metalogonuevo3.png" alt="METAMUNDO image">
    <div class="mobilecontainer">
      <div class="bannertext">
        <h2 class="bannertitle">
          <?php printf(__('Welcome!','cristobalj')) ?>
        </h2>
        <p class="quote metaquote"><?php printf(__('a nuestra escuela integrativa de desarrollo psicoespiritual','cristobalj')) ?></p>
      </div>
    </div>
    <div id="metabanner1" class="metabannerbig">
      <img id="metabannerbig"  src="<?php echo get_template_directory_uri(); ?>/images/metalogonuevo3.png" alt="METAMUNDO image">
      <div class="bannercontainer metacontainer">
        <div class="metabannertext">
          <h2 class="bannertitle">
            <?php printf(__('Welcome!','cristobalj')) ?>
          </h2>
          <p class="quote metaquote"><?php printf(__('a nuestra escuela integrativa de desarrollo psicoespiritual','cristobalj')) ?></p>
        </div>
      </div>
    </div>
    <!-- Welcome banner -->
    <div class="welcome">
      <img id="metabannerwelcome"  src="<?php echo get_template_directory_uri(); ?>/images/metabanner.jpg" alt="METAMUNDO image">
      <div class="mobilecontainerwelcome">
        <div class="bannertext">
          <h2 class="bannertitle second">
            <?php printf(__('"Sanarse uno mismo es sanar al mundo"','cristobalj')) ?>
          </h2>
          <p class="quote metaquote name"><?php printf(__('Cristobal Jodorowsky','cristobalj')) ?></p>
        </div>
      </div>
    </div>
    <div id="metabanner1welcome" class="metabannerbig">
      <img id="metabannerbig"  src="<?php echo get_template_directory_uri(); ?>/images/metabanner.jpg" alt="METAMUNDO image">
      <div class="bannercontainer metacontainer">
        <div class="metabannertext">
          <h2 class="bannertitle second">
            <?php printf(__('"Sanarse uno mismo es sanar al mundo"','cristobalj')) ?>
          </h2>
          <p class="quote metaquote name"><?php printf(__('Cristobal Jodorowsky','cristobalj')) ?></p>
        </div>
      </div>
    </div>
    <div class="row d-flex flex-row mt-4">
      <div class="col-sm-12 col-md-8 ">
        <div class="titleContainer">
          <h2>
            <?php printf(__('Study plan','cristobalj')) ?>
          </h2>
          <h3>Primer año (2018)</h3>
          <div id="blocksContainer">
            <ul>
              <li class="metaBlock"><a class="active" href="#block1"><?php printf(__('Módulo 1','cristobalj')) ?></a></li>
              <li class="metaBlock"><a href="#block2"><?php printf(__('Módulo 2','cristobalj')) ?></a></li>
              <li class="metaBlock"><a href="#block3"><?php printf(__('Módulo 3','cristobalj')) ?></a></li>
              <li class="metaBlock"><a href="#block4"><?php printf(__('Módulo 4','cristobalj')) ?></a></li>
              <li class="metaBlock"><a href="#block5"><?php printf(__('Módulo 5','cristobalj')) ?></a></li>
            </ul>
        <!-- <div id="certificate">
          <h4><?php printf(__('Certification','cristobalj')) ?></h4>
        </div> -->
      </div>
    </div>
  </div>
  <div id="generations" class="col-sm-12 col-md-4 d-flex flex-column justify-content-center align-items-center">
    <div>
      <h3>
        <?php printf(__('"Next generations"','cristobalj')) ?>
      </h3>
      <p class="text-center text-dark mb-0">
        <?php printf(__('Mexico - febrero 2018','cristobalj')) ?>
      </p>
      <p class="text-center text-dark mb-0">
        <?php printf(__('Uruguay - junio 2018','cristobalj')) ?>
      </p>
    </div>
  </div>
</div>
    <div class="row">
      <div class="col-md-8 col-lg-9 content-text">
        <div id="block1">
          <div class="blockTitle">
            <h3><span><?php printf(__('Módulo 1. ','cristobalj')) ?></span><?php printf(__(' Tarot y psicología profunda','cristobalj')) ?></h3>
          </div>
          <div id="blocksContainer">
            <ul>
              <li class="metaBlock"><a class="" href="#block1"><?php printf(__('Tema 1','cristobalj')) ?></a></li>
              <li class="metaBlock"><a href="#block2"><?php printf(__('Tema 2','cristobalj')) ?></a></li>
            </ul>
          </div>
            <div class="blockTitle">
              <h3><span><?php printf(__('Tema 1. ','cristobalj')) ?></span><?php printf(__(' Tarot 1','cristobalj')) ?></h3>
            </div>
          <p class="content">
            <?php printf(__('"El Tarot es una vía, un camino, que puede transformarte profundamente, es un arte que une la parte intuitiva con la racional". Te muestra los pasos para llevar un orden psíquico-espiritual. El Tarot es un maestro que ayuda a transformarnos y le da forma al alma. </p>
            <p class = "content"> Antes de leer el Tarot, es necesario conectarse de un modo imaginario y orgánico con él, con  el cuerpo, mente y alma,  e  imaginarlo libre, convertirlo en sangre de tu sangre, alma de tu alma. (Cristobal J.)</p>

            <p class = "content">En este módulo, Cristóbal Jodorowsky, a través de diversas prácticas tanto de meditación cómo dinámicas corporales-creativas, guiará al grupo para entrar en contacto con los arquetipos, es decir: con la energía a que apuntan las cartas, porque todos nosotros somos energía. Y las cuatro energías fundamentales que trabajaremos en este módulo son: <br>
            <ul class = "content">
            <li> - Corporal / material representado por los Oros (cuerpo): tierra </li>
            <li>- Creativa / sexual representado por los Bastos (cerebro reptiliano): fuego </li>
            <li>- Emocional representado por las Copas (cerebro mamífero): agua </li>
            <li>- Intelectual representado por las Espadas (cerebro alto: córtex): aire </li></ul> </p>
            "','cristobalj')) ?>
          </p>
          <div class="blockTitle">
            <h3><span><?php printf(__('Tema 2. ','cristobalj')) ?></span><?php printf(__(' Estructura de la psicología madura','cristobalj')) ?></h3>
          </div>
          <p class="content">
            <?php printf(__('"Este proceso lleva tiempo, les daré las claves para aprender, claves que les serán útiles durante toda vuestra vida ". <br>
            Ser adultos no significa ser maduros y generar energía madura, madurar requiere voluntad, trabajo constante. </p>
            <p class = "content">He combinado diferentes fuentes, lo que he aprendido de otras personas y lo que ha sido mi experiencia personal.
            Puedo ayudarlos, pero para que funcione, depende de ustedes y su trabajo personal. Es necesario hacer un pacto con uno mismo. <br>
            Les puedo dar un mapa que muestre toda tu psicología, pero te tocará a ti recorrerlo y realizarlo,  guiarte y construirte internamente. <br>
            Estamos hablando de mapas y, por lo tanto, no del territorio; para estos mapas, utilizo símbolos que el cerebro puede comprender con facilidad". <br>
             (Cristobal Jodorowsky)','cristobalj')) ?>
          </p>
          <h3 class="Content"> <b>Teoría </b> </h3>
          <ul class="content">
            <li>- Analizaremos la anatomía de un problema y cuáles son los traumas fundamentales que forman la personalidad cómo adultos.</li>
            <lI>- Pruebas para identificar dónde nos encontramos. </li>
            <li>- Ejercicios y prácticas de meditación y corporales.</li>
            <li>- Cómo implementar el proceso alquímico desde el plomo hasta el oro psicológico.</li>
            <li>- Cómo aprender a tomar decisiones y definir tus propios límites.</li>
            <li>- Cuáles son las heridas fundamentas y que energía generan.</li>
            <li>- Qué es “energía emocional positiva” y cómo se genera.</li>
            <li>- Qué es estar en amor y qué no.</li>
            <li>-dependencia e interdependencia. </li>
            <li>- Qué es el “YO testigo”</li>
            <li>- Qué es el “éxito” </li>
            <li>- Qué es “la fuerza interior”.</li>
            <li>- Personalidad, carácter y temperamento.</li>
            <li>- Mapa de las emociones.</li>

          </ul>
        </div>
        <div id="block2">
          <div class="blockTitle">
            <h3><span><?php printf(__('Módulo 2. ','cristobalj')) ?></span><?php printf(__(' Metagenealogy','cristobalj')) ?></h3>
          </div>
          <p class="content">
            <?php printf(__('Metagenealogy is a method of analysis of the genealogical tree that allows to expand the vision of its psychic dimension. This makes us understand to what extent what we think, feel, desire or live, just as our conflicts and diseases can be the result of a family, social, historical past or educational waste.','cristobalj')) ?>
          </p>
        </div>
        <div id="block3">
          <div class="blockTitle">
            <h3><span><?php printf(__('Módulo 3. ','cristobalj')) ?></span><?php printf(__(' Psicochamanismo','cristobalj')) ?></h3>
          </div>
          <p class="content">
            <?php printf(__('"Psychomagia is a healing practice that acts through metaphor and beauty, essentially with the language of dreams. Psychomagia consists of symbolic acts that allow the realization of the unrealizable, restoring the memory to finally trigger the energy that was blocked in the consultant. By failing to consider the unconscious dimension as an enemy and losing the fear of seeing oneself, one can discover the traumas that cause suffering. However, although one knows what happens to him and why, he is not at all free from pain."','cristobalj')) ?>
          </p></div>
          <div id="block4">
            <div class="blockTitle">
              <h3><span><?php printf(__('Módulo 4. ','cristobalj')) ?></span><?php printf(__(' Psicomagia 1','cristobalj')) ?></h3>
            </div>
            <p class="content">
              <?php printf(__('At an archaic level, the human being responds to an innate instinct of family conservation. He is scheduled to fight for the survival of his clan. For the archaic brain an idea, an emotional structure, a prohibition, an order or a belief may be the metaphor of an ancestor. That is why it is so difficult for us to shed all those aspects that prevent us from growing, since this could represent the murder of a member (or of all) our species. This is how we keep alive ideas, memories, phantasms, morals, behavioral structures, and ideologies that come from the genealogical lineage.','cristobalj')) ?>
            </p></div>
            <div id="block5">
              <div class="blockTitle">
                <h3><span><?php printf(__('Módulo 5. ','cristobalj')) ?></span><?php printf(__(' Retiro','cristobalj')) ?></h3>
              </div>
              <p class="content">
                <?php printf(__('This Módulo is intended to address in depth the science of courtship. During his study, Cristobal Jodorowsky will provide the participants with the keys to live harmonious and healthy personal relationships.<br>
                The study of this block involves the analysis of temperaments (emotions), personality (intellect) and masculinity / femininity (instinct / reptile). It is essential to achieve in ourselves an adaptation to the structure of the nature of relationships, based on the fact that all existence is put into operation for couples to exist, and according to our vision live in harmony.','cristobalj')) ?>
              </p>
            </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <div class="video_container">
          <video id="metamundo" controls>
            <source src="https://s3-us-west-2.amazonaws.com/cristobalbucket/law/01/Metamundo+La+Escuela.mp4">
          </video>
        </div>
        <?php get_template_part('agenda'); ?>
      </div>
    </div>
    <div class="metamainpage" id="mainpage">


      </div>


    </main><!-- #main -->
  </div><!-- #primary -->

  <?php
  get_footer();
  ?>
