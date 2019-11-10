<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- start file css  -->
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap-datepicker3.css'); ?>">
    <!-- end file css  -->

    <!-- start file script  -->
    <script src="<?= base_url('/bootstrap/js/jquery.slim.min.js'); ?>"></script>
    <script src="<?= base_url('/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('/bootstrap/js/bootstrap-datepicker.js'); ?>"></script>
    <!-- end file script  -->

    <title>Login to Account</title>

    <!-- start css internal modified -->
    <style>
        .form-group {
            position: relative;
            margin-bottom: 2rem;
            width: 20rem;
        }

        .form-control-placeholder {
            position: absolute;
            top: -7px;
            padding: 20px 0 0 13px;
            transition: all 200ms;
            opacity: 0.5;
        }

        .form-control:focus + .form-control-placeholder,
        .form-control:valid + .form-control-placeholder {
            font-size: 75%;
            transform: translate3d(0, -100%, 0);
            opacity: 1;
        }

        #panjang_password  {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: 
            #dc3545;
        }

        .btn-primary {
            font-size: 15px;
            color: #FFF;
            letter-spacing: 2px;
            font-weight: bold;
            line-height: 15px;
            border: 2px solid #1DB954;
            border-radius: 40px;
            background: #1DB954;
            transition: all 0.3s ease 0s;
            width: 320px;
            height: 48px;
        }

        .btn-primary:hover {
            color: #FFF;
            background: #14db5a;
            border: 2px solid #14db5a;
        }
    </style>
    <!-- end css internal modified -->

</head>
<body>
<!-- start heading -->
<nav class="navbar navbar-light shadow-sm p-3 mb-4 bg-white rounded">
  <img src="<?= base_url('assets/img/logo-black.png'); ?>" width="197px" alt="" class="mx-auto pt-3 pb-3">
</nav>
<!-- end heading  -->

    <!-- start content  -->
    <div class="container" id="needs-validation" novalidate>
        <div class="row">
            <div class="col-12 p-4 mx-auto">
                <h2 class="text-center" style="font-size: 18px; font-weight: bold;">Login to Account</h2>

                <!-- start create account form  -->
                <form class="pt-3" action="<?= base_url('login/auth'); ?>" method="POST">

                    <!-- start input email  -->
                    <?= $this->session->flashdata('msg'); ?>
                    <div class="form-group mx-auto">
                        <input type="text" id="email" class="form-control" style="height: 50px;" name="nama" required>
                        <label class="form-control-placeholder" for="email">Email or Username</label>
                        <div class="invalid-feedback">
                            Please provide a valid user.
                        </div>
                    </div>
                    <!-- end input email  -->

                    <!-- start input confirm email  -->
                    <div class="form-group mx-auto">
                        <input type="password" id="password" class="form-control" style="height: 50px;" name="password" required>
                        <label class="form-control-placeholder" for="password">Password</label>
                        <div class="invalid-feedback">
                            Please provide a valid password.
                        </div>
                    </div>
                    <!-- end input confirm email  -->

                    <!-- start captcha & submit  -->
                    <center>
                        <input type="submit" class="btn btn-primary mb-2" name="login" value="LOGIN">
                    </center>
                    <!-- end captcha & submit  -->

                </form>
                <!-- end create account form  -->
                <p class="text-center" style="font-size: 14px;">Don't have an account? <a href="">Sign Up</a></p> 
            </div>
        </div> 
    </div>
    <!-- end content  -->
</body>
<script>
    $( "#needs-validation" ).submit(function(event) 
        {
            if (this.checkValidity() === false) 
            {
                event.preventDefault();
                event.stopPropagation();
            }
            this.classList.add('was-validated');
        });
</script>
</html>