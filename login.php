<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="l.css">
    <script src="https://kit.fontawesome.com/6133dcca2b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
       @media (max-width: 600px) {
            .content{
                height: 500px;
                width: 400px;
            }
            .icons input{
                width: 200px;
            }
           
        }
        
        .button input{
    color: #ebecec;
    height: 50px;
    width: 300px;
    margin-top: 25px;
    border: 1px solid white;
    border-radius: 20px;
    margin-left: 25px;
    background: none;
}

    </style>
    <?php
if(isset($_POST['submit'])){
$userMail = $_POST['user_mail'];
$passWord = ($_POST['password']);
$conn= mysqli_connect("localhost","root","","pd");
$query = "Select * from signup where Mail = '$userMail' and SetPassword =
'$passWord'";
$run = mysqli_query($conn,$query);
if(mysqli_num_rows($run)>0){
if(!isset($_SESSION)){
session_start();
}

echo "<script>;
 window.alert('Login Successfull');
</script>";
}}
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
    <div class="container">
        <div class="box">
            <h1>Login</h1>
            <form action="" method="post">
                <div class="field">
                    <i style="color: aliceblue;  " class="fa-regular fa-user fa-bounce"></i>
                    <input type="email" name="user_mail" id="" placeholder="EMail:">
                </div>
                <div class="field">
                    <i style="color: aliceblue;" class="fa-solid fa-unlock fa-bounce"></i>
                    
                    <input type="password" name="password" id="" placeholder="Password:">
                </div>
                <div class="cb">
                    <input type="checkbox" name="" id="">
                    <p>Remember Me</p>
                    <a href="forgot.php">Forgot Password?</a>
                </div>
               
                <div class="button">
                    <input  type="submit" name="submit" value="SUBMIT" >
                    </div>
                
                <div class="lastline">
                    <p>Don't you have account?<a href="sign.php">Register</a></p>
                </div>
               
            </form>
        </div>

    </div>
</body>
</html>