<?php
		//$x = $this->registration->get_galleries($c);
		$x = $this->registration->get_transpo($cids);
		$or = $this->registration->getspots($spotsaa);
 ?>

<?php foreach ($x as $key => $v):	?>
	<div class="col-md-4" style="text-align:center;margin-bottom:20px">
		<figure class="uk-overlay uk-overlay-hover thumbnail">
		<?php echo $v['filename'] ?>
				<a href="#" class="res" data-toggle="modal" data-param="<?php echo $v['filename'] ?>" data-param1='<?php echo $v['information'] ?>'><img src="<?php echo "../assets/images/transpo/".$v['filename'] ?> ?>" class="touris-image" style="padding:0;width:100%; height:200px;"/></a>
				<figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $v['transpo'] ?></figcaption>
				
		</figure>
		<form class="form-horizontal origs" method="post" onsubmit="return false">
 				<input type="hidden" name="origin" value="<?php echo $v['transpo'] . ", " . $v['address'] ?>">
 				<input type="hidden" name="spots" value="<?php echo $or['tourist'] ."," . $or['address'] ?>">
			<div class="btn-group" style="width:100%;">
	 			<button class="btn btn-success" style="width:50%">View On Map</button>
				<a href="/visit_trans/<?php echo $v['owned'] ?>" class="btn btn-info" name="button" style="width:50%">Visit</a>
			</div>
 	</form>
	</div>
<?php endforeach; ?>