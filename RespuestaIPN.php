<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta de la IPN</title>
</head>
<body> 
     
    <title>Respuesta de la IPN</title>

    <?php
        $formAnswer = $rawAnswer['kr-answer'];
        $transaction = $formAnswer['transactions'][0];
        
        $newEmail = $rawAnswer['kr-email'];
        $newTerms = $rawAnswer['kr-terms'];
        $newHidden = $rawAnswer['kr-hidden'];
     
        $registro = array(
            "orderStatus" => $formAnswer['orderStatus'],
            "orderId" => $formAnswer['orderDetails']['orderId'],
            "email" => $formAnswer['customer']['email'],
            "idTransaction" => $transaction['transactionDetails']['cardDetails']['legacyTransId'],
            "uuid" => $transaction['uuid'],
            "amount" => $transaction['amount'],
            "fechaCreacion" => $transaction['creationDate'],
            "token" => $transaction['paymentMethodToken'],
            "card" => $transaction['transactionDetails']['cardDetails']['effectiveBrand'],
            'newEmail' => $newEmail,
            'newTerms' => $newTerms,
             'newHidden' => $newHiddens
        );

        echo $registro;
    ?>
</body>
</html>