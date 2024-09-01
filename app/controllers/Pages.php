<?php
class Pages extends Controller {
    public function __construct() {

        $this->userModel = $this->model('CardAccount');
    }


    public function contactUs() {

        $detect = new \Detection\MobileDetect;

        $data = [
            'page' => 'home',
            'active' => 'contact',
            'title' => 'Home page'
        ];


        try {

            if($detect->isMobile()) {

                $this->view('mobile/contactUs', $data);

            }else{

                //set table
                $this->view('contactUs', $data);
            }

        }catch (Exception $e) {
            var_dump($e);
        }

    }

    public function ourService() {

        $detect = new \Detection\MobileDetect;

        $data = [
            'page' => 'home',
            'active' => 'service',
            'title' => 'Home page'
        ];


        try {

            if($detect->isMobile()) {

                $this->view('mobile/ourService', $data);

            }else{

                //set table
                $this->view('ourService', $data);
            }

        }catch (Exception $e) {
            var_dump($e);
        }

      
    }

    public function index2() {

        $detect = new \Detection\MobileDetect;

         // load cards
         $loadCards = $this->userModel->loadBestSellingCards();

         $exclusives = $this->userModel->loadExclusiveCards();
 
         $data = [
             'page' => 'home',
             'active' => 'home',
             'title' => 'Home page',
             'cards' => $loadCards,
             'exclusives' => $exclusives
         ];

        try {

            if($detect->isMobile()) {

                $this->view('mobile/index', $data);

            }else{

                //set table
                $this->view('index2', $data);
            }

        }catch (Exception $e) {
            var_dump($e);
        }
    }

    public function index() {

        // load cards
        $loadCards = $this->userModel->loadBestSellingCards();

        $data = [
            'page' => 'home',
            'active' => 'true',
            'title' => 'Home page',
            'cards' => $loadCards
        ];

        $this->view('index', $data);
    }
}
