<?php snippet('header') ?>


  <main class="main" role="main">

  <div class="hero">
      <?php if($image = $page->image('featured.jpg')): ?>
      <div class="hero" style="background-image: url(<?php echo $image->url() ?>)">
      </div>
      <?php endif ?> 
        
  </div>


  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1><?php echo $page->title()->html() ?></h1>
      <h4 class="description"><?php echo $page->description()->html() ?></h2>
      <h3 class="intro"><?php echo $page->intro()->html() ?></h3>
        <div class="text">
          <?php echo $page->text()->kirbytext() ?>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="blog-image">
          <?php echo $page->image1()->kirbytext() ?>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="text">
          <?php echo $page->text2()->kirbytext() ?>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="blog-image">
          <?php echo $page->image2()->kirbytext() ?>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="text">
          <?php echo $page->text3()->kirbytext() ?>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="blog-image">
          <?php echo $page->image3()->kirbytext() ?>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="text">
          <?php echo $page->text4()->kirbytext() ?>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="icons">
      <p class="share">Share this interview:</p>
      <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @introvertswork')?>" target="blank" title="Tweet this"><i class="fa fa-twitter"></i></a>
      <a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
      </div>
    </div>
  </div>

  <div>
      <?php if($page->hasNextVisible()): ?>
      <a href="<?php echo $page->nextVisible()->url() ?>">
      <?php endif ?>
        
        <?php if($image = $page->nextVisible()->image('featured.jpg')): ?>
          <div class="footer-next" style="background-image: url(<?php echo $image->url() ?>)">
          <div class="transparent">
          <div class="prev"><span>
          <h4 class="footer">PREVIOUS INTERVIEW</h4>
          <h1 class="footer"><?php echo $page->nextVisible()->title()->html() ?></h1></span></div>
          </div></div>
        <?php endif ?>
      </a>

  </div>


    <!-- 
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img class="image" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        </figure>
        <?php endforeach ?>
    </div>
  </div>-->

    <!-- 
    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav> -->

  </main>

<?php snippet('footer') ?>