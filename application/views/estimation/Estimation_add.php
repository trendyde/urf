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
                <h4 class="header2">Add Estimation Details</h4>
                <div class="row">
                  <form class="col s12" action="<?=base_url('Estimation/add'); ?>" method="post">
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="project_name" name="project_name" type="text">
                        <label for="project_name">Project Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="e_date" name="e_date" type="text">
                        <label for="e_date">Date</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="cn" name="cn" type="text">
                        <label for="cn">Control Name</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="responsible_salesman" name="responsible_salesman" type="text">
                        <label for="responsible_salesman">Responsible Salesman</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="location" name="location" type="text">
                        <label for="location">Location</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="consultant_name" name="consultant_name" type="text">
                        <label for="consultant_name">Consultant Name</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="contractor_name" name="contractor_name" type="text">
                        <label for="contractor_name">Contractor Name</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        <input id="project_g_view" name="project_g_view" type="text">
                        <label for="project_g_view">Project G-View</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="project_area" name="project_area" type="text">
                        <label for="project_area">Project Area</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="project_quantity" name="project_quantity" type="text">
                        <label for="project_quantity">Project Quantity</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <select name="project_type">
                          <option value="" disabled selected>Project Type</option>
                          <option value="Villas-Small Build">Villas-Small Build</option>
                          <option value="High Rise-Towers">High Rise-Towers</option>
                          <option value="Low Rise-Wide area">Low Rise-Wide area</option>
                          <option value="Roads & bridges">Roads & bridges</option>
                          <option value="Infrastructure">Infrastructure</option>
                          <option value="Others">Others</option>
                        </select>
                        <label>Project Type</label>
                      </div>    
                    
                      <div class="input-field col s6">
                        <select name="project_size">
                          <option value="" disabled selected>Project Size</option>
                          <option value="Small">Small</option>
                          <option value="Medium">Medium</option>
                          <option value="Big">Big</option>
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
                        <input type="checkbox" id="test1" name="project_diameters" value="T8"/>
                        <label for="test1">T8</label>&nbsp;
                        <input type="checkbox" id="test2" name="project_diameters"  value="T10" />
                        <label for="test2">T10</label>
                        <input type="checkbox" id="test3" name="project_diameters"   value="T12"/>
                        <label for="test3">T12</label>
                        <input type="checkbox" id="test4" name="project_diameters"  value="T14" />
                        <label for="test4">T14</label>
                        <input type="checkbox" id="test5" name="project_diameters"  value="T16"/>
                        <label for="test5">T16</label>
                        <input type="checkbox" id="test6" name="project_diameters"  value="T20" />
                        <label for="test6">T20</label>
                        <input type="checkbox" id="test7" name="project_diameters"  value="T25" />
                        <label for="test7">T25</label>
                        <input type="checkbox" id="test8" name="project_diameters"  value="T32"/>
                        <label for="test8">T32</label>
                        <input type="checkbox" id="test9" name="project_diameters"  value="T40" />
                        <label for="test9">T40</label>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="average_diameter" type="text" name="average_diameter">
                        <label for="average_diameter">Average Diameter</label>
                      </div> 
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        
                        <select name="wastage_rate">
                          <option value="" disabled selected>Wastage Rate</option>
                          <option value="Low">Low</option>
                          <option value="Normal">Normal</option>
                          <option value="Big">Big</option>
                        </select>
                        <label>Wastage Rate</label>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <select name="shop_drawings_difficulty">
                          <option value="" disabled selected>Shop Drawing Diffuculity</option>
                          <option value="Easy">Easy</option>
                          <option value="Medium">Medium</option>
                          <option value="Hard">Hard</option>
                        </select>
                        <label>Shop Drawing Diffuculity </label>
                      </div>
                      <div class="input-field col s6">
                        <select name="shop_drawings_productivity  ">
                          <option value="" disabled selected>Shop Drawing Productivity</option>
                          <option value="High">High</option>
                          <option value="Medium">Medium</option>
                          <option value="Low">Low</option>
                        </select>
                        <label>Shop Drawing Productivity</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <select name="fabrications_difficulty">
                          <option value="" disabled selected>Fabrication Diffuculity</option>
                          <option value="Easy">Easy</option>
                          <option value="Medium">Medium</option>
                          <option value="Hard">Hard</option>
                        </select>
                        <label>Fabrication Diffuculity</label>
                      </div>
                      <div class="input-field col s6">
                        <select name="fabrications_productivity   ">
                          <option value="" disabled selected>Fabrication Productivity</option>
                          <option value="Small">Small</option>
                          <option value="Medium">Medium</option>
                          <option value="Big">Big</option>
                        </select>
                        <label>Fabrication Productivity </label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <select name="tech_office_status">
                          <option value="" disabled selected>Tech Office Status</option>
                          <option value="There is Space">There is Space</option>
                          <option value="No Space">No Space</option>
                          <option value="May Be">May Be</option>
                        </select>
                        <label>Tech Office Status</label>
                      </div>
                      <div class="input-field col s6">
                        <select name="technical_recommentation">
                          <option value="" disabled selected>Technical Recommentation</option>
                          <option value="Recommended">Recommended</option>
                          <option value="Not Recommended">Not Recommended</option>
                          <option value="May Be">May Be</option>
                        </select>
                        <label>Technical Recommentation</label>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="from" name="from" type="text">
                        <label for="from">From</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="to" name="to" type="text">
                        <label for="to">To</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
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