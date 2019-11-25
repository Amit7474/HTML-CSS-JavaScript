<?php

    // Get the form fields, removes html tags and whitespace.
    $first_name = strip_tags(trim($_POST["first_name"]));
    $first_name = str_replace(array("\r","\n"),array(" "," "),$first_name);
	$last_name = strip_tags(trim($_POST["last_name"]));
	$phone = strip_tags(trim($_POST["phone"]));
    $message = trim($_POST["comments"]);

    // Check the data.
    if (empty($first_name) OR empty($last_name) OR empty($message) OR empty($message) OR empty($phone)) {
        header("Location: https://aly-baer.000webhostapp.com/index.php?success=-1#send-note");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "amit741993@gmail.com";

    // Set the email subject.
    $subject = "נפתחה פנייה חדשה!";

    // Build the email content.
    $email_content = "First name: $first_name\n";
	$email_content = "Last name: $last_name\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $first_name $last_name <$phone>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: https://aly-baer.000webhostapp.com/index.php?success=1#send-note");

?>