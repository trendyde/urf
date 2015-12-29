<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!auth()->is_logged()) {
             return redirect(base_url('Auth'));
         }
       
    }
    public function index() {
        $data['title'] = 'Dashboard :: URF';
        $this->load->view('dashboard', $data);
    }
    
}