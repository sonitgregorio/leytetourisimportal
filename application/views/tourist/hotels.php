 <?php
 		foreach ($this->registration->getHot($tourist) as $key => $value):
			extract($value);
 ?>
 <div class="col-md-4" style="text-align:center">
 	<a href=""><img src=<?php echo "../assets/images/hotels/".$filename ?> class="thumbnail" alt="" style="padding:0;width:100%; height:200px;"/></a>
 	<form class="form-horizontal origs" method="post" onsubmit="return false">
 				<input type="hidden" name="origin" value="<?php echo $hotel . ", " . $address ?>">
 				<input type="hidden" name="spots" value="<?php echo "MacArthur Park, Palo Leyte" ?>">
			<div class="btn-group" style="width:100%;">
	 			<button class="btn btn-success" style="width:50%"><?php echo $hotel ?></button>
				<a class="btn btn-info" name="button" style="width:50%">Visit</a>
		</div>
 	</form>
 	</div>
 <?php endforeach; ?>
