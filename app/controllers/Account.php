<?php

class Account extends Controller {

    public function __construct(){

        error_reporting(E_ALL);
        ini_set('display_errors', 'On');

        $this->userModel = $this->model('User');
    }


     // function to create user
     public function register() {

        /*

        if(isLoggedIn()){
            
            $userid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "home?isLogged=0");
        }

        */

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Sanitize post data
        
            $data = [
                'firstname' => trim($_POST['fname']),
                'lastname' => trim($_POST['lname']),
                'email' => trim($_POST['email']),
                'mobile' => trim($_POST['mobile']),
                'password' => trim($_POST['access']),
                'errorMessage' => '',
                'remoteIP' => $this->getRealIPAddr(),
                'status' => 'false'
            ]; 
      
           //Register user from model function
           if ($this->userModel->register($data)) { 

                //set registration status
                $_SESSION['reg_status'] = 1;

                // redirect user
                header("Location: " . URLROOT . "account/login");
                exit();

           } else {

               echo '2';
               exit();
           }

        }
    }

    // function to create user session
    public function createUserSession($user) {

        //set session values
        $_SESSION['user_id'] = $user->ENTRY_ID;
        $_SESSION['username'] = $user->USERNAME;
        $_SESSION['firstname'] = $user->FIRST_NAME;
        $_SESSION['mobile'] = $user->MOBILE_PHONE;
        $_SESSION['email'] = $user->EMAIL_ADDRESS;
        $_SESSION['role'] = $user->ROLE_ID;
        $_SESSION['lastLoginDate'] = $user->LAST_LOGIN_DATE;

        //redirect to home page
        header('location:' . URLROOT . 'dashboard/home');
    }

    public function signup() {

        $data = [
            'title' => 'Create New Account'
        ];

        $this->view('account/register', $data);

    }


    public function getRealIPAddr()
    {
        //check ip from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
        {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //to check ip is pass from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function dashboard() {
        echo 'this is dashboard';
    }

    public function login() {

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'username' => trim($_POST['entryid']),
                'password' => trim($_POST['entrycode']),
                'fieldError' => '',
                'remoteIP' => $this->getRealIPAddr(),
                'active' => 'home',
            ];


            //Validate username
            if (empty($data['username'])) {
                $data['fieldError'] = 'Username or password cannot be empty!';
            }

            //Validate username
            if (empty($data['entry'])) {
                $data['fieldError'] = 'Username or password cannot be empty!';
            }

            //Check if all errors are empty
            if ($data['fieldError'] != '') {

                $loggedInUser = $this->userModel->login($data['username'], $data['password'], $data['remoteIP']);
        
                if ($loggedInUser) {

                    $this->createUserSession($loggedInUser);

                } else {

                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('account/login', $data);
                }

                exit();

            }else {

                $this->view('account/login', $data);
            }

        }

        $regStatus = '';

        if(isset($_SESSION['reg_status'])) {
            $regStatus = $_SESSION['reg_status'];
        }
            
        $data = [
            'title' => 'Log into Account',
            'regStatus' => $regStatus
        ];

        unset($_SESSION['reg_status']);

        $this->view('account/login', $data);
    }

}
