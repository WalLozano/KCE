<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('../public/assets/css/style.css') ?>">
    <title>KC Event Hub ApplicationOnline Event Permit Application for Kansas City Events</title>
    <link rel="icon" href="<?=base_url()?>public\assets\img\favicon.png" type="image/gif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- start of header -->

<div class="header">
    <div class="nav">
        <div class="left">
            <a href="/KCE/public"><img src="<?php echo base_url('../public/assets/img/logoKCE.png'); ?>" alt=""></a>
            <a href="faq"><p>FAQ</p></a>
            <a href="contact">Contact</a>
            <a href="calendar">Calendar</a>
        </div>
        <div class="right">
            <a href="">Register</a>
            <a href="">Login</a>
        </div>
    </div>
</div>

<!-- end of header -->

<body>

<?php echo $this->renderSection("content") ?>

</body>

<script src="<?php echo base_url('../public/assets/js/script.js') ?>"></script>
<!-- start of footer  -->
<footer>
    <div class="footer">
        <div class="footer_left">
            <a href=""><a href=""><img src="<?php echo base_url('../public/assets/img/kclogo.png'); ?>" alt=""></a>
                <p>2024©</p>
                <p></p>
            </a>
            <a href="http://kcmo.gov/">kcmo.gov</a>
        </div>
        <div class="footer_right">
            <div class="tos">
                <div><a href=""><p>Terms of use</p></a></div>
                <div><a href=""><p>Privacy Policy</p></a></div>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer  -->

</html>