<div class="row">
  <div class="col-md-12">
    <h2></h2>
  </div>  
</div>


<ul class="teaser cf">
 <div class="row"> 
  <?php foreach(page('interviews')->children()->visible() as $interview): ?>
    
   
      <div class="col-md-4 thumbs">
        <li>
        <?php if($image = $interview->images()->sortBy('sort', 'asc')->first()): ?>
          <a href="<?php echo $interview->url() ?>">
            <img class="proj-thumb" src="<?php echo $image->url() ?>" alt="<?php echo $interview->title()->html() ?>" >
          </a>
          
          <h3 class="interview-list"><a href="<?php echo $interview->url() ?>"><?php echo $interview->title()->html() ?></a></h3>
          <p class="excerpt"><?php echo $interview->description()->excerpt(80) ?></p>
          <?php endif ?>
        </li>
      </div>
   
  <?php endforeach ?>
   </div>

</ul>

