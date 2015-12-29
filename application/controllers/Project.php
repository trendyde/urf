<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model');
        if (!auth()->is_logged()) {
             return redirect(base_url('Auth'));
        }
       
    }
    public function index() {
        $data['title'] = 'Project :: URF';
        $data['page']	= 'project/Project_list';
        $data['results']	= $this->Project_model->allProjectDetails();
        $this->load->view('main', $data);
    }

    public function add() {
    	$data['title'] = 'Project :: URF';
        //print_r($this->input->post()); exit();
        if(!empty($this->input->post())) {
            $muinput= $this->security->xss_clean($this->input->post());
            $add_estimation=$this->Project_model->add_project($muinput);
            echo "<script> alert('Successfully added');window.location= '".base_url('Project')."'</script>";
        }
        else {
            $data['title'] = 'Project :: URF';
            $data['page']   = 'project/Project_add';
            $data['results']    = $this->Project_model->allProjectDetails();
            $this->load->view('main', $data);
        }
    }

    public function view_estimation($id) {
        $data['title'] = 'Project :: URF';
        $data['page']   = 'estimation/Project_view';
        $data['results']    = $this->Project_model->estimation_details($id);
        $this->load->view('main', $data);
    }


    public function edit_project($id) {
        $data['title'] = 'Project :: URF';
        $data['page']   = 'Project/Project_edit';
        $data['results']    = $this->Project_model->project_details($id);
        $this->load->view('main', $data);
    }
    
     public function update() {
        $data['title'] = 'Project :: URF';
        //print_r($this->input->post()); exit();
        if(!empty($this->input->post())) {
            $muinput= $this->security->xss_clean($this->input->post());
            $add_estimation=$this->Project_model->update_estimation($muinput);
            echo "<script> alert('Successfully updated');window.location= '".base_url('Project')."'</script>";
        }
        else {
            $data['title'] = 'Project :: URF';
             $data['page']  = 'estimation/Project_list';
            $data['results']    = $this->Project_model->allProjectDetails();
            $this->load->view('main', $data);
        }
    }
}