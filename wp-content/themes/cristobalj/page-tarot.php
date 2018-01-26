<?php
/**
 * Template for displaying tarot page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div id="banner" class="bannermobile tarot">
    </div>
    <div class="mobilecontainer">
      <div class="bannertext">
        <h2 class="bannertitle">
          <?php printf(__('Tarot!','cristobalj')) ?>
        </h2>
        <p class="name"><?php printf(__('"Cristobal will answer some queries"','cristobalj')) ?></p>
      </div>
      <div class="newscontainer">
        <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
      </div>
    </div>
    <div id="banner1" class="bannerbig tarot">
      <div class="bannercontainer">
        <div class="bannertext">
          <h2 class="bannertitle">
            <?php printf(__('Tarot!','cristobalj')) ?>
          </h2>
          <p class="name"><?php printf(__('"Cristobal will answer some queries"','cristobalj')) ?></p>
        </div>
      </div>
    </div>

    <div class="mainpage" id="mainpage">
      <div class="container-fluid">
        <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
        <div class="container">
          <div  class="row"><img id="imgRet" src="http://nkmediasolutions.com/images/Icon-arrow-left-white.png"  alt="" style="height: 15px;" class="Reintentar" > <label class="Reintentar mano" id="return" onClick="window.location.reload()" style="color:#000; font-size: 24px; ">Reintentar</label></div>
          <div class="row justify-content-center"  id="tarot-layout" style="height: 500px;">
            <div  class="col-md-4"></div>
            <div  class="col-md-4"></div>
            <div  class="col-md-4"></div>
          </div>
          <div id="tarot-cards" class="row col-md-12">
            <div id='070'></div>
            <div id='151'></div>
            <div id='041'></div>
            <div id='180'></div>
            <div id='170'></div>
            <div id='011'></div>
            <div id='200'></div>
            <div id='030'></div>
            <div id='080'></div>
            <div id='220'></div>
            <div id='160'></div>
            <div id='130'></div>
            <div id='191'></div>
            <div id='021'></div>
            <div id='110'></div>
            <div id='100'></div>
            <div id='091'></div>
            <div id='210'></div>
            <div id='050'></div>
            <div id='120'></div>
            <div id='140'></div>
            <div id='060'></div>
          </div>
        </div>
      </div>
    </div> 



  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>