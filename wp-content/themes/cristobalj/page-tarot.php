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
          <div id="tarot-cards">
            <div id='001'></div>
            <div id='002'></div>
            <div id='003'></div>
            <div id='004'></div>
            <div id='005'></div>
            <div id='006'></div>
            <div id='007'></div>
            <div id='008'></div>
            <div id='009'></div>
            <div id='010'></div>
            <div id='011'></div>
            <div id='012'></div>
            <div id='013'></div>
            <div id='014'></div>
            <div id='015'></div>
            <div id='016'></div>
            <div id='017'></div>
            <div id='018'></div>
            <div id='019'></div>
            <div id='020'></div>
            <div id='021'></div>
            <div id='022'></div>
          </div>
        </div>
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
