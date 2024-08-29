<?php

class Cards extends Controller {

    public function __construct(){

        error_reporting(E_ALL);
        ini_set('display_errors', 'On');

        $this->userModel = $this->model('CardAccount');
    }


    public function newCard() {

        $data = [
            'cardname' => 'Adidas',
            'cardtype' => 'Luxury',
            'amount' => 50000.00,
            'quantity' => 10,
            'cardimg' => 'adidas.jpg',
        ];

        $newcard = $this->userModel->AddCard($data);

        echo $newcard;

    }


    // function to add card session
    public function addCardSession () {

        $user_cart_id = '';
        $cookie_name = 'cartUserID';

        if(!isset($_COOKIE[$cookie_name])) {

            $user_cart_id = $this->userModel->getCustomerID();

            setCartCookie($cookie_name, $user_cart_id);

        } else {

            $user_cart_id = retrieveCartCookie($cookie_name);
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'user_cart_id' => $user_cart_id,
                'cardid' =>  trim($_POST['cardid']),
                'quantity' => trim($_POST['quantity']),
                'amount' =>  trim($_POST['amount']),
                'properties' => trim($_POST['properties'])
            ];

            $addSession = $this->userModel->AddCardSession($data);

            if($addSession) {

                $loadCart = $this->userModel->loadCustomerCart($user_cart_id);

                if(isset($_SESSION['cartItem'])) {
                    $_SESSION['cartItem'] = $loadCart;
                }else {
                    $_SESSION['cartItem'] = $loadCart;
                }

                echo count($loadCart);

            }else {

                echo '0';
            }

        }

    }


    // card page
    public function card () {

        $data = [
            'title' => 'Card Page'
        ];

        $this->view('cards/designCollection', $data);

    }

    // function to order card
    public function orderCards() {

        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $sku_id = $_GET['sku_id'];
        }

        $cardDetails = $this->userModel->loadCardDetails($sku_id);

        $data = [
            'title' => 'Card Page',
            'active' => 'browse',
            'cardDetails' => $cardDetails,
        ];

        $this->view('cards/OrderCard', $data);
    }

        // function to order card
        public function orderComplete() {
            
            $skuid = '';

            if(isset($_GET['sku-'])) {

                $skuid = $_GET['sku-'];

            }else {
                header("Location: " . URLROOT.'/pages/index2');
                exit();
            }
    
            $data = [
                'title' => 'Card Page',
                'active' => 'browse',
                'skuid' => $skuid

            ];
    
            $this->view('cart/completeOrder', $data);
        }

      // function to order card
      public function orderCard() {

        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $sku_id = $_GET['sku_id'];
        }

        $cardDetails = $this->userModel->loadCardDetails($sku_id);

        $data = [
            'title' => 'Card Page',
            'active' => 'browse',
            'cardDetails' => $cardDetails,
        ];

        $this->view('cards/customiseCard', $data);
    }

    //function to create customer order
    public function processOrder() {

        if(!isset($_SESSION['cartItem'])) {
            header("Location: " . URLROOT . "pages/index2");
            exit();
        }

        $user_cart_id = '';
        $cookie_name = 'cartUserID';
        
        if(!isset($_COOKIE[$cookie_name])) {

            $user_cart_id = $this->userModel->getCustomerID();

            setCartCookie($cookie_name, $user_cart_id);

        } else {

            $user_cart_id = retrieveCartCookie($cookie_name);

        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'user_cart_id' => $user_cart_id,
                'contactEmail' =>  trim($_POST['contact_email']),
                'contactPhone' => trim($_POST['contact_phone']),
                'contactFname' =>  trim($_POST['contact_fname']),
                'contactLname' =>  trim($_POST['contact_lname']),
                'contactAddress' =>  trim($_POST['contact_add']),
                'contactAddress2' =>  trim($_POST['contact_add2']),
                'contactCity' =>  trim($_POST['contact_city']),
                'contactState' =>  trim($_POST['contact_state']),
                'contactPostCode' =>  trim($_POST['contact_pcode']),
                'contactCountry' =>  trim($_POST['contact_country']),
                'shipping' =>  trim($_POST['shipping']),
                'payment' =>  trim($_POST['contact_payment']),  
                'amount' => trim($_POST['order_amount']),
                'quantity' => trim($_POST['order_quantity']),
                'discountAmount' => 0.00
            ];

            $createOrder = $this->userModel->createCustomerOrder($data);

            if($createOrder) {

                unset($_SESSION['cartItem']);
                session_destroy();

                header("Location: " . URLROOT . "cards/orderComplete?sku-=".$createOrder);
                exit();

            }else {

                header("Location: " . URLROOT . "cards/checkout?status=09&verified=invalid");
                exit();
                echo 'Unable to process order';
            }

        }

    }
    //end of function

    // function to checkout an order
    public function checkout() {

        if(!isset($_SESSION['cartItem'])) {
            header("Location: " . URLROOT . "pages/index2");
            exit();
        }

        $user_cart_id = '';
        $cookie_name = 'cartUserID';
        
        if(!isset($_COOKIE[$cookie_name])) {

            $user_cart_id = $this->userModel->getCustomerID();

            setCartCookie($cookie_name, $user_cart_id);

        } else {

            $user_cart_id = retrieveCartCookie($cookie_name);

            $loadCart = $this->userModel->loadCustomerCartItem($user_cart_id);
        }
        
        $data = [
            'title' => 'Card Page',
            'cartItems' => $loadCart,
            'shipping' => 2500
        ];

        $this->view('cart/checkout', $data);

    }

    public function designs() {

        $detect = new \Detection\MobileDetect;

        $loadCards = $this->userModel->loadBestSellingCards();

        $data = [
            'page' => 'home',
            'active' => 'browse',
            'title' => 'Home page',
            'cards' => $loadCards,
        ];

        try {

            if($detect->isMobile()) {

                $this->view('mobile/browseDesign', $data);

            }else{

                //set table
                $this->view('cards/browseDesigns', $data);
            }

        }catch (Exception $e) {
            var_dump($e);
        }
    }

       // function to shop
       public function shop() {

        if(isset($_SESSION['user_id'])) {
            $entry_id =   $_SESSION['user_id'];
        }

        $data = [
            'page' => 'shop',
            'active' => 'true',
            'title' => 'Shop Card Collections'
        ];

        $this->view('cards/shop', $data);

    }

    // end of function

    //function to view cart
    public function cart() {


        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            header("Location: " . URLROOT . "cards/checkout");
            exit();
        }

        $loadCart = [];

        $user_cart_id = '';
        $cookie_name = 'cartUserID';


        if(!isset($_COOKIE[$cookie_name])) {

            $user_cart_id = $this->userModel->getCustomerID();

            setCartCookie($cookie_name, $user_cart_id);

        } else {

            $user_cart_id = retrieveCartCookie($cookie_name);

            $loadCart = $this->userModel->loadCustomerCartItem($user_cart_id);
        }
        

        $data = [
            'title' => 'Card Page',
            'active' => 'browse',
            'cartItems' => $loadCart
        ];

        $this->view('cart/cartItems', $data);
    }

}
