<div class="col-md-12" >
  <div class="panel logins p-body">
      <div class="panel-body">
        <div class="col-md-12">
          <div class="panel logins p-body" style="margin-top:0;box-shadow:none;background-color: #FFFFE0">
            <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-edit"></span>&nbsp;Frequently Asked Questions</h4></div>
              <div class="panel-body">
                    <div class="col-md-12">
                           <div class="col-md-6">
                              <?php echo $this->session->flashdata('message') ?>
                              <?php if ($this->session->userdata('usertype') != 4): ?>
                                 <form class="form-horizontal" method="post" action="/sub_faq">
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Name:</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="names" class="form-control" placeholder="Enter Your name" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Email Address</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="email" class="form-control" placeholder="Enter Your email Address" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Question</label>
                                    <div class="col-sm-9">
                                      <textarea name="feed" class="form-control" placeholder="Your Feedback Here!" required></textarea>
                                    </div>
                                  </div>
                                  <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </form>
                              <?php endif ?>
                             
                            </div> 


                          <!-- <hr style="background: #8C4600;height:2px;"> -->

                          <div class="col-md-12">
                          <br />
                          <?php foreach ($this->db->query('SELECT * FROM tbl_feedback')->result_array() as $key => $value): ?>
                            <div class="panel">
                             <div class="panel-primary">
                               <div class="panel-heading">
                               <span>
                                 Question : <?= $value['feedback'] ?>?
                               </span>
                               <span class="pull-right">
                                 Name : <?= strtoupper($value['name']) ?>&nbsp;&nbsp;&nbsp;Date : <?= $value['date'] ?>
                               </span>
                               </div>

                               <div class="panel-body">
                               <?php
                                $id = $value['id'];
                                foreach ($this->db->query("SELECT * FROM tbl_feedans WHERE feedid = $id")->result_array() as $key => $val): ?>
                                   * <?= $val['answer'] ?><br/><br/>
                                <?php endforeach ?>
                                 <?php if ($this->session->userdata('usertype') == 4): ?>
                                   <form class="form-horizontal" method="post" action="/sub_ans">
                                   <br />
                                    <input type="hidden" value="<?= $value['id'] ?>" name="feedid">
                                    <textarea class="form-control" name="ans" placeholder="Type your Answer Here!"></textarea>
                                    <div class="pull-right" style="margin-top:5px">
                                      <button class="btn btn-success" type="submit">Submit</button>
                                    </div>
                                 </form>
                                 <?php endif ?>
                                 
                               </div>
                             </div>
                           </div>
                          <?php endforeach ?>
                            
                          </div>
                           
                    </div>
              </div>
            </div>
        </div>

      </div>
  </div>
</div>
