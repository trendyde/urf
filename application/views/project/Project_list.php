<!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Projects</h5>
                <ol class="breadcrumb">
                    <li><a href="<?=base_url(); ?>">Dashboard</a></li>
                    <li><a href="<?=base_url(); ?>Projects">Projects</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            
            
           
            
            <!--Bordered Table-->
            <div id="bordered-table">
              <h4 class="header">View Project Details</h4>
              <div class="row">
               <div class="col s12 m12 32 btn-right">
                  <a href="<?=base_url('Project/add'); ?>"><button class="btn cyan waves-effect waves-light">Add</button></a>
               </div>
                <div class="col s12 m12 32">
                  <table class="responsive-table bordered hoverable centered">
                    <thead>
                      <tr>
                        <th>Project Name</th>
                        <th>Location</th>
                        <th>Consultant Name</th>
                        <th>Contractor Name</th>
                        <th>Owner Name</th>
                        <th>Delivery Quantity</th>
                        <th>Balance Quantity</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(count($results) > 0) {
                        foreach ($results as $loop) {
                          # code...
                          ?>
                        <tr>
                          <td><?=$loop->project_name; ?></td>
                          <td><?=$loop->location; ?></td>
                          <td><?=$loop->consultant_name; ?></td>
                          <td><?=$loop->contractor_name; ?></td>
                          <td><?=$loop->owner_name; ?></td>
                          <td><?=$loop->delivery_quantity; ?></td>
                          <td><?=$loop->balance_quantity; ?></td>
                          <td>
                            <a href="<?= base_url('Project/edit_project/'.$loop->p_id); ?>">Edit</a>
                            <a href="<?= base_url('Project/view_project/'.$loop->p_id); ?>">View</a>
                            <a href="#">Delete</a>
                          </td>
                        </tr>
                        <?php
                        }
                        
                      }
                      else {
                        ?>
                        <tr>
                          <td colspan="6">No results found.</td>
                        </tr>
                        <?php
                      }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

           
            


          </div>



        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->