<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="css/Sign-up.css"/>

</head>

<body>
<div class="container">
    <div class="column1">
        <form id="form" class="form">
            <h2>Login</h2>
            <div class="form-control">
                <label for='username'>Fullname</label>
                <input type="text" id="username" placeholder="Enter name">
                <small>Error message</small>
            </div>


            <div class="form-control">
                <label for='password'>Password</label>
                <input type="password" id="password" placeholder="Enter password">
                <small>Error message</small>
            </div>
            <button>SIGN IN</button>

            <div class="Register">
                <p>Not Registered?</p>
                <button><a href="../admin/Signup.php">SIGN UP</a></button>
            </div>

        </form>
    </div>
    <div class="column2">

        <img src="https://i.ibb.co/k5NNz4F/pablo-sign-up.png" alt="pablo-sign-up" border="0" class='signup-image'>
    </div>

</div>
<script src="SignUp.js"></script>
</body>

</html>