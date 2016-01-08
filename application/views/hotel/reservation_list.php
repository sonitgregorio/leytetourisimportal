 
 <div class="col-md-12">
  <div class="panel logins p-body">
    <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-edit"></span>&nbsp;Rooms</h4></div>
      <div class="panel-body">
            <?php 
            	foreach ($this->room->get_room($id) as $v): 
            ?>
            	<div class="col-md-4">
		          <figure class="uk-overlay uk-overlay-hover thumbnail">
		              <a href="/view_req/<?php echo $v['id'] ?>" ><img src="<?php echo "../assets/images/rooms/".$v['filename'] ?>" class="touris-image" style="padding:0;width:100%;"/></a>
		              <center><figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom">
		              	<?php echo $v['roomno'] ?></figcaption></center>
		          </figure>
		           <div class="btn-group" style="width:100%;margin:top:10px">
		           	<a href="/view_req/<?php echo $v['id'] ?>" class="btn btn-success" style="width:100%"> 
		           	<span class="fa-stack fa-lg">
					      <i class="fa fa-circle fa-stack-2x" style="color:green"></i>
					     <?php 
					     		if ( $this->room->get_reserv($v['id']) > 0) 
					     		{
				     				$count = $this->room->get_reserv($v['id']);
					     		}
					     		else
					     		{
					     			$count = 0;
					     		}
					      ?>
					      <i class="fa fa-inverse fa-stack-1x"><?php echo $count ?></i>
   			 		</span>
   			 		Reservation Request
   			 	</a>
		           </div>
		        </div>
            <?php endforeach ?>
      </div>
    </div>
</div>
