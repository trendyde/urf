<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estimation_model extends CI_Model
{
     function __construct()
	 {
		  parent::__construct();		  
     }

    public function allEstimationDetails()
	 {
	 	$where = array('is_delete' => 1, 'status' => 0, 'award' => 1);

		 $this->db->select('e_id, project_name, location, consultant_name, contractor_name, responsible_salesman, e_date, cn')->from('urf_estimation');
		 $this->db->order_by('e_id', 'desc')->where($where); 
		 $query = $this->db->get();	
		 return $query->result();		          		
	 }

	 public function estimation_details($id)
	 {
	 	$where = array('is_delete' => 1, 'status' => 0, 'award' => 1, 'e_id' => $id);

		 $this->db->select('*')->from('urf_estimation');
		 $this->db->order_by('e_id', 'desc')->where($where); 
		 $query = $this->db->get();	
		 return $query->result();		          		
	 }

	 

	public function add_estimation($userParameters) {
	 	$project_name			= element( "project_name", $userParameters, "" );
		$location				= element( "location", $userParameters, ""); 
		$consultant_name		= element( "consultant_name", $userParameters, "" );
		$contractor_name		= element( "contractor_name", $userParameters, "" );
		$responsible_salesman	= element( "responsible_salesman", $userParameters, "" );
		$e_date					= element( "e_date", $userParameters, "" );
		$cn						= element( "cn", $userParameters, "" );
		$project_g_view			= element( "project_g_view", $userParameters, "" );
		$project_area			= element( "project_area", $userParameters, "" );
		$project_quantity		= element( "project_quantity", $userParameters, "" );
		$project_type			= element( "project_type"  , $userParameters, '0' );
		$project_size			= element( "project_size", $userParameters, ""); 
		$project_diameters		= element( "project_diameters", $userParameters, "" );
		$average_diameter		= element( "average_diameter", $userParameters, "" );
		$wastage_rate			= element( "wastage_rate", $userParameters, "" );
		$shop_drawings_difficulty= element( "shop_drawings_difficulty", $userParameters, "" );
		$shop_drawings_productivity= element( "shop_drawings_productivity 	", $userParameters, "" );
		$fabrications_difficulty= element( "fabrications_difficulty", $userParameters, "" );
		$fabrications_productivity= element( "fabrications_productivity", $userParameters, "" );
		$tech_office_status		= element( "tech_office_status", $userParameters, "" );
		$technical_recommentation= element( "technical_recommentation"  , $userParameters, '0' );
		$from					= element( "from", $userParameters, "" );
		$to						= element( "to", $userParameters, ""); 
		$u_id					= $this->session->userdata('auth.user_id');
		$award					= 1;
		$status					= 0;
		$is_delete				= 1;
		$added					= date("Y-m-d h:i:s");
		$updated				= date("Y-m-d h:i:s");
		
		$data = array('project_name' => $project_name, 'location' => $location, 
			'consultant_name' => $consultant_name, 'contractor_name' => $contractor_name, 'responsible_salesman' => $responsible_salesman,
			'e_date' => $e_date, 'cn' => $cn,
			'project_g_view' => $project_g_view, 'project_area' => $project_area,
			'project_quantity' => $project_quantity, 'project_type' => $project_type, 'project_size' => $project_size,
			'project_diameters' => $project_diameters, 'average_diameter' => $average_diameter, 'wastage_rate' => $wastage_rate,
			'shop_drawings_difficulty' => $shop_drawings_difficulty, 'shop_drawings_productivity' => $shop_drawings_productivity, 'fabrications_difficulty' => $fabrications_difficulty, 'fabrications_productivity' => $fabrications_productivity, 
			'tech_office_status' => $tech_office_status, 'technical_recommentation' => $technical_recommentation, 'from' => $from,
			'to' => $to, 'u_id' => $u_id, 'award' => $award, 'status' => $status, 'is_delete' => $is_delete, 'added' => $added, 'updated' => $updated); 
			$this->db->insert('urf_estimation', $data);
	 }


	 public function update_estimation($userParameters) {
	 	$project_name			= element( "project_name", $userParameters, "" );
		$location				= element( "location", $userParameters, ""); 
		$consultant_name		= element( "consultant_name", $userParameters, "" );
		$contractor_name		= element( "contractor_name", $userParameters, "" );
		$responsible_salesman	= element( "responsible_salesman", $userParameters, "" );
		$e_date					= element( "e_date", $userParameters, "" );
		$cn						= element( "cn", $userParameters, "" );
		$project_g_view			= element( "project_g_view", $userParameters, "" );
		$project_area			= element( "project_area", $userParameters, "" );
		$project_quantity		= element( "project_quantity", $userParameters, "" );
		$project_type			= element( "project_type"  , $userParameters, '0' );
		$project_size			= element( "project_size", $userParameters, ""); 
		$project_diameters		= element( "project_diameters", $userParameters, "" );
		$average_diameter		= element( "average_diameter", $userParameters, "" );
		$wastage_rate			= element( "wastage_rate", $userParameters, "" );
		$shop_drawings_difficulty= element( "shop_drawings_difficulty", $userParameters, "" );
		$shop_drawings_productivity= element( "shop_drawings_productivity 	", $userParameters, "" );
		$fabrications_difficulty= element( "fabrications_difficulty", $userParameters, "" );
		$fabrications_productivity= element( "fabrications_productivity", $userParameters, "" );
		$tech_office_status		= element( "tech_office_status", $userParameters, "" );
		$technical_recommentation= element( "technical_recommentation"  , $userParameters, '0' );
		$from					= element( "from", $userParameters, "" );
		$to						= element( "to", $userParameters, ""); 
		$u_id					= $this->session->userdata('auth.user_id');
		$updated				= date("Y-m-d h:i:s");
		
		$data = array('project_name' => $project_name, 'location' => $location, 
			'consultant_name' => $consultant_name, 'contractor_name' => $contractor_name, 'responsible_salesman' => $responsible_salesman,
			'e_date' => $e_date, 'cn' => $cn,
			'project_g_view' => $project_g_view, 'project_area' => $project_area,
			'project_quantity' => $project_quantity, 'project_type' => $project_type, 'project_size' => $project_size,
			'project_diameters' => $project_diameters, 'average_diameter' => $average_diameter, 'wastage_rate' => $wastage_rate,
			'shop_drawings_difficulty' => $shop_drawings_difficulty, 'shop_drawings_productivity' => $shop_drawings_productivity, 'fabrications_difficulty' => $fabrications_difficulty, 'fabrications_productivity' => $fabrications_productivity, 
			'tech_office_status' => $tech_office_status, 'technical_recommentation' => $technical_recommentation, 'from' => $from,
			'to' => $to, 'u_id' => $u_id, 'updated' => $updated); 
			$this->db->update('urf_estimation', $data);
	 }

}