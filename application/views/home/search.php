<div class="col-md-12 ">
  <div class="panel logins p-body" style="margin-top:0;box-shadow:none;margin-top:60px">
    <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-search"></span>&nbsp;Searched</h4></div>
      <div class="panel-body">
      <?php foreach ($this->registration->search_hotel($search) as $key => $value): ?>
        <div class="col-md-4" style="text-align:center">
            <figure class="uk-overlay uk-overlay-hover thumbnail">
                  <a href="/visit_hotel/<?php echo $value['id'] ?>" target="_blank"><img src="<?php echo "../assets/images/hotels/".$value['filename'] ?>" class="touris-image" style="padding:0;width:100%; height:200px;"/></a>
                  <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $value['hotel'] ?></figcaption>
              </figure>
            <form class="form-horizontal origs" method="post" onsubmit="return false">
         
                  <a href="/visit_hotel/<?php echo $value['id'] ?>" target="_blank" class="btn btn-info" name="button" style="width:50%">Visit</a>
           
            </form>
          </div>
      <?php endforeach ?>
      
      <?php foreach ($this->registration->search_tourist($search) as $key => $value): ?>
        <div class="col-md-4" style="text-align:center;margin-bottom:20px">
               <figure class="uk-overlay uk-overlay-hover thumbnail">
                   <a href="/tourist/<?php echo $value['id'] ?>" target="_blank"><img src="<?php echo "../assets/images/touristspot/".$value['filename'] ?>" class="touris-image" style="height:300px"/></a>
                   <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $value['tourist'] ?></figcaption>
               </figure>
                  <a class="btn btn-info btn-block" href="/tourist/<?php echo $value['id'] ?>" target="blank"><?php echo $value['tourist'] ?></a>
    
             </div>
      <?php endforeach ?>


      </div>
  </div>
</div>
