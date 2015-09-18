<?php
		$x = $this->registration->get_galleries($spots);
 ?>

<?php foreach ($x as $key => $v):	?>
	<div class="col-md-4" style="text-align:center;margin-bottom:20px">
		<figure class="uk-overlay uk-overlay-hover thumbnail">
				<a href="#" class="res" data-toggle="modal" data-param="<?php echo $v['filename'] ?>" data-param1='<?php echo $v['descr'] ?>'><img src="<?php echo "../assets/images/gallery/".$v['filename'] ?> ?>" class="touris-image" style="padding:0;width:100%; height:200px;"/></a>
				<figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $v['descr'] ?></figcaption>
		</figure>
	</div>
<?php endforeach; ?>
