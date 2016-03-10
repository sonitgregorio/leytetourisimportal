
            <table class="table table-bordered table-striped">
              <thead class="grad">
                <tr style="color:#FFFF00;text-align:center">
                  <?php if ($this->session->userdata('usertype') == 4): ?>
                  <td>Type</td>
                  <td>Name</td>
                    
                  <?php endif ?>
                  <td>Activity</td>
                  <td>Date</td>
                  <td>Time</td>
                 </tr>
              </thead>
              <tbody>
                <?php 
                    $x =$this->registration->get_logs($froms, $tos, $shows);
                    foreach ($x as $key => $value):
                 ?>
                  <tr>
                    <?php if ($this->session->userdata('usertype') == 4): ?>
                      <td><?php echo $value['types'] ?></td>

                      <td><?php echo $value['firstname'] . " ". $value['middlename'] . " " . $value['lastname'] ?></td>
                    <?php endif ?>
                    <td><?php echo $value['description'] ?></td>
                    <td><?php echo $value['date'] ?></td>
                    <td><?php echo $value['tstamp'] ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>