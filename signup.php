<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<style>
    html,body{
        display: block;
        height: 100%;
        width: 100%;
    }
    .main{
        display: inline-block;
        height: 100%;
        background-color: aliceblue;
        width: 100%;
    }
    .sub{
        margin-top: 100px;
        background-color: white;
        margin-left: 12.5%;
        display: inline-block;
        height: 80%;
        width: 75%;
        text-align: center;
        font-size: x-large;
        box-shadow: 1px 2px 3px rgba(0,0, 0, 0.7);
        font-family: monospace;
    }
    input{
        height:50px;
        width: 40%;
        margin: 10px;
        margin-left: 12.5%;
        border-left:0px;
        border-right: 0px;
        border-top: 0px;
        float: right;
    }
    input:focus{
        outline: none !important;
        border-color:blue;
    }
    .third{

        width: 100%;
        display: inline-block;
    }
    .button{
        background-color: blue;
        color: white;
        text-align: center;
        height: 50px;
        margin: 10px;
        border-radius: 10px;
    }
    .message{
        display: block;
        height: 50%;
        width: 50%;
        position:fixed;
        text-align: center;
        box-shadow: 1px 2px 3px rgba(0,0, 0, 0.7);
        left: 25%;
        bottom: 25%;
        background-color: rgb(242, 246, 242);
        border: solid rgb(240, 238, 238) 2px;
    }
</style>
<body>
<?php
$dbname="nitrogen";
$user="root";
$pass="karthi.2002";
$servername="localhost";
$conn=mysqli_connect($servername,$user,$pass,$dbname);
if(!$conn){
    die("Connection failed :".mysql_connect_error());
}
if(isset($_POST['text'])){
    $name=$_POST['text'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $email=$_POST['email'];
    $phone_num=$_POST['number'];
    $age=$_POST['age'];
    if($password==$confirm_password&&$password!=null&&$confirm_password!=null){
        $sql="INSERT INTO login (username,password,email,phone_num) values ('".$name."','".$password."','".$email."',".$phone_num.");";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<div id='message' class='message'>
            <h3>Acount created successfully</h3>
            <p>you have created account 
                in this site
            </p>
            <button type='button' id='but' class='button'>Ok
            </button>
          </div><script>
          var div=document.getElementById('message');
          var button=document.getElementById('but');
          button.addEventListener('click',(e)=>{
              console.log('clicked on button');
              div.style.visibility='hidden';
          });
      </script>";
        }else{
           hello();
        }
    }
    else{
        echo " <script>alert('password not matching');</script>";
    }

}
?>
    <div class="main">
        <div class="sub">
           <form action="./signup.php" method="post">
                <h2>Create Account</h2>
                <div class="third">
                    <label for="text">
                        name :
                    </label>
                    <input type="text" name="text" id="text">

                </div class="third">
                <div class="third">
                    <label for="password">password :</label>
                    <input type="password" name="password" id="password">

                </div>
                <div class="third">
                    <label for="confirm_password">confirm password :</label>
                    <input type="password" name="confirm_password" id="confirm_password">

                </div class="thrid">
                <div class="third">
                    <label for="email">email :</label>
                    <input type="email" name="email" id="email">

                </div>
                <div class="third">
                    <label for="number">number :</label>
                    <input type="number" name="number" id="number">

                </div class="third">
                <div class="third">
                    <label for="age">age :</label>
                    <input type="number" name="age" id="age">

                </div>
                <div>
                    <button type="submit" class="button" id="button" name="button">create account</button>
                </div>
           </form>
        </div>
    </div>
</body>
</html>