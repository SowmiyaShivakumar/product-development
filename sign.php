<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="l1.css">
    <script src="https://kit.fontawesome.com/6133dcca2b.js" crossorigin="anonymous"></script>
    <style>
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
@media (max-width: 600px) {
            .content{
                height: 500px;
                width: 400px;
            }
            .icons input{
                width: 200px;
            }
           
        }
    </style>
    <?php
   if(isset($_GET["submit"]))
   {
    $Name= $_GET["name"];
   $SP=$_GET["set"];
   $CP=$_GET["confirm"];
   $Mail=$_GET["mail"];
   $conn= mysqli_connect("localhost","root","","pd");
   $ins= "Insert into signup(Name,SetPassword,ConfirmPassword,Mail) values('$Name','$SP','$CP','$Mail');";
    mysqli_query($conn,$ins);
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
               
    <div class="container">
        <div class="box">
            <h1>Register</h1>
            <form action="" method="get">
                <div class="field">
                    <i style="color: aliceblue;  " class="fa-regular fa-user fa-bounce"></i>
                    <input type="text" name="name" id="" placeholder="Username:">
                </div>
                <div class="field">
                    <i style="color: aliceblue;" class="fa-solid fa-unlock fa-bounce"></i>
                    <input type="password" name="set" id="" placeholder="Set Password:">
                </div>
                <div class="field">
                    <i style="color: aliceblue;" class="fa-solid fa-unlock fa-bounce"></i>
                    <input type="password" name="confirm" id="" placeholder="Confirm Password:">
                </div>
                <div class="field">
                    <i style="color: aliceblue;" class="fa-regular fa-envelope fa-bounce"></i>
                    
                    <input type="email" name="mail" id="" placeholder="MailID:">
                </div>
                <div class="cb">
                    <input type="checkbox" name="submit" id="">
                    <p>Remember Me</p>
                    <a href="forgot.php">Forgot Password?</a>
                </div>
                
                <div class="button">
                <input  type="submit" name="submit" value="SUBMIT" >
                </div>
                <div class="lastline">
                    <p>Already have an account?<a href="login.php">Login</a></p>
                </div>
               
            </form>
        </div>

    
</body>
</html>