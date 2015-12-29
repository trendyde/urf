<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model');
        $this->load->model('Auth_model');
        $this->load->model('User_model');
    }
    public function index() {
        $this->login();
    }
     public function login()
     {
        //if (auth()->is_logged()) {
          //   return redirect(base_url('dashboard'));
        // }
         $this->form_validation->set_rules('emailid', 'Email ID', 'trim|required|valid_email');
         $this->form_validation->set_rules('password', 'Password', 'trim|required');

         if ($this->form_validation->run() == FALSE)
         {

             $this->showLogin();
         }
         else
         {

             $user = $this->User_model->getByEmail($this->input->post('emailid'));
             if (empty($user)) {
                 $data = array(
                     'message' => 'Invalid Email ID.',
                 );
            } elseif (!password_verify($this->input->post('password'), $user->password)) {
                 $data = array(
                     'message' => 'Wrong Password.',
                 );
             } elseif ($user->status != '1') {
                 $data = array(
                     'message' => 'Your account needs activation.',
                 );
             } else {
                 auth()->login($user->u_id);
                 return redirect(base_url('dashboard'));
             }
             $data['page'] = 'auth/login';
             $this->load->view('auth', $data);

         }
     }

     private function showLogin()
     {
         $data['page'] = 'auth/login';
         $this->load->view('auth', $data);
     }

     public function logout()
     {
         auth()->logout();
         return redirect(base_url('auth/login'));
     }

    public function forgot_password()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            

            $user = $this->User_model->getByEmail($this->input->post('emailid'));

            if (is_null($user)) {
                $data = array(
                    'message' => 'Invalid Email ID.',
                    'page' => 'auth/forgot-password',
                );

            }
            else {
                $resetkey = $this->random_string();
                $this->User_model->setResetKey($user->u_id, $resetkey);

               //Send Email
                $params = array(
                    'firstname' => $user->firstname,
                    'email' => $user->emailid,
                    'key' => $resetkey,
                );
   //              //print_r($params);
   //              //exit;
                $this->sendResetEmail($params);

                 $data = array(
                    'message' => 'Password reset instructions sent to your email. Please check it.',
                    'page' => 'auth/forgot-password',
                );
            }

        }
        $data['page'] = 'auth/forgot-password';
        $this->load->view('auth', $data);
    
        
    }

   public function reset()
    {
        $key = $this->input->post_get('key');
        $email = $this->input->post_get('email');
        $user = $this->User_model->getByEmailAndResetKey($email, $key);

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (is_null($user)) {
                return $this->showMessage('Password Reset Error');
            }
        }

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            $data = array(
                'key' => $key,
                'email' => $email,
            );

            return $this->twig->render('auth/password_reset',$data);
        } else {
            $this->User_model->setNewPassword($user->user_id, $this->input->post('password'));

            return $this->showMessage('Your password reset successfully!');
        }
    }

    private function showForgotPassword()
    {
        $data['page'] = 'auth/forgot-password';
        $this->load->view('auth', $data);
    }

    public function registration()
    {
        if (auth()->is_logged()) {
            return redirect(base_url('profile'));
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[jet_users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[2]|max_length[30]|alpha');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[2]|max_length[30]|alpha');
        if ($this->form_validation->run() == FALSE)
        {
            $this->twig->render('auth/registration');
        }
        else
        {
            $params = array(
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
                'status' => '0',
                'activation_code' => rand(),
                'ip_address' => $this->input->ip_address(),
            );
            $user_id = $this->User_model->addUser($params);
            $params['user_id'] = $user_id;
            $this->sendRegistrationEmail($params);
            return $this->showMessage('Your registration successful. Check your email for further instructions.');
        }
    }

    public function confirm($user_id, $code)
    {
        $user = $this->User_model->getById(intval($user_id));
        if ($user->status == '1') {
            $message = 'You already activated your account. <a href="'.base_url().'auth/login">Sign In</a>';
        } elseif (mb_strtolower($user->activation_code) != mb_strtolower($code)) {
            $message = 'Activation Error';
        } else {
            $message = 'Activation success. <a href="'.base_url().'auth/login">Sign In</a>';
            $this->User_model->setStatus($user_id, '1');
        }
        $data = array(
            'body' => 'system/message_info',
            'message' => $message,
        );
        $this->load->view('main', $data);
    }

    

    private function showMessage($message)
    {
        $data = array(
            'message' => $message,
        );
        $this->twig->render('system/message_info', $data);
    }

    private function sendRegistrationEmail($params)
    {
        $params['body'] = 'emails/registration';
        $params['subject'] = 'Confirm your email';
        $params['activation_url'] = base_url() . 'auth/confirm/' . $params['user_id'] . '/' . $params['activation_code'];
        $this->email->from('sales@wangnafei.com', 'Jetbrave.com');
        $this->email->to($params['email']);
        $this->email->subject($params['subject']);
        $this->email->message($this->load->view('emails/main', $params, true));
        $this->email->send();
    }

    private function sendResetEmail($params)
    {
        $params['body'] = 'emails/password_reset';
        $params['subject'] = 'Password Reset';
        $params['reset_url'] = base_url() . 'auth/reset/?key=' . $params['key'] . '&email=' . $params['email'];
        $this->email->from('kajamydeen75@gmail.com', 'URF');
        $this->email->to($params['email']);
        $this->email->subject($params['subject']);
        $this->email->message($this->load->view('emails/main', $params, true));
        $this->email->send();
    }


     
    private function random_string($length = 30)
    {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }
}