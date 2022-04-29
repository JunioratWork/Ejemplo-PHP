<?php
    //$precio = $_POST['precio'];
    //$moneda = $_POST['moneda'];
    
    //echo $precio;
    //echo $moneda;
    
    //datos a enviar
    $data = array(
        "amount" => $_POST['precio'], 
        "currency" => $_POST['moneda'], 
        "orderId" => uniqid("MyOrderId"),
        "customer" => array(
        "email" => "sample@example.com"
        )
    );
    
    
    /*
    $url ='https://server-node-izipay.herokuapp.com/payment/init';
      $json = file_get_contents($url);
      $result = json_decode($json,true);
      
        $formtoken = trim($result);
        var_dump($result);
        echo $formtoken;
    */
    
    
    $data_string = json_encode($data);                                                                                   
    $ch = curl_init('https://server-node-izipay.herokuapp.com/payment/init');
    //curl_setopt($ch, CURLOPT_USERPWD, "user:pwd");                                                                       
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);                                                                    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))                                                                       
    );                                                                                                                   
    $result = curl_exec($ch);
    $formtoken = trim($result);
    var_dump($result);
    echo $formtoken;
    
    
?>