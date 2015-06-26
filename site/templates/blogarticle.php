<?php snippet('header') ?>

<div class="container">
<div class="row">

<section class="content blogarticle">

  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
  <article class="blog">
    <h1><?php echo $page->title()->html() ?></h1>
    <h4><time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F j, Y') ?></time></h4>
    <?php echo $page->text()->kirbytext() ?>
  </article>

  <?php snippet('disqus', array('disqus_shortname' => 'myawesomeblog', 'disqus_developer' => true)) ?>

</section>
  </div>
  </div>
<?php snippet('footer') ?>
