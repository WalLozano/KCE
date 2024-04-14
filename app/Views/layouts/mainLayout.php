<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('../public/assets/css/style.css') ?>">
    <title>Document</title>
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