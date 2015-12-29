<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model
{
     function __construct()
	 {
		  parent::__construct();		  
     }

    public function allProjectDetails()
	 {
	 	$where = array('is_delete' => 1, 'status' => 0);

		 $this->db->select('p_id, project_name, location, consultant_name, contractor_name, owner_name, delivery_quantity, balance_quantity')->from('urf_project');
		 $this->db->order_by('p_id', 'desc')->where($where); 
		 $query = $this->db->get();	
		 return $query->result();		          		
	 }

	 public function project_details($id)
	 {
	 	$where = array('is_delete' => 1, 'status' => 0, 'p_id' => $id);

		 $this->db->select('*')->from('urf_project');
		 $this->db->order_by('p_id', 'desc')->where($where); 
		 $query = $this->db->get();	
		 return $query->result();		          		
	 }

	 

	public function add_project($userParameters) {
	 	$project_name			= element( "project_name", $userParameters, "" );
		$location				= element( "location", $userParameters, ""); 
		$consultant_name		= element( "consultant_name", $userParameters, "" );
		$contractor_name		= element( "contractor_name", $userParameters, "" );
		$armaor_no				= element( "armaor_no", $userParameters, "" );
		$owner_name				= element( "owner_name", $userParameters, "" );
		$project_quantity		= element( "project_quantity", $userParameters, "" );
		$details				= element( "details"  , $userParameters, '0' );
		$start_date				= element( "start_date", $userParameters, ""); 
		$finish_date		= element( "finish_date", $userParameters, "" );
		$delivery_quantity		= element( "delivery_quantity", $userParameters, "" );
		$balance_quantity			= element( "balance_quantity", $userParameters, "" );
		$hard_copy= element( "hard_copy", $userParameters, "" );
		$steel_type= element( "steel_type 	", $userParameters, "" );
		$coupler_type= element( "coupler_type", $userParameters, "" );
		$shop_drawing_bbs		= element( "shop_drawing_bbs", $userParameters, "" );
		$u_id					= $this->session->userdata('auth.user_id');
		$status					= 0;
		$is_delete				= 1;
		$added					= date("Y-m-d h:i:s");
		$updated				= date("Y-m-d h:i:s");
		
		$data = array('project_name' => $project_name, 'location' => $location, 
			'consultant_name' => $consultant_name, 'contractor_name' => $contractor_name, 'armaor_no' => $armaor_no,
			'owner_name' => $owner_name, 'project_quantity' => $project_quantity, 'details' => $details, 'start_date' => $start_date,
			'finish_date' => $finish_date, 'delivery_quantity' => $delivery_quantity,
			'balance_quantity' => $balance_quantity, 'hard_copy' => $hard_copy, 'steel_type' => $steel_type, 'coupler_type' => $coupler_type, 
			'shop_drawing_bbs' => $shop_drawing_bbs, 'u_id' => $u_id, 'status' => $status, 'is_delete' => $is_delete, 'added' => $added, 'updated' => $updated); 
			$this->db->insert('urf_project', $data);
	 }


	 public function update_project($userParameters) {
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