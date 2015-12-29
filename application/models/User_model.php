<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model
{
    public static $_instance = null;
    private $current_user = null;
    public function __construct()
    {
        parent::__construct();
    }
    public function getById($u_id)
    {
        if (!empty($this->current_user) && $this->current_user->u_id == $u_id) {
            return $this->current_user;
        } else {
            $query = $this->db->query("
                SELECT *
                FROM urf_users
                WHERE u_id=?
                LIMIT 1
            ", array($u_id));
            $this->current_user = $query->row();
            return $this->current_user;
            
        }
    }
    public function getByemail($emailid)
    {
        $query = $this->db->query("
            SELECT *
            FROM urf_users
            WHERE emailid=?
            LIMIT 1
        ", array($emailid));

        return $query->row();
    }

     public function setNewPassword($u_id, $password)
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $this->db->query("
            UPDATE urf_users
            SET `password`=?, resetkey=''
            WHERE u_id=?
            LIMIT 1
        ", array($password, $u_id));
    }
    
     public function getByemailAndResetKey($emailid, $key)
    {
        $query = $this->db->query("
            SELECT *
            FROM urf_users
            WHERE emailid=?
            AND resetkey=?
            AND resetkey!=''
            LIMIT 1
        ", array($emailid, $key));
        return $query->row();
    }
    public function setStatus($u_id, $status)
    {
        $this->db->query("
            UPDATE urf_users
            SET `status`=?
            WHERE u_id=?
            LIMIT 1
        ", array($status, $u_id));
    }
    public function setResetKey($u_id, $key)
    {
        $this->db->query("
            UPDATE urf_users
            SET `resetkey`=?
            WHERE u_id=?
            LIMIT 1
        ", array($key, $u_id));
    }
    public function addUser($params)
    {
        $this->db->insert('urf_users', $params);
        return $this->db->insert_id();
    }

}