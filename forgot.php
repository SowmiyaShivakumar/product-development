<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6133dcca2b.js" crossorigin="anonymous"></script>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="l.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: black;

}
.content{
   
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%);
   border: 1px solid rgb(245, 243, 243);
   border-radius: 15px;
   height: 400px;
   width: 550px;
   text-align: center;

} 
.ic{
    height: 100px;
    width: 100px;
    border-radius: 100px;
    
    margin-left: 40%;
}
h3{
    color: aliceblue;
    font-size: xx-large;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
p{
    color: aliceblue;
    font-size: larger;
    font-family: cursive;
}
.icons input{
    border: none;
    border-bottom: 1px solid white;
    width: 350px;
    height: 50px;
    color: #ebecec;
}
.button input{
    color: #ebecec;
    height: 50px;
    width: 300px;
    margin-top: 25px;
    border: 1px solid white;
    border-radius: 20px;
}
@media (max-width: 600px) {
            .content{
                height: 500px;
                width: 400px;
            }
            .icons input{
                width: 200px;
                color: #ebecec;
                font-size: x-large;
            }
           
        }
    </style>
    <?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'SMTP.php';

 
if(isset($_POST["submit"])){
    session_start();
    $_SESSION["u_mail"] = $_POST['email'];
    header('Location: reset.php'); 
    exit();
    $user_email = $_POST['email'];

    $mail = new PHPMailer(true);

    // Configure the email server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Your SMTP server
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = 'pridharsh2693@gmail.com';
    $mail->Password = 'husk jphb ynpr lbcl';
    $mail->SMTPSecure = 'ssl';

    // Compose the email
    $mail->setFrom('pridharsh2693@gmail.com', 'Your Name');
    $mail->addAddress($user_email);
    $mail->Subject = 'Thank you for signing up!';
    $mail->Body = 'Welcome to our website.';
    $mail->send();

    if ($mail->send()) {
          echo 'Email sent successfully.';
       
    } else {
        echo 'Email could not be sent.';
    }
}

?>

</head>
<body>
    <div class="con">
        <div class="bubbles">
            <span  style="--i:11;" ></span>
            <span  style="--i:16;" ></span>
            <span  style="--i:18;" ></span>
            <span  style="--i:23;" ></span>
            <span  style="--i:19;" ></span>
            <span  style="--i:11;" ></span>
            <span  style="--i:25;" ></span>
            <span  style="--i:10;" ></span>
            <span  style="--i:17;" ></span>
            <span  style="--i:13;" ></span>
            <span  style="--i:24;" ></span>
            <span  style="--i:19;" ></span>
            <span  style="--i:25;" ></span>
            <span  style="--i:10;" ></span>
            <span  style="--i:17;" ></span>
            <span  style="--i:13;" ></span>
            <span  style="--i:24;" ></span>
            <span  style="--i:19;" ></span>
            <span  style="--i:25;" ></span>
            <span  style="--i:10;" ></span>
            <span  style="--i:17;" ></span>
            <span  style="--i:13;" ></span>
            <span  style="--i:24;" ></span>
            <span  style="--i:19;" ></span>
            <span  style="--i:25;" ></span>
            <span  style="--i:10;" ></span>
            <span  style="--i:17;" ></span>
            <span  style="--i:13;" ></span>
            <span  style="--i:24;" ></span>
            <span  style="--i:19;" ></span>
            <span  style="--i:10;" ></span>
            <span  style="--i:17;" ></span>
            <span  style="--i:13;" ></span>
            <span  style="--i:24;" ></span>
            <span  style="--i:19;" ></span>
            <span  style="--i:10;" ></span>
            <span  style="--i:17;" ></span>
            <span  style="--i:13;" ></span>
            <span  style="--i:24;" ></span>
            <span  style="--i:19;" ></span>
            <span  style="--i:10;" ></span>
            <span  style="--i:17;" ></span>
            
        </div>

    </div>
    <div class="box1">
        <div class="content">
        <form name="" action="" method="post" >
            <div class="ic">
                <i class="fa-sharp fa-solid fa-key" style="padding: 10%; font-size: 60px; margin-left: 15%; color: aliceblue; background: none; "></i>
            </div>
            <h3>Yo! Forgot your Password?</h3>
            <br>
            <p>No worries! Enter your email and we will send you a reset.</p>
           <div class="icons">
            <i class="fa-regular fa-envelope" style="color: #ebecec; font-size: x-large ; padding: 16px;"></i>
            <input type="mail" name="email" id="" placeholder="Enter Mail ID">

           </div>
           <div class="button">
           <input type="submit" name="submit" id="" value="Send Request">
           <br>
           <a href="login.php" style="color: #ebecec;">Back</a>
</form>
        </div>

    </div>
    
</body>
</html>