<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('auth'))
{
    function auth()
    {
        $CI =& get_instance();
        $CI->load->model('Auth_model');
        return $CI->Auth_model;
    }

    function adminauth($admin_id) 
    {
        if($admin_id == false)
        {
            redirect('AdminAuth/login');
        }
    }
}