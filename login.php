<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
         body {
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }
        div {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-style: double inset solid;
            border-top-color: #32a1ce;
            border-radius: 30px;
            width: 50%;
            padding: 20px;
        }
        .input {
            margin: 10px;
            padding: 5px;
            width: 300px;
            border-style: double inset solid;
            border-radius: 5px;
            height: 25px;
            align-items: center;
            animation: alternate-reverse;
        }
        .submit {
            margin: 10px;
            padding: 10px;
            width: 320px;
            border-style: inset;
            border-top-color: #32a1ce;
            border-radius: 5px;
            height: 35px;
            background-color: black;
            color: blanchedalmond;
            cursor: pointer;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif   ;
        }
        </style>
        <script>
            function validateForm() {
           
            var userName = document.forms["loginForm"]["userName"].value;
            var email = document.forms["loginForm"]["email"].value;
            var password = document.forms["loginForm"]["password"].value;

            if ( userName == "" || email == "" || password == "") {
                
                if (userName == "") {
                    document.getElementById("userNameError").innerHTML = "Oops,your User Name is missing!";
                } else {
                    document.getElementById("userNameError").innerHTML = "";
                }
                if (email == "") {
                    document.getElementById("emailError").innerHTML = "Oops, your Email is missing!";
                } else {
                    document.getElementById("emailError").innerHTML = "";
                }
                if (password == "") {
                    document.getElementById("passwordError").innerHTML = "Oops, your Password is missing!";
                } else {
                    document.getElementById("passwordError").innerHTML = "";
                }
                return false; 
            }
        }
        </script>
</head>
<body>
   <div>
    <h1><em>Login</em></h1>
    
    <form name="loginForm" method="POST" action="pdo.php" onsubmit="return validateForm()">

            <input class="input" name="userName" type="text" placeholder="Username">
            <span id="userNameError" class="error-message"></span>

            <input class="input" name="email" type="email" placeholder="Email">
            <span id="emailError" class="error-message"></span>
            
            <input class="input" name="password" type="password" placeholder="Password">
            <span id="passwordError" class="error-message"></span>
            
            <input class="submit" type="submit">
        
    </form>
    </div>
</body>
</html>