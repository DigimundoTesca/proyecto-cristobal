<?php
/**
 * Template for displaying Know More page */

get_header(); ?>
<span style="font-size: 50px;" class="ir-arriba fa fa-angle-up"></span>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <p class="d-inline-block mt-5 mb-0 h4"><?php printf( __( 'Chose a theme', 'cristobalj' ));?></p>
    <div id="kmorebannercontainer">
      <img id="knowmore" class="mobilekmore" src="<?php echo get_template_directory_uri(); ?>/images/kmore.jpg" alt="banner know more">
      <div id="bigkmoreContainer" class="bigkmoreContainer">
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
        <a href="#Ngram" class="imgChange15 textBig"><?php printf( __( '', 'cristobalj' ));?></a>
        <a href="#Art" class="imgChange16 textSmall"><?php printf( __( 'Art', 'cristobalj' ));?></a>
      </div>
      <div class="flex-column justify-content-center align-items-center" id="moreQuote">
        <p class="quote"><?php printf( __( '"La integración de aspectos y claves son fundamentales para el desarrollo personal"', 'cristobalj' ));?></p>
        <p class="w-100 text-right"><?php printf( __( '- Cristobal Jodorowsky', 'cristobalj' ));?></p>
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
      <h3 id="Metagenealo" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Metagenealogia</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>“Las fuerzas de repetición y creación en su dinámica sin fin nos impulsan a la vez hacia la repetición de lo mismo y a ceder a lo que somos auténticamente. Los individuos, al mismo tiempo, pueden tener de sus bisabuelos, abuelos y padres, una visión positiva y otra negativa, convirtiéndose de este modo cada familiar en una entidad doble: una luminosa y otra oscura.  Dos campos de energía que, a pesar de oponerse, son complementarios.  En el tiempo presente, el espíritu que se materializa colinda con la materia que se espiritualiza, el supraconsciente con el inconsciente, el intento de realizar el futuro con el intento de repetir el pasado, el ser esencial con el ser socio-cultural, el deseo de crear con el deseo de imitar.  Al estudio del árbol genealógico bajo sus aspectos simultáneos y complementarios, tesoro y trampa, lo he llamado “Metagenealogía”.</p>
      <p class='cita'>Alejandro Jodorowsky (creador la Metagenalogía)</p>

      <p>La metagenealogía es un método de análisis del árbol genealógico que permite expandir la visión de su dimensión psíquica. Esto nos hace comprender hasta qué punto aquello que pensamos, sentimos, deseamos o vivimos, así como nuestros conflictos y enfermedades pueden ser el resultado de un pasado familiar, social, histórico o de residuos educativos patriarcales.
      <br>La metagenealogía pone al descubierto un sistema de repeticiones de fechas, enfermedades, nacimientos, muertes, accidentes y nombres.  Todos éstos son mapas que se recorren y transmiten de generación en generación hasta llegar a nosotros con la precisión de un reloj.   Tendemos a identificarnos y ser fieles a nuestros familiares, hasta tal punto que puede resultarnos doloroso, paralizante y auto destructivo.
      <br>A la vez, estos personajes – a quienes guardamos lealtad – imitaron a otras figuras del pasado, formando una cadena hereditaria de prisiones.  Revelar las dinámicas del clan permite comprender lo que inhibe dentro de nosotros la posibilidad de vivir, crear, ser y amar a partir del ser esencial.
      Por otro lado, es fundamental aceptar que todo es perfecto y que la genealogía es un proceso espiritual perfecto en acción, que nunca se equivoca, que tiene sus leyes y órdenes y que todo siempre tiene su razón de ser, aunque no siempre nos guste o estemos de acuerdo. Uno no trabaja para reparar algo que no “debió” haber sido, sino, más bien para aceptarlo como fue e integrarlo desde el alma.
      <br>Muy a menudo, después de un análisis genealógico Cristobal prepara un Psicoritual familiar o constelación psicomágica, en dónde invita a un grupo a teatralizar las situaciones vistas y re alinearlas con la corriente de la vida.
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
      <?php printf(__("<p>La psicomagia es la técnica terapéutica, iniciada por Alejandro Jodorowsky, quien aúna el chamanismo, la magia popular, la psicología, la intuición, el misticismo, la filosofía oriental, el arte, con una finalidad curativa. La psicomagia es una práctica sanadora que actúa a través del símbolo, la metáfora y la belleza, esencialmente con el lenguaje de los sueños. Al dejar de considerar a la dimensión inconsciente como un enemigo y perder el miedo a verse a uno mismo, uno puede descubrir los traumas que provocan sufrimiento. Sin embargo, aunque uno sepa lo que le sucede y el porqué, no es del todo libre del dolor. La psicomagia no pretende – como el psicoanálisis – curar a través de la palabra convirtiendo los mensajes que envía la dimensión inconsciente en un discurso racional, sino enseñarle al racional a manejar el lenguaje inconsciente.
      <br>Los procesos de nuestro cerebro son más simbólicos y analógicos que lógicos. Para éste, una fotografía no sólo representa a la persona retratada, sino que es ella misma. Considera a una parte como el todo, proyecta las personas que pueblan su memoria sobre seres reales o cosas. En la psicomagia se le proponen al consultante acciones concretas, efectuar un acto simbólico que, de alguna manera, restaurará su memoria y le permitirá realizar lo irrealizable.

      <br>No obstante, para lograr que el acto dé un óptimo resultado, el consultante antes debe liberarse de la moral impuesta por su familia, su sociedad y su cultura. Si lo hace podrá por ejemplo, sin temor, pegar una fotografía de su padre sobre dos sandías y las podrá hacer estallar a batacazos. Su dimensión inconsciente dará por realizado el asesinato y la castración. El consultante se sentirá así más libre. Aquello que nos atemoriza pierde fuerza en el momento en que dejamos de combatirlo o de alejarlo de la mente para integrarlo a través de un acto psicomágico que nos ayude a despertar y hacer de la vida un sueño lúcido lleno de conciencia. No basta con comprender el porqué de un conflicto; hay que actuarlo, darle una salida al impulso, al comportamiento repetitivo que nos dificulta la existencia. Así fue como se creó la psicomagia, el psicochamanismo y, más adelante, el psicorritual.
      </p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Tarot" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Tarot</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Para Carl Gustav Jung, los arquetipos son energías innatas comunes a todos los seres humanos, que se trasmiten a través de mitos o se nos aparecen en sueños, cuentos, leyendas, rituales y obras de arte.

      <br>Ellos serían los órganos de nuestro organismo psicológico que, colaborando permiten que nuestro proceso alquímico transformativo se lleve a cabo. En el Tarot, los arquetipos pueden actuar como patrones de conducta cuando el individuo necesita resolver una dificultad existencial. Los 78 arcanos del Tarot son arquetipos con infinitas interpretaciones, donde cada uno tiene una multitud de aspectos. Sin embargo, el dibujo de la carta será sólo una máscara. Se convierte en la llave que, si sabes cómo interpretarla e integrarla, activará la dimensión aliada del arquetipo.
      <br>Para ello, Cristóbal Jodorowsky utiliza los arcanos del Tarot como puertas para contactar con energías universales en sí. Estas puertas, al ser activadas, permiten un cambio profundo en el psiquismo, para que así nuestra alma se exprese en toda libertad.

      <br>En las antiguas culturas existían “cortes” de dioses que en el fondo podrían ser dimensiones de nuestra propia mente. El trabajo de Cristóbal con el Tarot consiste en despertar las cortes de dioses o arquetipos interiores de cada ser, utilizando los arcanos como una herramienta terapéutica que permiten ponernos en contacto con nuestro mundo interior y observar nuestros patrones de conducta adquiridos, con el fin de crear una estructura interior de referencia.

      El Tarot nos permite interpretar la psique humana y las diferentes dimensiones de nuestra conciencia. Gracias a su carácter simbólico, podemos ver reflejada nuestra realidad más profunda en los arcanos, situación que nos ayudará a enfocar la realidad desde otro ángulo, e integrar dificultades vitales, penas y dolores con más facilidad.

      <br>El Tarot también puede ser una representación espectacular de nuestra familia interior, un espejo de nuestro mundo íntimo que refleja nuestros nudos y cargas genealógicas, conflictos o relaciones complejas con padres, abuelos, hermanos y otros familiares del presente o del pasado. Asimismo, refleja nuestras repeticiones neuróticas, los ciclos en los que nos vemos atrapados, los mecanismos por los cuales enfermamos… Todo ello, en una dirección: el encuentro con lo más profundo de nuestro Ser Esencial.
       <br>A pesar de que el Tarot es un instrumento que nos comunica con la dimensión inconsciente. Cristobal piensa que cuando uno elige una carta es la dimensión supra-consiente (que sabe todo)  que la elige en nosotros para ayudarnos a desvelar lo que el ego no siempre estamos dispuestos a ver por miedo a cambiar de marco de referencia y mutar.
      </p>", 'cristobalj' )); ?>
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
      <?php printf(__("<p>Desde hace varios años Cristóbal Jodorowsky organiza viajes por todo el mundo encontrando las fuentes tradicionales del chamanismo y de la espiritualidad.
      <br>La participación en los rituales y sesiones de trance de los médiums en los viajes iniciáticos es para Cristóbal Jodorowsky una posibilidad de investigación sobre el chamanismo. Esto quiere decir que se analiza en los cultos visitados toda la fenomenología con el objeto de reinterpretarla a la luz de los conocimientos de la psicoterapia y de los paradigmas de hoy. Estos grupos iniciáticos se enfocan en pasar de las formas populares de las creencias espirituales y mágicas al psicochamanismo, donde se dejan a un lado los aspectos folklóricos tóxicos y religiosos para conservar la esencia del funcionamiento psíquico. Así, conscientemente y de forma autónoma son aplicados con autonomía al manejo de los potenciales psíquicos. En estos ritos, se respetan las formas de participación al culto con su lenguaje y liturgias, pero esto no quiere decir que el grupo se sienta identificado con su cosmología y visión espiritual.
      <br>A lo largo de los últimos años, estos grupos han recorrido los centros de trabajo chamánico de las favelas de las grandes ciudades, El Salto del Ángel en Venezuela, la montaña sagrada de Sorte, (centro del culto a María Lionza), las selvas del Orinoco, la cordillera andina peruana, y un largo etcétera. Estos viajeros iniciáticos visitaron el Mercado de las Brujas de la Ciudad de México, Yucatán, las selvas lacandonas y los sitios mayas; participaron en ceremonias sagradas en el monte Tepozteco y experimentaron temazcales indígenas.
      <br>En estos trabajos, los viajeros pueden laborar día a día con chamanes y curanderos de diferentes tradiciones espirituales, integrando una visión holística de las cosmovisiones tradicionales del continente americano.
      También propone un seminario itinerante de Tarot comprende un recorrido por escenarios naturales elegidos específicamente para trabajar en profundidad, guiados la mano de Cristobal Jodorowsky, en prácticas y ejercicios introspectivos que nos permiten tener acceso de modo vivencial, a la integración de cada arcano del Tarot de Marsella, en la búsqueda de una experiencia más amplia de estudio sobre sus implicaciones arquetípicas en nuestra psique. En el marco de los inigualablemente suntuosos parajes mayas del sureste de México, se realiza un profundo trabajo de auto-conocimiento y una labor terapéutica interior que nos ofrece mayores herramientas para renacer en plenitud a dimensiones más amplias de nuestro ser. Además, las expediciones viajeras resultan una buena ocasión para el trabajo y las consultas en psicomagia y Tarot, generando un recorrido personal desde la meditación y el autoanálisis hasta el ritual psicochamánico.
      </p>", 'cristobalj' )); ?>
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

    <?php get_template_part( 'secondarybanner' );  ?>


  </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
?>
