<?php
    class CardAccount {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getCustomerID(){
            return $guid = bin2hex(openssl_random_pseudo_bytes(16));
        } 

        // function to load all cards
        public function loadCardsPagination($page) {

            $limit = Page_Limit;

            // Calculate the start record
            $start = ($page - 1) * $limit;

            //Prepared statement
            $this->db->query("SELECT COUNT(*)COUNT FROM SCD_Card_Products WHERE QUANTITY > 0 AND STATUS = 0");

            $row = $this->db->single();
            
            $total_records = $row->COUNT;

            // Calculate total pages
            $total_pages = ceil($total_records / $limit);

            //Prepared statement
            $this->db->query("SELECT * FROM SCD_Card_Products WHERE QUANTITY > 0 AND STATUS = 0 LIMIT $start, $limit");
        
            $results = $this->db->resultSet();

            $response = [
                'results' => $results,
                'total_pages' => $total_pages,
            ];
    
            return $response;
        }
        // end of function

           
        //function to load user
        public function loadBestSellingCards() {

    
                //Prepared statement
                $this->db->query("SELECT * FROM SCD_Card_Products WHERE CATEGORY = 1 AND QUANTITY > 0 AND STATUS = 0 LIMIT 9;");
        
                $results = $this->db->resultSet();
        
                return $results;
        }

             //function to load user
             public function loadFilterSearch($filter) {

                if($filter == 'Regular') {
                    $this->db->query("SELECT * FROM SCD_Card_Products WHERE CATEGORY = 1 AND QUANTITY > 0 AND STATUS = 0 LIMIT 9;");
                }else{
                    //Prepared statement
                    $this->db->query("SELECT * FROM SCD_Card_Products WHERE CARD_TYPE = '".$filter."' AND QUANTITY > 0 AND STATUS = 0 LIMIT 9;");
                }
    
          
        
                $results = $this->db->resultSet();

                $data = '';

                foreach($results as $card) {

                    $data .= '<div class="card-product">
                            <a href="'.URLROOT.'cards/orderCard?sku_id='.$card->CARD_ID.'">
                                <img src="'.URLROOT.'/public/img/card_products/'.$card->CARD_IMAGE_NAME.'?v='.rand(10000000000,99999999999).'" />
                                <h1>'.$card->CARD_NAME.'</h1>
                            </a>
                        </div>';
                }
        
                return $data;
        }

            //function to load user
            public function loadExclusiveCards() {
    
                //Prepared statement
                $this->db->query("SELECT * FROM SCD_Card_Products WHERE CATEGORY = 2 AND QUANTITY > 0 AND STATUS = 0;");
        
                $results = $this->db->resultSet();
        
                return $results;
        }

        //function to fetch Dashboard Stats
        public function loadCardDetails($sku_id) {

            //Prepared statement
            $this->db->query("SELECT * FROM SCD_Card_Products WHERE CARD_ID = :cardid;");

            $this->db->bind(':cardid', $sku_id);
    
            $row = $this->db->single();
    
            return $row;
        }


          //function to fetch Dashboard Stats
          public function loadCustomerCart($entry_id) {

            //Prepared statement
            $this->db->query("SELECT * FROM SCD_Cart_Sessions WHERE ENTRY_ID = :entry_id;");

            $this->db->bind(':entry_id', $entry_id);
    
            $results = $this->db->resultSet();
        
            return $results;
        }


        //function to fetch Dashboard Stats
        public function loadCustomerCartItem($entry_id) {

                //Prepared statement
                $this->db->query("SELECT P.CARD_NAME, P.CARD_IMAGE_NAME, S.SESSION_ID, S.CARD_ID, 
                                  S.ENTRY_ID, S.QUANTITY, S.AMOUNT, S.PROPERTIES, S.DATE_CREATED 
                                  FROM SCD_Cart_Sessions S LEFT JOIN SCD_Card_Products P ON S.CARD_ID = P.CARD_ID WHERE S.ENTRY_ID =  :entry_id;");
    
                $this->db->bind(':entry_id', $entry_id);
        
                $results = $this->db->resultSet();
            
                return $results;
        }

        //function to create customer order
        public function createCustomerOrder($data) {

            try{
                
                $this->db->query("INSERT INTO SCD_Orders (ORDER_ID, ORDER_NUMBER, QUANTITY, AMOUNT, 
                                  DISCOUNT_AMOUNT, CONTACT_EMAIL, CONTACT_PHONE_NUMBER, CONTACT_FIRSTNAME, 
                                  CONTACT_LASTNAME, CONTACT_ADDRESS, CONTACT_ADDRESS2, CITY, STATE, POSTAL_CODE, 
                                  COUNTRY, SHIPPING, PAYMENT_METHOD, DATE_ORDERED) VALUES (:orderId, :orderNumber, :quantity,
                                  :amount, :discountAmount, :contactEmail, :contactPhone, :contactFirstName, :contactLastname,
                                  :contactAddress, :contactAddress2, :city, :stateValue, :postalCode, :country, :shipping,
                                  :payment, :dateOrdered);");
        
                $date =  date('Y-m-d H:i:s');
                $orderid = $this->getCustomerID();
                $orderNumber = generateUniqueNumbers();

                //Bind values
                $this->db->bind(':orderId', $orderid);
                $this->db->bind(':orderNumber', $orderNumber);
                $this->db->bind(':quantity', $data['quantity']);
                $this->db->bind(':amount', $data['amount']);
                $this->db->bind(':discountAmount', $data['discountAmount']);
                $this->db->bind(':contactEmail', $data['contactEmail']);
                $this->db->bind(':contactPhone', $data['contactPhone']);
                $this->db->bind(':contactFirstName', $data['contactFname']);
                $this->db->bind(':contactLastname', $data['contactLname']);
                $this->db->bind(':contactAddress', $data['contactAddress']);
                $this->db->bind(':contactAddress2', $data['contactAddress2']);
                $this->db->bind(':city', $data['contactCity']);
                $this->db->bind(':stateValue', $data['contactState']);
                $this->db->bind(':postalCode', $data['contactPostCode']);
                $this->db->bind(':country', $data['contactCountry']);
                $this->db->bind(':shipping', $data['shipping']);
                $this->db->bind(':payment', $data['payment']);
                $this->db->bind(':dateOrdered', $date);
                
                //Execute function
                if ($this->db->execute()) {
                    return $orderNumber;    
                } else {
                    return false;
                }
        
                }catch(PDOException $e){
                    echo 'ERROR!';
                    print_r( $e );
                }

        }
        //end of function
    

        // function cards to sessions
        public function AddCardSession($data) {
    
            try{
                
            $this->db->query("INSERT INTO SCD_Cart_Sessions (SESSION_ID, CARD_ID, ENTRY_ID, QUANTITY, AMOUNT, PROPERTIES, DATE_CREATED) 
                             VALUES (:sessionid, :cardid, :entryid, :quantity, :amount, :properties, :dateCreated);");
    
            $date =  date('Y-m-d H:i:s');
            //$sessionid = $this->getCustomerID();
            
            //Bind values
            $this->db->bind(':sessionid', $data['user_cart_id']);
            $this->db->bind(':cardid', $data['cardid']);
            $this->db->bind(':entryid', $data['user_cart_id']);
            $this->db->bind(':quantity', $data['quantity']);
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':properties', $data['properties']);
            $this->db->bind(':dateCreated', $date);
            
            //Execute function
            if ($this->db->execute()) {
                return true;    
            } else {
                return false;
            }
    
            }catch(PDOException $e){
                echo 'ERROR!';
                print_r( $e );
            }
        }
    

        // function to registry user
        public function AddCard($data) {
    
            try{
                
            $this->db->query("INSERT INTO SCD_Card_Products(CARD_ID, CARD_NAME, CARD_TYPE, AMOUNT, QUANTITY, 
                            CARD_IMAGE_NAME, DATE_CREATED) VALUES (:cardid, :cardname, :cardtype, :amount, 
                            :quantity, :cardimg, :dateCreated);");
    
            $date =  date('Y-m-d H:i:s');
            $cardid = $this->getCustomerID();
            
            //Bind values
            $this->db->bind(':cardid', $cardid);
            $this->db->bind(':cardname', $data['cardname']);
            $this->db->bind(':cardtype', $data['cardtype']);
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':quantity', $data['quantity']);
            $this->db->bind(':cardimg', $data['cardimg']);
            $this->db->bind(':dateCreated', $date);
            
            //Execute function
            if ($this->db->execute()) {
                return true;    
            } else {
                return false;
            }
    
            }catch(PDOException $e){
                echo 'ERROR!';
                print_r( $e );
            }
        }
    }
