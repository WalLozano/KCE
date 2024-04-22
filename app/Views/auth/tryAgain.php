<php? echo view?>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('../assets/css/style.css') ?>">
        <title>Hello, world!</title>
    </head>

    <body id="bodyTryAgain">

        <div id="id02" class="tryAgain">

            <form id="loginformTryAgain" class="animate tryAgainForm" action="loginUser" method="post">
                <div class="container">
                    <div class="TryAgainTitle"><h1>Login</h1></div>
                    <form action="<?php base_url('auth/loginUser') ?>">
                        <label for="psw"><b>Email</b></label>
                        <input class="loginInput form-control" type="text" placeholder="Enter Username" name="loginUser" value="<?= set_value('loginUser') ?>">
                        <span class="text-danger"> <?php echo validation_show_error('loginUser');  ?> </span>
                        <br>
                        <label for="psw"><b>Password</b></label>
                        <input class="loginInput form-control" type="password" placeholder="Enter Password" name="loginPassword">
                        <br>
                        <span class="text-danger"> <?php echo validation_show_error('loginPassword');  ?> </span>

                        <button id="loginSubmit" type="submit">Sign in</button>
                    </form>

                    <!-- show errors in the form -->

                    <?php
                    if (!empty(session()->getFlashdata('success'))) {
                    ?>
                        <div class="alert alert-success">
                            <?=
                            session()->getFlashdata('success')
                            ?>
                        </div>
                    <?php
                    } else if (!empty(session()->getFlashdata('fail'))) {
                    ?>
                        <div class="alert alert-danger">
                            <?=
                            session()->getFlashdata('fail')
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>