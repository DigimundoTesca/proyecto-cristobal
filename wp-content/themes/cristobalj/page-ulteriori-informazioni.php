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
      <?php printf(__("<p>Le forze della ripetizione e della creazione nella loro infinita dinamica ci spingono entrambi a ripetere lo stesso ea cedere a ciò che siamo autenticamente. Gli individui, allo stesso tempo, possono avere una visione positiva e negativa dai loro bisnonni, nonni e genitori, convertendo così ciascun parente in una doppia entità: una luminosa e l'altra oscura. Due campi di energia che, nonostante l'opposizione, sono complementari. Nel tempo presente, lo spirito che si materializza confina con la materia che è spiritualizzata, il supraconscio con l'inconscio, il tentativo di realizzare il futuro con l'intento di ripetere il passato, l'essere essenziale con l'essere socio-culturale, il desiderio creare con il desiderio di imitare. Per lo studio dell'albero genealogico sotto i suoi aspetti simultanei e complementari, tesoro e trappola, l'ho chiamato Metagenealogia.</p>
      <p>Alejandro Jodorowsky (creatore di Metagenalogy)</p>

      <p>La Metagenealogia è un metodo per analizzare l'albero genealogico che consente di espandere la visione della sua dimensione psichica. Questo ci fa capire fino a che punto ciò che pensiamo, sentiamo, desideriamo o viviamo, così come i nostri conflitti e malattie possono essere il risultato di un rifiuto educativo familiare, sociale, storico o patriarcale.
      La metagenealogia rivela un sistema di ripetizioni di date, malattie, nascite, morti, incidenti e nomi. Tutte queste sono mappe che vengono attraversate e trasmesse di generazione in generazione fino a quando non ci raggiungono con la precisione di un orologio. Tendiamo a identificarci e ad essere fedeli ai nostri parenti, al punto che può essere doloroso, paralizzante e autodistruttivo.
      Allo stesso tempo, questi personaggi - a cui manteniamo la lealtà - hanno imitato altre figure del passato, formando una catena ereditaria di prigioni. Rivelare le dinamiche del clan ci permette di capire cosa inibisce dentro di noi la possibilità di vivere, creare, essere e amare dall'essere essenziale.
      D'altra parte, è essenziale accettare che tutto sia perfetto e che la genealogia sia un perfetto processo spirituale in azione, che non sia mai sbagliato, che abbia le sue leggi e ordini e che tutto abbia sempre la sua ragione d'essere, sebbene non ci piaccia sempre o siamo d'accordo Non si lavora per riparare qualcosa che non dovrebbe essere stato, ma piuttosto per accettarlo com'era e integrarlo dall'anima.

      Molto spesso, dopo un'analisi genealogica, Cristobal prepara una famiglia psichica o costellazione psico-magnetica, dove invita un gruppo a drammatizzare le situazioni viste e riallinearle con il flusso della vita
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
      <?php printf(__("<p>
        La psicomagia è la tecnica terapeutica, iniziata da Alejandro Jodorowsky, che combina sciamanesimo, magia popolare, psicologia, intuizione, misticismo, filosofia orientale, arte, con uno scopo curativo. La psicomagia è una pratica di guarigione che agisce attraverso il simbolo, la metafora e la bellezza, essenzialmente con il linguaggio dei sogni. Non considerando la dimensione inconscia come un nemico e perdendo la paura di vedersi, si possono scoprire i traumi che causano sofferenza. Tuttavia, anche se si sa cosa gli succede e perché, non è del tutto privo di dolore. La psicomagia non pretende - come la psicoanalisi - di guarire attraverso la parola convertendo i messaggi che la dimensione inconscia manda in un discorso razionale, ma di insegnare al razionale a gestire il linguaggio inconscio. I processi del nostro cervello sono più simbolici e analogici che logici. Per lui, una fotografia rappresenta non solo la persona ritratta, ma è se stessa. Considera una parte come il tutto, proietta le persone che popolano la loro memoria di esseri o cose reali. Nella psicologia il cliente propone azioni concrete, per compiere un atto simbolico che, in qualche modo, ripristinerà la sua memoria e gli consentirà di eseguire l'irrealizzabile.
        <br>Tuttavia, per garantire che l'atto dia un risultato ottimale, il consulente deve prima liberarsi dalla moralità imposta dalla sua famiglia, dalla società e dalla cultura. Se lo fai, ad esempio, senza paura, puoi incollare una foto di tuo padre su due angurie e puoi farle esplodere. La sua dimensione inconscia darà per scontato omicidio e castrazione. Il consulente si sentirà più libero. Ciò che ci spaventa perde forza nel momento in cui smettiamo di combatterlo o allontanandolo dalla mente per integrarlo attraverso un atto psicomagico che ci aiuta a svegliare e rendere la vita un sogno lucido pieno di coscienza. Non è sufficiente comprendere la ragione di un conflitto; dobbiamo agire su di esso, dargli uno sfogo all'impulso, al comportamento ripetitivo che rende difficile la nostra esistenza. È così che è stata creata la psicomagia, lo psicochamanismo e, più tardi, lo psicologo.
        </p>", 'cristobalj' )); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="">
    </div>
    <div id="mainContainer" class="more">
      <h3 id="Tarot" class="moretitle">
        <?php
        printf(__('<span class="morecolor" >Tarot</span>', 'cristobalj' ));
        ?>
      </h3>
      <?php printf(__("<p>Per Carl Gustav Jung, gli archetipi sono energie innate comuni a tutti gli esseri umani, che sono trasmessi attraverso miti o appaiono in sogni, storie, leggende, rituali e opere d'arte. Sarebbero gli organi del nostro organismo psicologico che, collaborando, permettono che il nostro processo alchemico di trasformazione abbia luogo. Nei Tarocchi, gli archetipi possono agire come modelli di comportamento quando l'individuo ha bisogno di risolvere una difficoltà esistenziale. I 78 arcani dei Tarocchi sono archetipi con infinite interpretazioni, in cui ognuno ha una moltitudine di aspetti. Tuttavia, il disegno della lettera sarà solo una maschera. Diventa la chiave che, se sai come interpretarlo e integrarlo, attiverà la dimensione alleata dell'archetipo.

      <br>Per fare questo, Cristóbal Jodorowsky utilizza gli arcani dei Tarocchi come porte energie universali di contattarci. Queste porte, se attivate, permettono un profondo cambiamento nella psiche, così che la nostra anima si esprima in tutta libertà. Nelle culture antiche c'erano tagli di divinità che sullo sfondo potevano essere dimensioni della nostra stessa mente. Il lavoro di Christopher con i Tarocchi è quello di risvegliare i tribunali di divinità o archetipi interiori di ogni essere, utilizzando gli arcani come uno strumento terapeutico che ci permette di contattare il nostro mondo interiore e osserviamo i nostri modelli di comportamento acquisito, al fine di creare una struttura interna di riferimento. I Tarocchi ci permettono di interpretare la psiche umana e le diverse dimensioni della nostra coscienza. Grazie alla sua natura simbolica, possiamo vedere riflessa la nostra più profonda arcani, in realtà, una situazione che ci aiuterà a avviciniamo realtà da un'altra angolazione, e integrare difficoltà vitali, dolori e dolori più facilmente. I Tarocchi può anche essere una grande rappresentazione della nostra famiglia interiore, uno specchio del nostro mondo interiore che riflette i nostri nodi e carichi genealogici, conflitti o relazioni complesse con i genitori, nonni, fratelli e altri parenti presenti o passate. Essa riflette inoltre le nostre ripetizioni cicli nevrotici in cui veniamo catturati, i meccanismi attraverso i quali malati ... Tutto questo in una sola direzione: l'incontro con le profondità del nostro essere essenziale.  Anche se i Tarocchi sono uno strumento che ci comunica con la dimensione inconscia. Cristobal pensare che quando si sceglie una carta è la dimensione sovra-cosciente (che sa tutto) che ci sceglie di aiutarci a scoprire ciò che l'ego non sono sempre disposti a fare per paura del cambiamento e di un quadro mutare.
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
      <?php printf(__("<p>Per diversi anni Cristóbal Jodorowsky ha organizzato viaggi in tutto il mondo, trovando fonti tradizionali di sciamanesimo e spiritualità.
      <br>La partecipazione ai rituali e alle sessioni di trance dei medium nei viaggi iniziatici è per Cristóbal Jodorowsky una possibilità di ricerca sullo sciamanesimo. Ciò significa che tutta la fenomenologia viene analizzata nelle sette visitate per reinterpretarla alla luce della conoscenza della psicoterapia e dei paradigmi di oggi. Questi gruppi iniziatici si concentrano sul passaggio dalle forme popolari di credenze spirituali e spirituali allo psicosmmanismo, dove aspetti folcloristici tossici e religiosi vengono lasciati da parte per preservare l'essenza del funzionamento psichico. Quindi, consapevolmente e autonomamente, vengono applicati autonomamente alla gestione dei potenziali psichici. In questi riti, le forme di partecipazione al culto sono rispettate con il loro linguaggio e liturgie, ma questo non significa che il gruppo si senta identificato con la loro cosmologia e visione spirituale.
      <br>Negli ultimi anni, questi gruppi hanno visitato i centri di lavoro sciamanici delle favelas delle grandi città, El Salto del Angel in Venezuela, la sacra montagna di Sorte, (centro del culto di María Lionza), le giungle di Orinoco, la catena montuosa delle Ande peruviane, e una lunga eccetera. Questi viaggiatori iniziatici visitarono il mercato delle streghe di Città del Messico,
      <br>Lo Yucatan, le giungle lacandre e i siti maya; Hanno partecipato a cerimonie sacre sul Monte Tepozteco e hanno sperimentato temazcales indigeni. In questi lavori, i viaggiatori possono lavorare giorno dopo giorno con sciamani e guaritori di diverse tradizioni spirituali, integrando una visione olistica delle tradizionali cosmovisioni del continente americano. Propone inoltre un seminario itinerante Tarocchi comprende una visita di ambienti naturali appositamente scelti per lavorare in profondità, guidate la mano di Cristobal Jodorowsky nella pratica e gli esercizi introspettivi che ci permettono di accedere modo esperienziale, l'integrazione di ogni arcani dei Tarocchi Marsiglia, alla ricerca di una più ampia esperienza di studio sulle sue implicazioni archetipiche nella nostra psiche. Come parte dei sontuosi siti Maya Unicamente sud-est del Messico, un lavoro approfondito di conoscenza di sé e di un lavoro terapeutico interiore che ci dà più strumenti per rinascere pienamente le dimensioni più ampie del nostro corso di esecuzione. Inoltre, le spedizioni itineranti sono una buona opportunità per il lavoro e le consultazioni in psicomagia e tarocchi, generando un viaggio personale dalla meditazione e l'autoanalisi al rituale psico-cristiano. 
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
