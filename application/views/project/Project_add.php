<section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Project</h5>
                <ol class="breadcrumb">
                    <li><a href="<?=base_url(); ?>">Dashboard</a></li>
                    <li><a href="<?=base_url(); ?>Project">Project</a></li>
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
                <h4 class="header2">Add Project Details</h4>
                <div class="row">
                  <form class="col s12" action="<?=base_url('Project/add'); ?>" method="post">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="project_name" name="project_name" type="text">
                        <label for="project_name">Project Name</label>
                      </div>

                      <div class="input-field col s6">
                        <input id="owner_name" name="owner_name" type="text">
                        <label for="owner_name">Owner Name</label>
                      </div>


                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="armaor_no" name="armaor_no" type="text">
                        <label for="armaor_no">Armaor No</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="contractor_name" name="contractor_name" type="text">
                        <label for="contractor_name">Contractor Name
</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="consultant_name" name="consultant_name" type="text">
                        <label for="consultant_name">Consultant Name
</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="location" name="location" type="text">
                        <label for="location">Location</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        <input id="details" name="details" type="text">
                        <label for="details">Details</label>
                      </div>
                    
                      
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="start_date" name="start_date" type="text">
                        <label for="start_date">Date Started</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="finish_date" name="finish_date" type="text">
                        <label for="finish_date">Date Finished</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="project_quantity" name="project_quantity" type="text">
                        <label for="project_quantity">Project Quantity</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="delivery_quantity" name="delivery_quantity" type="text">
                        <label for="delivery_quantity">Delivered Quantity</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="balance_quantity" name="balance_quantity" type="text">
                        <label for="balance_quantity">Balance Quantity</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <select name="hard_copy">
                          <option value="" disabled selected>Hard Copy</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                        <label>Hard Copy</label>
                      </div> 
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="steel_type" name="steel_type" type="text">
                        <label for="steel_type">Steel Type</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="coupler_type" name="coupler_type" type="text">
                        <label for="coupler_type">Coupler Type</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="shop_drawing_bbs" name="shop_drawing_bbs" type="text">
                        <label for="shop_drawing_bbs">Shop Drawing / BBS</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="status" name="status" type="text">
                        <label for="status">Status</label>
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