<?php
     $data = $this->registration->get_tourist_info($this->session->userdata('uid'));
 ?>
<form class="form" action="/insert_spot" method="post" enctype="multipart/form-data">
  <div class="col-md-12">
        <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
          <img src="<?php echo "../assets/images/touristspot/" . $data['filename'] ?>" alt="" />
          </div>
          <div>
            <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="picture"></span>
            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
          </div>
        </div>
  </div>
  <div class="col-md-12">
    <label for="">Tourist Name</label>
    <input type="text" class="form-control" name="touristspot" value="<?php echo $data['tourist'] ?>">
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
