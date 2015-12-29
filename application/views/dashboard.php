<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('dashboard/dashboard_header'); ?>

<body>
   
    <?php $this->load->view('general/header_section'); ?>

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">
            <?php $this->load->view('general/sidebar'); ?>
            
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
           
        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <?php $this->load->view('general/footer_section'); ?>
    <!-- END FOOTER -->


    <?php $this->load->view('dashboard/dashboard_footer'); ?>
</body>
</html>