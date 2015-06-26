<?php snippet('header') ?>

<section class="contentblog">

 <div class="container">

      <?php $articles = $page->children()->visible()->flip()->paginate(3) ?>

    <?php foreach($articles as $article): ?>

    	<?php if($articles->pagination()->hasPages()): ?>

    <?php endif ?>

<div class="row">
  <div class="col-md-6 col-md-offset-3 blog-main">

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h2>
              <h4 class="date"><time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('F j, Y') ?></time></h4>    

               <!-- <a href="<?php echo $article->url() ?>" title="<?php echo html($article->title()) ?>" class="article-image">
                  <img class="featured-image" src="<?php echo $article->images()->first()->url() ?>" alt="<?php echo html($article->title()) ?>" />
                </a> -->

            <p><?php echo $article->text()->excerpt(300) ?></p>
        </div><!-- /.blog-post -->

   </div>

      <?php endforeach ?>


</div>


  <nav>
  <ul class="pager">
    <?php if($articles->pagination()->hasNextPage()): ?>
     <li><a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">Previous</a></li>
    <?php endif ?>

    <?php if($articles->pagination()->hasPrevPage()): ?>
    <li><a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">Next</a></li>
    <?php endif ?>
  </ul>
  </nav>
</div>


</section>


<?php snippet('footer') ?>

