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
        body {
            background-color: aqua;
        }

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
        <?php echo $this->session->flashdata('pesan'); ?>
        <form method="post" action="<?php echo base_url('index.php/auth/login') ?>" class="user">
            <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="h2 mb-3 fw-normal text-dark">Welcome <span class="text-warning">Back</span></h1>
            <p class="mb-5">Welcome Back! Please Enter Your Detail</p>

            <div class="form-floating">
                <input type="text" class="form-control mb-3" id="floatingInput" placeholder="Username" name="username">
                <?php echo form_error('username', '<div class="text-dark small ml-2">', '</div>'); ?>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <?php echo form_error('password', '<div class="text-dark small ml-2">', '</div>'); ?>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="text-primary mb-4">
                <a href="<?= base_url('/index.php/registrasi'); ?>" class="link-danger">not have an account? register here</a>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-3 border-light" type="submit">Sign in</button>
            <a class="w-100 btn btn-lg btn-dark border-danger" href="<?= base_url('index.php/welcome/index'); ?>"> Kembali</a>
            <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
        </form>
    </main>



</body>

</html>