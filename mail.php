<?php
    if(isset($_POST['submit'])){    
        $name = strip_tags(htmlspecialchars($_POST['name']));
        $email_address = $_POST['email'];
        $phone = strip_tags(htmlspecialchars($_POST['phone']));
        $message = strip_tags(htmlspecialchars($_POST['message']));

        $to = 'bhavesh4@illinois.edu'; 

        $email_subject = "Startup bootcamp";
        $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message"; 
        
        $headers = "From:" . $email_address;

        mail($to,$email_subject,$email_body,$headers);

        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";      
    }
?>