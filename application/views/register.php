<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Form Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/login.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">

        <form method="post" action="<?php echo base_url('index.php/registrasi') ?>" class="user">
            <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="h3 mb-3 fw-normal text-dark">Form<span class="text-warning">Register</span></h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nama anda" name="nama">
                <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                <label for="floatingInput">Nama anda</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username anda" name="username">
                <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_1">
                <?php echo form_error('password', '<div class="text-dark small ml-2">', '</div>'); ?>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Ulangi password" name="password_2">
                <label for="floatingPassword">Repeat password</label>
            </div>

            <div class="text-primary mb-2">
                <a href="<?= base_url('/index.php/auth/login'); ?>" class="link-success ">already have an account? sign up here</a>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-3 border-light" type="submit"> Register</button>
            <a class="w-100 btn btn-lg btn-dark border-danger" href="<?= base_url('index.php/welcome/index'); ?>"> Kembali</a>
            <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
        </form>
    </main>



</body>

</html>