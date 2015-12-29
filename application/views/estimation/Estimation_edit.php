 <?php
 $loop = $results[0];
 ?>
 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Estimation</h5>
                <ol class="breadcrumb">
                    <li><a href="<?=base_url(); ?>">Dashboard</a></li>
                    <li><a href="<?=base_url(); ?>estimation">Estimation</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          
         
          <!--Form Advance-->          
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Edit Estimation Details</h4>
                <div class="row">
                  <form class="col s12" action="<?=base_url('Estimation/update'); ?>" method="post">
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="project_name" name="project_name" type="text"  value="<?= $loop->project_name; ?>">
                        <label for="project_name">Project Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="e_date" name="e_date" type="text"  value="<?= $loop->e_date; ?>" >
                        <label for="e_date">Date</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="cn" name="cn" type="text"  value="<?= $loop->cn; ?>">
                        <label for="cn">Control Name</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="responsible_salesman" name="responsible_salesman" type="text"  value="<?= $loop->responsible_salesman; ?>" >
                        <label for="responsible_salesman">Responsible Salesman</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="location" name="location" type="text"  value="<?= $loop->location; ?>">
                        <label for="location">Location</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="consultant_name" name="consultant_name" type="text"  value="<?= $loop->consultant_name; ?>">
                        <label for="consultant_name">Consultant Name</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="contractor_name" name="contractor_name" type="text"  value="<?= $loop->contractor_name; ?>">
                        <label for="contractor_name">Contractor Name</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        <input id="project_g_view" name="project_g_view" type="text"  value="<?= $loop->project_g_view; ?>">
                        <label for="project_g_view">Project G-View</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="project_area" name="project_area" type="text"  value="<?= $loop->project_area; ?>">
                        <label for="project_area">Project Area</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="project_quantity" name="project_quantity" type="text"  value="<?= $loop->project_quantity; ?>">
                        <label for="project_quantity">Project Quantity</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <select name="project_type">
                          <option value="" disabled selected>Project Type</option>
                          <option value="Villas-Small Build" <?php  if($loop->project_type == "Villas-Small Build") { ?> selected <?php } ?>>Villas-Small Build</option>
                          <option value="High Rise-Towers" <?php  if($loop->project_type == "High Rise-Towers") { ?> selected <?php } ?>>High Rise-Towers</option>
                          <option value="Low Rise-Wide area" <?php  if($loop->project_type == "Low Rise-Wide area") { ?> selected <?php } ?>>Low Rise-Wide area</option>
                          <option value="Roads & bridges" <?php  if($loop->project_type == Roads & bridges) { ?> selected <?php } ?>>Roads & bridges</option>
                          <option value="Infrastructure" <?php  if($loop->project_type == "Infrastructure") { ?> selected <?php } ?>>Infrastructure</option>
                          <option value="Others" <?php  if($loop->project_type == "Others") { ?> selected <?php } ?>>Others</option>
                        </select>
                        <label>Project Type</label>
                      </div>    
                    
                      <div class="input-field col s6">
                        <select name="project_size">
                          <option value="" disabled selected>Project Size</option>
                          <option value="Small" <?php  if($loop->project_size == "Small") { ?> selected <?php } ?>>Small</option>
                          <option value="Medium" <?php  if($loop->project_size == "Medium") { ?> selected <?php } ?>>Medium</option>
                          <option value="Big" <?php  if($loop->project_size == "Big") { ?> selected <?php } ?>>Big</option>
                        </select>
                        <label>Project Type</label>
                      </div> 
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <label>Project Diameters</label>
                        <br>
                      </div>
                      <div class="input-field col s12 estimation">
                        <input type="checkbox" id="test1" name="project_diameters[]" />
                        <label for="test1">T8</label>&nbsp;
                        <input type="checkbox" id="test2" name="project_diameters[]" />
                        <label for="test2">T10</label>
                        <input type="checkbox" id="test3" name="project_diameters[]" />
                        <label for="test3">T12</label>
                        <input type="checkbox" id="test4" name="project_diameters[]" />
                        <label for="test4">T14</label>
                        <input type="checkbox" id="test5" name="project_diameters[]" />
                        <label for="test5">T16</label>
                        <input type="checkbox" id="test6" name="project_diameters[]" />
                        <label for="test6">T20</label>
                        <input type="checkbox" id="test7" name="project_diameters[]" />
                        <label for="test7">T25</label>
                        <input type="checkbox" id="test8" name="project_diameters[]" />
                        <label for="test8">T32</label>
                        <input type="checkbox" id="test9" name="project_diameters[]" />
                        <label for="test9">T40</label>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="average_diameter" type="text"  value="<?= $loop->average_diameter; ?>" name="average_diameter">
                        <label for="average_diameter">Average Diameter</label>
                      </div> 
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        
                        <select name="wastage_rate">
                          <option value="" disabled selected>Wastage Rate</option>
                          <option value="Low" <?php  if($loop->wastage_rate == "Low") { ?> selected <?php } ?>>Low</option>
                          <option value="Normal" <?php  if($loop->wastage_rate == "Normal") { ?> selected <?php } ?>>Normal</option>
                          <option value="Big" <?php  if($loop->wastage_rate == "Big") { ?> selected <?php } ?>>Big</option>
                        </select>
                        <label>Wastage Rate</label>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <select name="shop_drawings_difficulty">
                          <option value="" disabled selected>Shop Drawing Diffuculity</option>
                          <option value="Easy" <?php  if($loop->shop_drawings_difficulty == "Easy") { ?> selected <?php } ?>>Easy</option>
                          <option value="Medium" <?php  if($loop->shop_drawings_difficulty == "Medium") { ?> selected <?php } ?>>Medium</option>
                          <option value="Hard" <?php  if($loop->shop_drawings_difficulty == "Hard") { ?> selected <?php } ?>>Hard</option>
                        </select>
                        <label>Shop Drawing Diffuculity </label>
                      </div>
                      <div class="input-field col s6">
                        <select name="shop_drawings_productivity  ">
                          <option value="" disabled selected>Shop Drawing Productivity</option>
                          <option value="High" <?php  if($loop->shop_drawings_productivity == "High") { ?> selected <?php } ?>>High</option>
                          <option value="Medium" <?php  if($loop->shop_drawings_productivity == "Medium") { ?> selected <?php } ?>>Medium</option>
                          <option value="Low" <?php  if($loop->shop_drawings_productivity == "Low") { ?> selected <?php } ?>>Low</option>
                        </select>
                        <label>Shop Drawing Productivity</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <select name="fabrications_difficulty">
                          <option value="" disabled selected>Fabrication Diffuculity</option>
                          <option value="Easy" <?php  if($loop->fabrications_difficulty == "Easy") { ?> selected <?php } ?>>Easy</option>
                          <option value="Medium" <?php  if($loop->fabrications_difficulty == "Medium") { ?> selected <?php } ?>>Medium</option>
                          <option value="Hard" <?php  if($loop->fabrications_difficulty == "Hard") { ?> selected <?php } ?>>Hard</option>
                        </select>
                        <label>Fabrication Diffuculity</label>
                      </div>
                      <div class="input-field col s6">
                        <select name="fabrications_productivity   ">
                          <option value="" disabled selected>Fabrication Productivity</option>
                          <option value="Small" <?php  if($loop->fabrications_productivity == "Small") { ?> selected <?php } ?>>Small</option>
                          <option value="Medium" <?php  if($loop->fabrications_productivity == "Medium") { ?> selected <?php } ?>>Medium</option>
                          <option value="Big" <?php  if($loop->fabrications_productivity == "Big") { ?> selected <?php } ?>>Big</option>
                        </select>
                        <label>Fabrication Productivity </label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <select name="tech_office_status">
                          <option value="" disabled selected>Tech Office Status</option>
                          <option value="There is Space" <?php  if($loop->tech_office_status == "There is Space") { ?> selected <?php } ?>>There is Space</option>
                          <option value="No Space" <?php  if($loop->tech_office_status == "No Space") { ?> selected <?php } ?>>No Space</option>
                          <option value="May Be" <?php  if($loop->tech_office_status == "May Be") { ?> selected <?php } ?>>May Be</option>
                        </select>
                        <label>Tech Office Status</label>
                      </div>
                      <div class="input-field col s6">
                        <select name="technical_recommentation">
                          <option value="" disabled selected>Technical Recommentation</option>
                          <option value="Recommended" <?php  if($loop->technical_recommentation == "Recommended") { ?> selected <?php } ?>>Recommended</option>
                          <option value="Not Recommended" <?php  if($loop->technical_recommentation == "Not Recommended") { ?> selected <?php } ?>>Not Recommended</option>
                          <option value="May Be" <?php  if($loop->technical_recommentation == "May Be") { ?> selected <?php } ?>>May Be</option>
                        </select>
                        <label>Technical Recommentation</label>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="from" name="from" type="text"  value="<?= $loop->from; ?>">
                        <label for="from">From</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="to" name="to" type="text"  value="<?= $loop->to; ?>">
                        <label for="to">To</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update
                          <i class="mdi-content-send right"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>