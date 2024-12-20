

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing up</title>
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />


    <style>
        body {
            /* background: linear-gradient(to top, red,orange,yellow,green,blue,indigo,violet); */
            background-image: url(./a-0100.jpg);


        }

        .first {
            position: absolute;
            padding: 20px;
            margin-left: 100px;
        }

        .second {
            position: relative;
            padding: 20px;
            margin-left: 600px;
            margin-top: 0px;

        }

        .btn {
            margin-left: 100px;
            padding: 20px;
            margin-top: 50px;
            margin-left: 800px;
        }

        .btn .btn1,
        .btn2 {
            padding: 15px 40px 15px 40px;
        }

        .fieldset1 {
            margin: 50px 100px 200px 100px;
        }

        input {
            padding: 10px;
            border-radius: 0px 10px 0px 10px;
        }
    </style>

</head>

<body>
    <form action="">
        <fieldset class="fieldset1"
            style="font-size: 25px; background: linear-gradient(to right, rgb(59, 132, 201) , rgb(128, 199, 231));">
            <div class="first">
                <label for="">First Name:- *</label>
                <input type="text" name="" id="" placeholder="Enter your first name"><br><br>

                <label for="">Last Name:-*</label>
                <input type="text" name="" id="" placeholder="Enter your last name"><br><br>

                <label for="">Email:-*</label>
                <input type="email" name="" id="" placeholder="Enter your email"><br><br>

                <label for="">Password:-*</label>
                <input type="password" name="" id="" placeholder="Enter your password"><br><br>

                <label for="">Re-enter:-*</label>
                <input type="password" name="" id="" placeholder="Enter your password"><br><br>

                <label for="">Gender:- </label>
                Male <input type="radio" name="gender" id="">
                Female <input type="radio" name="gender" id=""><br><br>


                <label for="">DOB:-*</label>
                <input type="date" name="" id=""><br><br>

            </div>

            <div class="second">
                <label for="">Department:-</label>
                <select name="" id="">

                    <option value="">EEE</option>
                    <option value="" selected>CSE</option>
                    <option value="">EET</option>
                    <option value="">CIVIL</option>
                </select><br><br>

                <label for="">Blod Group:-</label>
                <input type="text" name="" id="" placeholder="Enter your Blood Group"><br><br>


                <label for="">Number:-*</label>
                <input type="number" name="" id="" placeholder="Enter your number"><br><br>


                <label for="">Country:-</label>
                <select name="" id="">

                    <option value="">Iran</option>
                    <option value="" selected>Bangladesh</option>
                    <option value="">Pakistan</option>
                    <option value="">USA</option>
                </select><br><br>

                <label for="">CV:-*</label>
                <input type="file"> <br><br>

                <label for=""> Comment:-</label>
                <textarea name="" id="" placeholder="Please Enter Your Opinion"></textarea>



            </div>

            <div class="btn">
                <input type="reset" value="Reset" class="btn1">
                <input type="submit" value="Submit" class="btn2">
            </div>
        </fieldset>
    </form>

</body>

</html>