 <?php
 $loop = $results[0];
 ?>
 <!--start container-->
        <div class="container">
          <br>
          <h6>View Project Details</h6>
          <div id="profile-page" class="section">
           

            <!-- profile-page-content -->
            <div id="profile-page-content" class="row">
              <!-- profile-page-sidebar-->
              <div id="profile-page-sidebar" class="col s12 m6">
                

                <!-- Profile About Details  -->
                <ul id="profile-page-about-details" class="collection z-depth-1">
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Project Name</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->project_name; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Location </div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->location; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1">Consultant Name</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->consultant_name; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1">Contractor Name</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->contractor_name; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1">Responsible Salesman</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->responsible_salesman; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> E Date</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->e_date; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Control Name </div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->cn; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Project G-View</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->project_g_view; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Project Area</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->project_area; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Project Quantity</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->project_quantity; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Project Type</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->project_type; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> project size</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->project_size; ?></div>
                    </div>
                  </li>
                  
                  
                  </li>
                </ul>
                <!--/ Profile About Details  -->


              </div>
              <!-- profile-page-sidebar-->
              <!-- profile-page-sidebar-->
              <div id="profile-page-sidebar" class="col s12 m6">
                

                <!-- Profile About Details  -->
                <ul id="profile-page-about-details" class="collection z-depth-1">
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Project Diameters</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->project_diameters; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Average Diameter</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->average_diameter; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Wastage Rate</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->wastage_rate; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Shop Drawing Difficulty</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->shop_drawings_difficulty; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Shop Drawing Productivity</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->shop_drawings_productivity; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1">Fabrications Difficulty</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->fabrications_difficulty; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Fabrications Productivity</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->fabrications_productivity; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Tech Office Status</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->tech_office_status; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> Technical Recommendation</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->technical_recommentation; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"> From</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->from; ?></div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1">  To</div>
                      <div class="col s7 grey-text text-darken-4 right-align"><?= $loop->to; ?></div>
                    </div>
                  </li>
                  
                </ul>
                <!--/ Profile About Details  -->


              </div>
              <!-- profile-page-sidebar-->
              
             
            </div>
          </div>
        </div>