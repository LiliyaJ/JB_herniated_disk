<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST["tel"]), FILTER_SANITIZE_NUMBER_INT);
    $message = trim($_POST["message"]);

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR !filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
        header("Location: http://grizhi.johannesbad-germany.ru/index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "<l.jeromin@junisa.de>";

    // Set the email subject.
    $subject = "Новый контакт на лечение грыжи $name";

    // Build the email content.
    $email_content = "Имя: $name\n";
    $email_content .= "Email: $email\n";
    $phone_content .= "Телефон: $phone\n\n";
    $email_content .= "Сообщение:\n$message\n";
   

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $phone_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://grizhi.johannesbad-germany.ru/index.php?success=1#form");

?>