<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
</head>
<style>
    html,body{
        display: inline-block;
        height: 100%;
        background-color: aliceblue;
        width: 100%;
    }
    .main{
        display: block;
        height: 100%;
        width: 100%;
    }
    .sub{
        display: inline-block;
        background-color: white;
        width: 80%;
        margin-left:10%;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.7);
        background-color: aquamarine;
    }
    .thrid{
        background-color: white;
        width: 100%;
        display:inline-block;
        font-family: monospace;
    }
    .context{
        margin-left: 10px;
        font-size: large;
        display: inline-block;
        height:50px;
        width: 30%;
    }
    </style>
<body>
    <div class="main">
        <div class="sub">
            <div class='context'>name</div>
            <div class='context'>password</div>
            <div class='context'>email</div>
            <div class='thrid'>
            </div>
            <?php
            $dbname="nitrogen";
            $user="root";
            $pass="karthi.2002";
            $servername="localhost";
            $conn=mysqli_connect($servername,$user,$pass,$dbname);
            if(!$conn){
                die("Connection failed :".mysql_connect_error());
            }
            $sql="SELECT username,password,email,phone_num FROM login;";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "<div class='thrid'>
                    <div  class='context'>".$row['username']."</div>
                    <div class='context'>".$row['password']."</div>
                    <div class='context'>".$row['email']."</div>
                </div>";
            }
            ?>
        </div>
    </div>
</body>
</html>