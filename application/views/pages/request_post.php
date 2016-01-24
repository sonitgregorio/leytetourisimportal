
<div class="col-md-12" >
  <div class="panel logins p-body">
    <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>List Of Posting Request</strong></h3></div>
    <div class="panel-body">
        <div class="table table-responsive">
          <table id="example" class="table table-bordered table-striped">
              <thead style="background:rgb(62, 169, 159);text-align:center">
                <tr>
                  <th>Name</th>
                  <th>Post</th>
                  <th>Image</th>
                  <th style="width:15%">Action</th>
                </tr>
                <tbody>
                  <?php foreach ($this->registration->get_annou('0') as $key => $value): ?>
                    <tr>
                      <td><?php echo $value['firstname'] . " " . $value['lastname'] ?></td>
                      <td><?php echo $value['announcement'] ?></td>
                      <td>
                        <?php if ($value['filename'] != ''): ?>
                          <a  href="#" class="annou" data-toggle="modal" data-param="<?php echo $value['filename'] ?>" data-param1='<?php echo "" ?>'><img class="thumbnail" width="30" height="30" style="clear:left"src="<?php echo '../assets/images/profpic/'.$value['filename'] ?>"> Click To View Image</a>
                        <?php endif ?>
                       
                      </td>
                      <td>
                        <a href="/appr_ann/<?php echo $value['id'] ?>" class="btn btn-success">Approve</a>
                        <a href="/delete_approve/<?php echo $value['id'] ?>" class="btn btn-danger">Cancel</a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </thead>
          </table>

        </div>
      </div>
    </div>
  </div>
