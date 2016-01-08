<div class="col-md-8 col-md-offset-2" style="padding-left:0">
  <div class="panel logins p-body">
  	  <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Log Trail</strong></h3></div>
      <div class="panel-body">
      	<div class="col-md-12">
            <form class="form-horizontal">
              <input type="hidden" id="nowdate" value="<?php echo Date('Y-m-d') ?>">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Show:</label>
                  <div class="col-sm-5">
                    <input type='hidden' value="10" id = "shows">
                    <!-- <select class="form-control" id="shows">
                      <option value="10">10</option>
                      <option value="10">20</option>
                      <option value="10">50</option>
                      <option value="10">100</option>
                    </select> -->
                  </div>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-sm-3 control-label">From</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="froms">
                  </div>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-sm-3 control-label">To</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="tos">
                  </div>
                  
                </div>
              </div>
            </form>
            <div class="filt">
              <?php 
                  $data = array('froms' => 0, 'tos' => 0, 'shows' => 10);
                  $this->load->view('admin/filter_logs', $data);
               ?> 

            </div>
            
      	</div>
      </div>
  </div>
</div>
