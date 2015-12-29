<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model
{
     function __construct()
	 {
		  parent::__construct();		  
     }

    public function pos() {

    	$config = $this->config;
    	$where = array('s_id' => 1);

    	$result = $this->getDetails('Pseudo_City_Code, RequestorID_Type, RequestorID_ID', 'jet_site_settings', $where);
     	$POS = new stdClass();
		
			$Source = new stdClass();
				$Source->PseudoCityCode = $result[0]->Pseudo_City_Code; 
		
				$RequestorID = new stdClass();

					$RequestorID->Type = $result[0]->RequestorID_Type;
					$RequestorID->ID = $result[0]->RequestorID_ID; 
		
				$Source->RequestorID = $RequestorID;
				
			$POS->Source = $Source;
		
			$TPA_Extensions = new stdClass();
			
				$Provider = new stdClass();

					$Provider->Name = $config->item('Provider_Name');
					$Provider->System = $config->item('Provider_System');
					$Provider->Userid = $config->item('Provider_UserID');
					$Provider->Password = $config->item('Provider_Password');
		
				$TPA_Extensions->Provider = $Provider;
		
			$POS->TPA_Extensions = $TPA_Extensions;

		return $POS;
     }

     public function getRequestorId() {
     	 $this->db->select('RequestorID_Type');
	    $this->db->from('jet_site_settings');
	    return $this->db->get()->row('RequestorID_Type');
     }
	 public function getDetails($columns, $tblname, $where = NULL, $orderby = NULL, $limit = NULL)
	 {
		 $this->db->select($columns)->from($tblname);
		 $this->db->order_by($orderby)->where($where)->limit($limit); 
		 $query = $this->db->get();	
		 return $query->result();		          		
	 }
	 function numRows($column, $tblname, $where = NULL)
	 {
		 $this->db->select($column)->from($tblname);
		 if($where != NULL) {
		 	$this->db->where($where); 
		 }
		 $query = $this->db->get();	
		 return $query->num_rows();		          		
	 }
	 // Read and cache 
	public function ReadCached( $webUrl )
	{
	 	$result = $webUrl;

		$parts = explode( "?", $webUrl );
		$webUrl = $parts[ 0 ];
		$parts = explode( "/", $webUrl );
		$wsdlName = $parts[ count( $parts ) - 1 ];

		$wsdlFullname = APPPATH . "wsdl" . DIRECTORY_SEPARATOR . $wsdlName;

		if ( !file_exists( $wsdlFullname ) ) {
			$wsdlContent = file_get_contents( $result );
			if ( $wsdlContent !== false ) {
				file_put_contents( $wsdlFullname, $wsdlContent );
			}
		}
		if ( file_exists( $wsdlFullname ) ) {
			$result = $wsdlFullname;
		}

		return $result;
	}

	function get_cc_type($cardNumber)
	{
    // Strip non-digits from the number
	    $cardNumber = preg_replace('/\D/', '', $cardNumber);

	    // First we make sure that the credit
	    // card number is under 15 characters
	    // in length, otherwise it is invalid;
	    $len = strlen($cardNumber);
	    if ($len < 13 || $len > 19) {
	        throw new Exception("Invalid credit card number: must be 14 to 18 digits.");
	    }
	    else {
	        switch($cardNumber) {
	            case(preg_match ('/^4/', $cardNumber) >= 1):
	                return 'VI';
	            case(preg_match ('/^5[1-5]/', $cardNumber) >= 1):
	                return 'MC';
	            case(preg_match ('/^3[47]/', $cardNumber) >= 1):
	                return 'AX';
	            case(preg_match ('/^3(?:0[0-5]|[68])/', $cardNumber) >= 1):
	                return 'DN';
	            case(preg_match ('/^6(?:011|5)/', $cardNumber) >= 1):
	                return 'DS';
	            /*case(preg_match ('/^(?:2131|1800|35\d{3})/', $cardNumber) >= 1):
	                return 'JCB';
	            case(preg_match ('/^(?:76|50)/', $cardNumber) >= 1):
	                return 'PBS';
	            case(preg_match ('/^(?:63)/', $cardNumber) >= 1):
	                return 'PT';
	            case(preg_match ('/^56/', $cardNumber) >= 1):
	                return 'AB';*/
	            default:
	                throw new Exception("Could not determine the credit card type.");
	                break;
	        }
	    }
	}

}