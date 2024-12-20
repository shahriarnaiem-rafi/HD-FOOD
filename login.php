<?php
    $database=mysqli_connect("localhost","root","","prototype");
    
    if(isset($_POST["submit"])){
        $email=$_POST["email"];
        $emailNan="/^[A-Za-z0-9]+@[a-z]+\.[a-z]{2,4}/";
      

        $password=$_POST["password"];

        $database->query("call login('$email','$password')");
        header("location:$_SERVER[PHP_SELF]");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />

    <style>
        fieldset {
            position: absolute;
            padding: 50px;
            font-size: 20px;
            background-color: skyblue;
            box-shadow: 2px 3px 5px black;
            margin: 90px 450px;
            border-radius: 20px 0px 20px 0px;
            height:350px;
            width: 400px;
        }

        input {
            padding: 5px;
            box-shadow: 3px 0px 4px rgb(22, 14, 14);
            border-radius: 6px;
            color: rgb(255, 10, 10);
            text-shadow: 3px 0px 2px gray;
            text-align: center;
            margin-left: 20px;
            width:300px ;
        }

        body {
            color: rgb(255, 10, 10);
        }

        .buttons {
            position: absolute;
            
        }

        .btn {
            color: black;
            background-color: bisque;
            width: 100px;
            margin-left: 50px;
        }

        .btn:hover {
            background-color: rgb(156, 116, 68);
            color: white;
        }
        legend{
            
          color: white;
            text-shadow: 2px 2px 2px red;
            border-radius: 20px 20px 0px 0px;
            padding: 20px 10px 0px 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <fieldset>
            <legend style="text-align:center;">Registration</legend>
            <input type="text" name="email" id="" placeholder="Enter your email"><br><br>
            <?php
                if(isset($_POST["submit"])){
                    if(!preg_match($emailNan,$email)){
                        echo "DOne";
                    }
                    else{
                        echo "please enter a valid email";
                    }
                }
            ?>
            <input type="password" name="password" id="" placeholder="Enter your password"><br><br>

            <div class="buttons">
                <input type="submit" class="btn" value="submit" name="submit">
                <input type="reset" class="btn">
            </div>
        </fieldset>
    </form>


</body>

</html>