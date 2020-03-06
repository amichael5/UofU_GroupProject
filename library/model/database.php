<?php
   mb_internal_encoding('UTF-8');
   mb_http_output('UTF-8');
   mb_http_input('UTF-8');
   mb_regex_encoding('UTF-8');
   $dsn = 'mysql:host=localhost;dbname=book_loan';
   $username = 'root';
   $password = 'root';
  
   try {
       $db = new PDO($dsn, $username, $password);
   } catch (PDOException $e) {
       $error_message = $e->getMessage();
       echo 'Error Message ' . $error_message;
       exit();
   }
?>
