<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Auth_model extends CI_Model
{
    private $user = null;
    private $ci = null;

    public function __construct()
    {
        parent::__construct();
//        $this->load->helper(array('array'));
        $CI =& get_instance();
        $this->ci = $CI;
    }

    public function get($name, $default = null)
    {

        if ($this->ci->session->has_userdata('auth.user_id')) {
            $user_id = $this->ci->session->userdata('auth.user_id');
            $this->user = $this->db->query(
                "SELECT *
                FROM urf_users
                WHERE u_id=?
                LIMIT 1",
                array($user_id)
                   )->row();
        }

        return !empty($this->user) ? $this->user->$name : $default;
    }

    public function is_logged()
    {
        return $this->ci->session->has_userdata('auth.user_id');
    }

    public function login($user_id)
    {
        return $this->ci->session->set_userdata('auth.user_id', $user_id);
    }

    public function logout()
    {
        return $this->ci->session->unset_userdata('auth.user_id');
    }
}