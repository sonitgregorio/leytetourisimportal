
            <table class="table table-bordered table-striped">
              <thead class="grad">
                <tr style="color:#FFFF00;text-align:center">
                  <td>Name</td>
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
                    <td><?php echo $value['firstname'] . " ". $value['middlename'] . " " . $value['lastname'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td><?php echo $value['date'] ?></td>
                    <td><?php echo $value['tstamp'] ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>