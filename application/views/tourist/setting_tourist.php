<form class="form" action="index.html" method="post">
  <div class="col-md-12">
        <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
            <!-- <img src="" alt="" /> -->
          </div>
          <div>
            <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="picture"></span>
            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
          </div>
        </div>
  </div>
  <div class="col-md-12">
    <label for="">Tourist Name</label>
    <input type="text" class="form-control" name="name" value="">
    <label for="">City</label>
    <select class="form-control" name="city">

    </select>
  </div>
  <div class="col-md-12">
    <label for="">Contact</label>
    <input type="text" class="form-control" name="name" value="">
    <label for="">Address</label>
    <input type="text" class="form-control" name="name" value="">
  </div>

  <div class="col-md-12">
    <label for="">Information</label>
    <textarea name="name" class="form-control" style="width:100%;height:150px;resize:none"></textarea>
    <br />
    <button type="submit" class="btn btn-success pull-right" name="button">Save</button>
    <br />    <br />
  </div>
</form>
