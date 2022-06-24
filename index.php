<?php
$dbname="nitrogen";
$user="root";
$pass="karthi.2002";
$servername="localhost";
$conn=mysqli_connect($servername,$user,$pass,$dbname);
if(!$conn){
    die("Connection failed :".mysql_connect_error());
}
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username!=null&&
    $password!=null){
        $sql="SELECT username,password FROM login where username='".$username."' AND password='".$password."';";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            header('Location: http://localhost/facebook/hom.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="script/main.js"></script>
    <style>
        html,body{
            display: block;
            height: 100%;
        }
        .main{
            display: block;
            height: 100%;
            width: 100%;
            background-color: aliceblue;
        }
        .branch{
            display: inline-block;
            height: 100%;
            background-color: bisque;
            width: 20%;   
            box-shadow: 1px 2px 3px rgba(0,0, 0,0.7);
        }
        .sub{
            display: inline-block;
            width: 75%;
            text-align: center;
            height: 70%;
            margin-left:12.5%;
            margin-top: 5%;
            padding-left: 30px;
            background-color: white;
            border-radius:10px;
            box-shadow: 1px 5px 5px rgba(0,0, 0,0.7);
        }
        .thrid{
            display: inline-block;
            width: 100%;
            text-align: center;
            box-shadow: 1px 2px 3px rgba(0,0, 0,0.7);
        }
        .option{
            display: inline-block;
            height: 100%;
            width: 50px;
            background-color: white;
            border-radius: solid black 0.5px;
        }
        .div{
            display: inline-block;
            height:50px;
            width:80%;
            margin:10px;
            font-size: large;
            font-family: monospace;

        }
        .inp{
            font-size:large;
            font-family:monospace;
            display:inline-block;
            height:50px;
            width:40%;
            border-left:0px;
            border-right:0px;
            border-top:0px;
            float:right;
        }
        .button{
            display: inline-block;
            height:50px;
            font-size:large;
            min-width: 100px;
            border-radius:20px;
            background-color:blue;
            color:white;
        }
        .inp:focus{
            outline: none !important;
            border-color:blue;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="sub">
            <h1>Login</h1>
            <div class="thrid">
            </div>
            <form action="./index.php" method="post">
            <div class="div">
                <label for="text">username :</label>
                <input class="inp" type="text" name="username" id="username">
            </div class="div">
            <div class="div">
            <label for="password">password :</label>
                <input class="inp" type="password" name="password" id="password">
            </div class="div">
            <div class="div">
                <button class="button" type="submit" value="login">login</button>
            </div>
            </form>
            <a href="signup.php">create account</a>
        </div>
    </div>
</body>
</html>