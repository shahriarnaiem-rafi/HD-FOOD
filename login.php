<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HD FOOD login</title>
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        section {
            margin-left: 350px;
            background-color: aqua;
            width: 600px;
            height: 600px;
        }

        input {
            width: 300px;
            border-radius: 10px;
            margin-top: 5px;
            background-color: lightgray;

        }

        .confirm {
            color: white;
            width: 100px;
            background-color: black;
            text-shadow: 3px 2px 4px red;
        }
    </style>
</head>

<body>

    <section>
        <div id="form">
            <form action="" method="post">
                <fieldset>
                    <legend>Resistration</legend>
                    <input type="text" placeholder="Please enter your name" name="name"><br>
                    <input type="text" placeholder="Please enter your email" name="email"><br>
                    <input type="number" placeholder="Please enter your number" name="contact"><br>
                    <input type="date" name="date"><br>
                    <input type="password" placeholder="Please enter your password"><br>
                    <input type="c" placeholder="Please enter your password"><br>

                    <input type="submit" name="submit" value="CONFIRM" class="confirm">
                </fieldset>
            </form>
        </div>



    </section>

    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>