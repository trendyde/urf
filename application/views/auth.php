<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('auth/auth_header');

?>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <?php $this->load->view($page); ?>

  


<?php
$this->load->view('auth/auth_footer'); 
?>