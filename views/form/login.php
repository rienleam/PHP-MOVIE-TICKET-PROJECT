<?php
require("../partials/header.php");
// require("../partials/nav.php");
?>

<form action="">
    <h1 class="mb-4">Log In to Your Account</h1>
    <div class="username">
        <div class="firstname">
            <label class="mt-2" for="firstname">First Name</label>
            <input type="text" name="firstname" placeholder="Enter First name" required>
        </div>
        <div class="lastname">
            <label class="mt-2" for="lastname">Last Name</label>
            <input type="text" name="lastname" placeholder="Enter Last name" required>
        </div>
    </div>
    <label class="mt-2" for="email">Email</label>
    <input type="email" name="email" placeholder="Enter your email" required>
    <label class="mt-2" for="password">Password</label>
    <input type="password" name="password" placeholder="Enter your password" required>


    <button id="login" type="submit">Log In</button>

    <p>Don't have an account? <a href="#"> Sign up</a></p>
    
</form>

<!-- <div class="picture">
    <img src="#">
</div> -->

