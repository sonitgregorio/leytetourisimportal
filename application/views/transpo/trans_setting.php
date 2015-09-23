<?php 
	$data = $this->transpo->trans_info();
 ?>
 <div class="col-md-8 col-md-offset-2">
  <div class="panel logins p-body">
    <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-edit"></span>&nbsp;Transportation Management</h4></div>
      <div class="panel-body">
            <div class="col-md-12" style="padding:0">
             <?php echo $this->session->flashdata('message') ?>
              <div>
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="<?php // echo $tabpane == 'information' ?  'active' : '' ?> active"><a href="#information" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-pencil fa-fw"></i>&nbsp;Information</a></li>
                  </ul>
                <div class="tab-content">
                    <div class="col-md-12 tab-pane active" role="tabpanel" id="information" style="background-color:#FFFFE0;">
                      <br/>
			<form class="form" action="/insert_trans" method="post" enctype="multipart/form-data">
			  <div class="col-md-12">
			        <div class="fileinput fileinput-new" data-provides="fileinput">
			          <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
			          <img src="<?php echo "../assets/images/transpo/" . $data['filename'] ?>" alt="" />
			          </div>
			          <div>
			            <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="picture"></span>
			            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
			          </div>
			        </div>
			  </div>
			  <div class="col-md-12">
			    <label for="">Hotel Name</label>
			    <input type="text" class="form-control" name="transpo" value="<?php echo $data['transpo'] ?>">
			    <label for="">City</label>
			    <select class="form-control" name="city">
			        <?php
			            foreach ($this->registration->select_city() as $key => $value):
			            extract($value);
			        ?>
			        <?php if ($city == $id): ?>
			            <option value="<?php echo $data['id'] ?>" selected><?php echo $city ?></option>
			        <?php else: ?>
			            <option value="<?php echo $id ?>"><?php echo $city ?></option>
			        <?php endif; ?>
			        <?php endforeach; ?>
			    </select>
			  </div>
			  <div class="col-md-12">
			    <label for="">Contact</label>
			    <input type="text" class="form-control" name="contact" value="<?php echo $data['contact'] ?>">
			    <label for="">Address</label>
			    <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>">
			  </div>

			  <div class="col-md-12">
			    <label for="">Information</label>
			    <textarea name="description" class="form-control" style="width:100%;height:150px;resize:none"><?php echo $data['information']   ?></textarea>
			    <br />
			    <button type="submit" class="btn btn-success pull-right" name="button">Save</button>
			    <br />    <br />
			  </div>
			</form>

                    </div>
                    <div class="col-md-12 tab-pane" role="tabpanel" id="images" style="background-color:#FFFFE0;">
                    </div>
                </div>
              </div>
            </div>

      </div>
    </div>
</div>
