<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $from = 'My Portfolio Contact Form';
        $to = 'nick@edgecode.gr';

        $body = "You have received a message from: $name \n 
                 Email: $email \n Subject: $subject \n Message: $message";
        
        $success = mail($to, $subject, $body, $from);

        if ($success) {
            echo 'Success!';
        } else {
            echo 'Fail!';
        }
    }