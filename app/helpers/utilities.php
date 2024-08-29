<?php
    
    function getUniqueUserID(){
        return $guid = bin2hex(openssl_random_pseudo_bytes(16));
    }

    function generateUniqueNumbers() {
        return $iUniqueNumber = crc32(uniqid());
    }

    function getDataURI($imagePath) {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $type = $finfo->file($imagePath);
        return 'data:' . $type . ';base64,' . base64_encode(file_get_contents($imagePath));
    }

    function formateDate($date) {

        $original_date = $date;
        $timestamp = strtotime($original_date);

        $new_date = date("Y-m-d", $timestamp);
        
        return $new_date;
    }

    function convertImageToBlob($file) {

        if(file_exists($file)){
            return file_get_contents($file);
        }else{
            return 'false';
        }
    }

    function formatEventDate($date) {
        $date=date_create($date);
        return date_format($date,"l, j F Y, h:i a");
    }

    function formatDateCreated($date) {
        $date=date_create($date);
        return date_format($date,"d-M-Y");
    }

    function formatFeaturedEventDate($date) {
        $date=date_create($date);
        return date_format($date,"j M");
    }

    function generateCustomerNo () {
        return mt_rand(1000,9999);
    }

    function addLeadingZero($value){
        return str_pad($value, '6', '0', STR_PAD_LEFT);
    }

    function setCartCookie ($cookieName, $cookieValue) {        
        setcookie($cookieName, $cookieValue, time() + 3600, '/' ); // set cookie for 1 hour
    }

    function retrieveCartCookie ($cookieName) {
        return $_COOKIE[$cookieName];
    }

    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }