
<?php
if (isset($_POST["btn"])){
    if (empty($_POST["firstname"])){
       echo "enter your name <br>";
    }
    else{
        $name=$_POST["firstname"];
        if (!preg_match('/^[a-zA-Z\s]+$/',$name)){
            echo 'enter only string  <br>';

        }
    }

    if (empty($_POST["lastname"])){
        echo "please enter your last name <br>";
    }
    else{
        $name=$_POST["lastname"];
        if (!preg_match('/^[a-zA-Z\s]+$/',$name)){
            echo 'enter only string  <br>';

        }
    }
    if (empty($_POST["date"])){
        echo "please enter date  <br>";
    }
    else{
        $fixdatevalue="1999/01/01";
        $user_date=$_POST["date"];
        $fixdate=date($fixdatevalue);
        if ($user_date<$fixdate){
            echo " date of birth before  01/01/1999  is allowed to registration  <br>";
        }

    }

    if (empty($_POST["email"])){
        echo "please enter email  <br>";
    }
    else{
            $email=$_POST["email"];
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "plzz enter valid email adress   <br>";
        }
    }
    if (empty($_POST["phone"])){
        echo "please enter phone <br>";
    }
    else{
        $phone=$_POST["phone"];
        if (!preg_match('/(^(\+88|0088)?(01){1}[56789]{1}(\d){8})$/',$phone)){
            echo 'enter only bangladeshi number   <br>';
        }
    }


}

?>

<html>
<head>
 <title>validation</title>
</head>
<body>
    <form action="" method="post">

        <table>
            <tr>
                <td>First name:</td>
                <td> <input type="text" name="firstname" > </td>
            </tr>
            <tr>
                <td> Last name:</td>
                <td> <input type="text" name="lastname"> </td>
            </tr>
            <tr>
                <td> Date of Birth nme:</td>
                <td> <input type="date" name="date"> </td>
            </tr>
            <tr>
                <td> Email id:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td> Phone number:</td>
                <td><input type="tel" name="phone"></td>
            </tr>
           <tr>
               <td> <input type="submit" value="submit" name="btn"></td>
               <td> <input type="reset" value="submit" name="reset"></td>
           </tr>

        </table>
    </form>
</body>
</html>

