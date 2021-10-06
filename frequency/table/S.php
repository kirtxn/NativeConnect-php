<div class="col-xl-4 col-sm-12 mb-xl-4">
     <div class="card mb-4">
          <div class="card-header pb-0">
               <h6>Phase S-N</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
               <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                         <thead>
                              <tr>
                                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Parameter</th>
                                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <td>
                                        <div class="d-flex px-4">
                                             <div class="mx-4 avatar avatar-sm rounded-circle me-2">
                                                  <h6 class="mb-0 text-sm">Now Frequency</h6>
                                             </div>
                                        </div>
                                   </td>
                                   <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                             <?php
                                                  $value = mysqli_query($connect,"SELECT frequency FROM S ORDER BY id DESC LIMIT 1 OFFSET 0");
                                                       while($d=mysqli_fetch_array($value)){
                                                  echo $d['frequency'];
                                                  }
                                             ?>
                                             Hz
                                        </p>
                                   </td>
                              </tr>
                              <tr>
                                   <td>
                                        <div class="d-flex px-4">
                                             <div class="mx-4 avatar avatar-sm rounded-circle me-2">
                                                  <h6 class="mb-0 text-sm">Max Frequency</h6>
                                             </div>
                                        </div>
                                   </td>
                                   <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                             <?php
                                                  $value = mysqli_query($connect,"SELECT MAX(frequency) FROM S");
                                                       while($d=mysqli_fetch_array($value)){
                                                  echo $d['MAX(frequency)'];
                                                  }
                                             ?>
                                             Hz
                                        </p>
                                   </td>
                              </tr>
                              <tr>
                                   <td>
                                        <div class="d-flex px-4">
                                             <div class="mx-4 avatar avatar-sm rounded-circle me-2">
                                                  <h6 class="mb-0 text-sm">Min Frequency</h6>
                                             </div>
                                        </div>
                                   </td>
                                   <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                             <?php
                                                  $value = mysqli_query($connect,"SELECT MIN(frequency) FROM S");
                                                       while($d=mysqli_fetch_array($value)){
                                                  echo $d['MIN(frequency)'];
                                                  }
                                             ?>
                                             Hz
                                        </p>
                                   </td>
                              </tr>
                              <tr>
                                   <td>
                                        <div class="d-flex px-4">
                                             <div class="mx-4 avatar avatar-sm rounded-circle me-2">
                                                  <h6 class="mb-0 text-sm">AVG Frequency</h6>
                                             </div>
                                        </div>
                                   </td>
                                   <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                             <?php
                                                  $value = mysqli_query($connect,"SELECT AVG(frequency) FROM S");
                                                       while($d=mysqli_fetch_array($value)){
                                                  echo $d['AVG(frequency)'];
                                                  }
                                             ?>
                                             Hz
                                        </p>
                                   </td>
                              </tr>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
</div>