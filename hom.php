<?php
if(isset($_GET['signup'])){

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<style>
    html,body{
        display: block;
        height: 100%;
        width: 100%;
        margin: 0px;
    }
    .main{
        height: 100%;
        width: 100%;
    }
    .second{
        height: 100%;
        width:80%;
        float: right;
        overflow: scroll;
        overflow-x: hidden;
        overflow-y: auto;
        text-align: center;
        background-color: rgb(243, 245, 246);
    }
    .thrid{
        width: 100%;
        height: 100%;
        font-size: large;
        font-family: monospace;

    }
    .fourth{
        display: inline-block;
        height: 100px;
        width: 19%;
        background-color: white;
        box-shadow: 1px 2px 3px rgba(0, 0,0, 0.7);
        border-radius: 10px;
        margin: 5px;

    }
    .sub{
        display: inline-block;
        height: 100%;
        width: 20%;
        background-color:white;
        overflow: scroll;
        overflow-x: hidden;
        overflow-y: auto;
    }
    .sub2{
        display: inline-block;
        height: 50px;
        width: 98%;
        margin-left: 2px;
        background-color:aliceblue;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
    }
    .image{
        display: inline-block;
        height: 50px;
        width: 50px;
    }
    .profile{
        display: inline-table;
        font-size: large;
        font-family: monospace;
        width: 100%;
        height: 150px;
        background-color: #128c7e;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);
    }
    .profile_pic{
        display: block;
        box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.7);
        border-radius: 50%;
        border: solid white 1px;
        background-color: white;
        margin-left: 48%;
        margin-top: 100px;
    }
    .second2{
        display: inline-block;
        position:fixed;
        bottom: 3%;
        left: 19%;
        width: 80%;
    }
    .message{
        display: inline-block;
        border-left: 0px;
        border-right: 0px;
        border-top: 0px;
        border-bottom: 0px;
        height: 50px;
        width: 88%;
        border-radius: 20px;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.7);
        font-size: large;
        font-family: monospace;
    }
    .message:focus{
        outline: none !important;
    }
    .button{
        display: inline-block;
        border-radius: 50%;
        border-left: 0px;
        border-right: 0px;
        border-top: 0px;
        border-bottom: 0px;
        margin-bottom: 10px;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.7);
    }
</style>
<body>
    <div class="main">
        <div class="sub">
            <div class="sub2">

            </div>
            <div class="sub2">

            </div>
        </div>
        <div id="second" class="second">
            <div class="profile">
                <img class="profile_pic" src="asset/telegram-logo-png-0.png" height="100" width="100">
            </div>
            <div class="thrid">
                
            </div>
            <div class="second2">
                <form action="./hom.php" method="POSt">
                    <input class="message" type="text" name="message" id="message">
                    <button id="button" class="button" type="submit">
                        <img src="asset/telegram-logo-png-0.png" height="50" width="50">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var button=document.getElementById("buttton");
        var msg=document.getElementById("message");
        var context=document.getElementById("second");
        button.addEventListener("click",(event)=>{
            context.appendChild()
        })
    </script>
</body>
</html>