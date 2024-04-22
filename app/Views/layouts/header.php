<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/style.css') ?>">
    <title>KC Event Hub ApplicationOnline Event Permit Application for Kansas City Events</title>
    <link rel="icon" href="<?=base_url()?>\assets\img\favicon.png" type="image/gif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- start of header -->

<div class="header">
    <div class="nav">
        <div class="left">
            <a href="/KCE/public"><img src="<?php echo base_url('../assets/img/logoKCE.png'); ?>" alt=""></a>
            <a id="faq_register" href="../faq"><p>FAQ</p></a>
            <a href="../contact">Contact</a>
            <a href="../calendar">Calendar</a>
        </div>
        <div class="right">
            <a id="registerBtn" href="../auth/register">Register</a>
            <button href="" onclick="document.getElementById('id01').style.display='block'" id="loginBtn">Login</button>
        </div>
    </div>
</div>

<div id="id01" class="modal">

<form id="loginform" class="animate" action="loginUser" method="post">
    
    <div class="closeBtn">
    <button id="closeBtn"  onclick="document.getElementById('id01').style.display='none'" class="close">&times;</button>
    </div>
    
    <div class="container">
    <form action="<?php base_url('auth/loginUser') ?>">
        <label for="psw"><b>Email</b></label>
        <input class="loginInput" type="text" placeholder="Enter Username" name="loginUser" >
        <span class="text-danger"> <?php  echo validation_show_error('loginUser');  ?> </span>

        <label for="psw"><b>Password</b></label>
        <input class="loginInput" type="password" placeholder="Enter Password" name="loginPassword" >
        <span class="text-danger"> <?php  echo validation_show_error('loginPassword');  ?> </span>

        <button id="loginSubmit"  type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        </form>
        ?>
    </div>
</form>
</div>