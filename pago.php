<?php
//require('./FormToken.php');
require_once __DIR__ . '/FormToken.php';
//echo $formtoken;
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" 
   content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 

  <!-- Javascript library. Should be loaded in head section -->
  <script 
   src="https://api.micuentaweb.pe/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
   kr-public-key="51447378:testpublickey_3SNSOCewrXOZNL2oNYoixUO4q9RaBwClYyCIEofTLGs2g"
   kr-post-url-success="RespuestaIPN.php">
  </script>

  <!-- theme and plugins. should be loaded after the javascript library -->
  <!-- not mandatory but helps to have a nice payment form out of the box -->
  <link rel="stylesheet" 
   href="https://api.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic-reset.css">
  <script 
   src="https://api.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic.js">
  </script>
  <title>Prueba Izipay</title>
</head>
<body style="padding-top:20px">

  <!-- payment form -->
  <div class="kr-embedded" kr-form-token="<?php echo $formtoken ?>">

    <!-- payment form fields -->
    <div class="kr-pan"></div>
    <div class="kr-expiry"></div>
    <div class="kr-security-code"></div>  

    <!-- payment form submit button -->
    <button class="kr-payment-button"></button>

    <!-- error zone -->
    <div class="kr-form-error"></div>
  </div>  
</body>
</html>