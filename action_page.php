<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submit to Send Email</title>
    <link rel="stylesheet" href="assets/css/portfolio.css">
</head>
<body>

<?php
    if(!empty($_POST["send"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $toEmail = $_POST["corcoran.brenan@gmail.com"];

        $mailHeaders = "Name: " . $name .
        "\r\n Email :" . $email .
        "\r\n Message: " . $message . "\r\n";

        if(mail($toEmail, $name, $mailHeaders)) {
            $message = "Your information was received successfully.";
        }
    }
?>

<div class="contact-container">
             <form method="post" name="emailContact" action="action_page.php">

                 <label for="name">Name</label>
                 <input type="text" id="name" name="name" placeholder="Your name" required>

                 <label for="email">Email</label>
                 <input type="text" id="email" name="email" placeholder="Your email" required>

                 <label for="subject">Message</label>
                 <textarea id="subject" name="message" placeholder="Enter your message" required style="height:200px"></textarea>

                 <input type="submit" value="Submit">
                 <?php if(!empty($message)){ ?>
                 <div class="success">
                    <strong><?php echo $message; ?></strong>
                 </div>
                 <?php } ?>
             </form>
         </div>

</body>
</html>
