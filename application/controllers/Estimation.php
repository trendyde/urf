<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Estimation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Estimation_model');
        if (!auth()->is_logged()) {
             return redirect(base_url('Auth'));
        }
       
    }
    public function index() {
        $data['title'] = 'Estimation :: URF';
        $data['page']	= 'estimation/Estimation_list';
        $data['results']	= $this->Estimation_model->allEstimationDetails();
        $this->load->view('main', $data);
    }

    public function add() {
    	$data['title'] = 'Estimation :: URF';
        //print_r($this->input->post()); exit();
        if(!empty($this->input->post())) {
            $muinput= $this->security->xss_clean($this->input->post());
            $add_estimation=$this->Estimation_model->add_estimation($muinput);
            echo "<script> alert('Successfully added');window.location= '".base_url('Estimation')."'</script>";
        }
        else {
            $data['title'] = 'Estimation :: URF';
            $data['page']   = 'estimation/Estimation_add';
            $data['results']    = $this->Estimation_model->allEstimationDetails();
            $this->load->view('main', $data);
        }
    }

    public function view_estimation($id) {
        $data['title'] = 'Estimation :: URF';
        $data['page']   = 'estimation/Estimation_view';
        $data['results']    = $this->Estimation_model->estimation_details($id);
        $this->load->view('main', $data);
    }


    public function edit_estimation($id) {
        $data['title'] = 'Estimation :: URF';
        $data['page']   = 'estimation/Estimation_edit';
        $data['results']    = $this->Estimation_model->estimation_details($id);
        $this->load->view('main', $data);
    }
    
     public function update() {
        $data['title'] = 'Estimation :: URF';
        //print_r($this->input->post()); exit();
        if(!empty($this->input->post())) {
            $muinput= $this->security->xss_clean($this->input->post());
            $add_estimation=$this->Estimation_model->update_estimation($muinput);
            echo "<script> alert('Successfully updated');window.location= '".base_url('Estimation')."'</script>";
        }
        else {
            $data['title'] = 'Estimation :: URF';
             $data['page']  = 'estimation/Estimation_list';
            $data['results']    = $this->Estimation_model->allEstimationDetails();
            $this->load->view('main', $data);
        }
    }
}