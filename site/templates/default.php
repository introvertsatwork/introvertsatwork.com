<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
    	<div class="row">
   			<div class="col-md-6 col-md-offset-3">
		      <h1><?php echo $page->title()->html() ?></h1>
		      <?php echo $page->text()->kirbytext() ?>
    		</div>
    	</div>
    </div>
  </main>

<?php snippet('footer') ?>