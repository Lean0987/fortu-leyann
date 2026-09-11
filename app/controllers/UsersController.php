<?php   
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');   
  
class UsersController extends Controller   
{   
    public function __construct()   
    {   
        parent::__construct();   
        $this->call->database();   
        $this->call->model('UsersModel');   
        $this->call->library('session');  
    }  
  
    public function login()  
    {  
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
  
            $username = $_POST['username'];  
            $password = $_POST['password'];  
  
            $user = $this->UsersModel->find_by('username', $username); 
 
            if ($user && password_verify($password, $user['password'])) {  
  
                $this->session->set_userdata([
                    'user' => $user
                ]);
  
                header('Location: /products');  
                exit;  
  
            } else {  
  
                $data['error'] = 'Invalid username or password.';  
                $this->call->view('login', $data);  
                return;  
            }  
        }  
  
        $this->call->view('login');  
    }  
  
    public function logout()  
    {  
        $this->session->unset_userdata(['user']);  
  
        header('Location: /login');  
        exit;  
    }  
}