<php? echo view?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/style.css') ?>">
</head>

<body>


    <!-- Modal -->

    <?php 
        if(!empty(session()->getFlashdata('success'))){
            ?>
                <div class="alert alert-success">
                    <?=
                        session()->getFlashdata('success')
                    ?>
                </div>
            <?php
        }else if(!empty(session()->getFlashdata('fail'))){
            ?>
                <div class="alert alert-danger">
                    <?=
                        session()->getFlashdata('fail')
                    ?>
                </div>
            <?php
        }
        ?>

    <div  id="containerRegister" class="container entrance">

        <form action=" <?= base_url('auth/registerUser') ?>" class="form" method="post">
            <?= csrf_field(); ?>
            <div class="form-row">

                <div class=" form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Name" value="<?= set_value('name') ?>" name="name">
                    <span class="text-danger"> <?php  echo validation_show_error('name');  ?> </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" placeholder="lastname" name="lastname" value="<?= set_value('lastname') ?>">
                    <span class="text-danger"> <?php  echo validation_show_error('lastname');  ?> </span>
                </div>
                <div class="form-group col-md-12">
                    <label for="Company">Company</label>
                    <input type="text" class="form-control" placeholder="Company" name="company" value="<?= set_value('company') ?>">
                    <span class="text-danger"> <?php  echo validation_show_error('company');  ?> </span>
                </div>
            </div>
            <div class="form-group">
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" placeholder="1234 Main St" name="address_1" value="<?= set_value('address_1') ?>">
                <span class="text-danger"> <?php  echo validation_show_error('address_1');  ?> </span>
                <div class="form-group ">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" placeholder="Apartment, studio, or floor" name="address_2" value="<?= set_value('address_2')?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input placeholder="Kansas City" type="text" class="form-control" name="city" value="<?= set_value('City') ?>">
                        <span class="text-danger"> <?php  echo validation_show_error('city');  ?> </span>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <input placeholder="Missouri" type="text" class="form-control" name="state" value="<?= set_value('state') ?>">
                        <span class="text-danger"> <?php  echo validation_show_error('state');  ?> </span>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input placeholder="12345" type="number" class="form-control" name="zip" value="<?= set_value('zip') ?>">
                        <span class="text-danger"> <?php  echo validation_show_error('zip');  ?> </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input placeholder="123-123-1234" type="tel" class="form-control" name="phone" value="<?= set_value('phone') ?>">
                        <span class="text-danger"> <?php  echo validation_show_error('phone');  ?> </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input placeholder="example@example.com" type="email" class="form-control" name="email" value="<?= set_value('email') ?>">
                        <span class="text-danger"> <?php  echo validation_show_error('email');  ?> </span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" >
                        <span class="text-danger"> <?php  echo validation_show_error('password');  ?> </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputZip">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword">
                        <span class="text-danger"> <?php  echo validation_show_error('confirmPassword');  ?> </span>
                    </div>
                </div>
                <div class="form-group">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>

    </div>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
