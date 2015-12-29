<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('general/header_attachments'); ?>


<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <?php $this->load->view('general/header_section'); ?>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <?php $this->load->view('general/sidebar'); ?>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      
      <?php $this->load->view($page); ?>

      <!-- //////////////////////////////////////////////////////////////////////////// -->
     

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



 <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <?php $this->load->view('general/footer_section'); ?>
    <!-- END FOOTER -->


    <?php $this->load->view('general/footer_attachments'); ?>
</body>
</html>