 <?php
 		foreach ($this->registration->getHot($tourist) as $key => $value):
			extract($value);
 ?>
 <div class="col-md-4" style="text-align:center">
 	<figure class="uk-overlay uk-overlay-hover thumbnail">
				<a href="/visit_hotel/<?php echo $id ?>"><img src="<?php echo "../assets/images/hotels/".$filename ?>" class="touris-image" style="padding:0;width:100%; height:200px;"/></a>
				<figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $hotel ?></figcaption>
		</figure>
 	<form class="form-horizontal origs" method="post" onsubmit="return false">
 			<?php 
 					$spotsss = $this->registration->getspots($ma);
 			 ?>
 				<input type="hidden" name="origin" value="<?php echo $hotel . ", " . $address ?>">
 				<input type="hidden" name="spots" value="<?php echo $spotsss['tourist'] . ", " . $spotsss['address'] ?>">
			<div class="btn-group" style="width:100%;">
	 			<button class="btn btn-success" style="width:50%">View On Map</button>
				<a href="/visit_hotel/<?php echo $id ?>" class="btn btn-info" name="button" style="width:50%">Visit</a>
			</div>
 	</form>
 	</div>
 <?php endforeach; ?>
