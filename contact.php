<?php
    $to = "johanlahti@gmail.com"; // this is your Email address
    $from = $_POST['useremail']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $_POST['message'];

    $headers = "From:" . $from;

    $url = 'http://www.sustainablemap.org/api/emailcontactfrom?name=' . $name . '&useremail=' . $to . '&organization=' . $organization . '&message=' . $message;
	$response = http_post_data($url);
    // mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
?>
