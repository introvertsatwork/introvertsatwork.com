<?php snippet('header') ?>
<div class="container-fluid">
  <main class="main" role="main">
  	<div class="row">
		<div class="col-md-12">
	    	<div class="text">
	      		<h1><?php echo $page->title()->html() ?></h1>
	      		<?php echo $page->text()->kirbytext() ?>
	    	</div>
		</div>
	</div>
    <hr>

    <?php snippet('interviews') ?>

  </main>
  </div>

<?php snippet('footer') ?>