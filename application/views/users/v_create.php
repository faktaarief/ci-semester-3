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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- end file script  -->

    <title>Create a New Account</title>

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
                <h2 class="text-center" style="font-size: 18px; font-weight: bold;">Create with email address</h2>

                <!-- start create account form  -->
                <form class="pt-3">

                    <!-- start input email  -->
                    <div class="form-group mx-auto">
                        <input type="email" id="email" class="form-control" style="height: 50px;" required>
                        <label class="form-control-placeholder" for="email">Email</label>
                        <div class="invalid-feedback">
                            Please provide a valid email.
                        </div>
                    </div>
                    <!-- end input email  -->

                    <!-- start input confirm email  -->
                    <div class="form-group mx-auto">
                        <input type="email" id="konfirmasi_email" class="form-control" style="height: 50px;" required>
                        <label class="form-control-placeholder" for="konfirmasi_email">Confirm Email</label>
                        <div class="invalid-feedback">
                            This email address does not match.
                        </div>
                    </div>
                    <!-- end input confirm email  -->

                    <!-- start input password  -->
                    <div class="form-group mx-auto">
                        <input type="password" id="password" class="form-control" style="height: 50px;" required>
                        <label class="form-control-placeholder" for="password">Password</label>
                        <div id="panjang_password" style="display:none;">
                            Must be 8 character.
                        </div>
                    </div>
                    <!-- end input password  -->
                    
                    <!-- start input name  -->
                    <div class="form-group mx-auto">
                        <input type="text" id="name" class="form-control" style="height: 50px;" required>
                        <label class="form-control-placeholder" for="name">Name</label>
                    </div>
                    <!-- end input name  -->

                    <!-- start input date of birth -->
                    <div class="form-group mx-auto">
                        <input type="text" id="tanggal" class="form-control tanggal" style="height: 50px;" required>
                        <label class="form-control-placeholder" for="tanggal">Date of Birth</label>
                    </div>
                    <!-- end input date of birth  -->

                    <!-- start radio gender  -->
                    <div class="form-group mx-auto">
                    <label for="Gender" style="color: #88898c;">Gender</label> <br>
                        <input class="form-check-input ml-1" type="radio" name="jk" id="jk-man" value="Man">
                        <label class="form-check-label ml-4" style="margin-right: 30px; color: #88898c;" for="Man">Man</label>
                        <input class="form-check-input" type="radio" name="jk" id="jk-woman" value="Woman">
                        <label class="form-check-label" for="Woman" style="margin-right: 30px; color: #88898c;">Woman</label>
                        <input class="form-check-input" type="radio" name="jk" id="jk-non-biner" value="non-biner">
                        <label class="form-check-label" for="non-biner" style="color: #88898c;">Non-biner</label>
                    </div>
                    <!-- end radio gender  -->

                    <!-- start captcha & submit  -->
                    <center>
                        <div class="g-recaptcha mb-4" data-sitekey="6Lf5ssAUAAAAAL4DYNdY33t1snjiIpKqVRFnYcO8"></div>
                        <button type="submit" class="btn btn-primary mb-2">CREATE</button>
                    </center>
                    <!-- end captcha & submit  -->

                </form>
                <!-- end create account form  -->
                <p class="text-center" style="font-size: 14px;">Already have an account? <a href="">Sign In</a></p> 
            </div>
        </div> 
    </div>
    <!-- end content  -->
</body>
<script>
    $(document).ready(function () 
    {
        $('.tanggal').datepicker
        ({
            format: "dd-mm-yyyy",
            autoclose:true
        });
    });

    $( "#needs-validation" ).submit(function(event) 
        {
            if (this.checkValidity() === false) 
            {
                event.preventDefault();
                event.stopPropagation();
            }
            this.classList.add('was-validated');
        });

        
    $( "#email" ).change(function()
    {
        var email = $(this);
        var konfirmasi_email = $("#konfirmasi_email").val();

        if (email.is(':invalid')) 
        {
            email.val(' ');
            email.removeClass('is-valid').addClass('is-invalid');
            email.siblings(".invalid-feedback");
        } 
        else 
        {
            email.removeClass('is-invalid').addClass('is-valid');
        }
    });


    $( "#konfirmasi_email" ).change(function() 
        {
            var email = $("#email").val();
            var konfirmasi_email = $(this);

        if(konfirmasi_email.val() == email) 
        {
            konfirmasi_email.removeClass('is-invalid').addClass('is-valid');
        }
        else 
        {
            konfirmasi_email.val('');
            konfirmasi_email.removeClass('is-valid').addClass('is-invalid');
            konfirmasi_email.siblings(".invalid-feedback");
        }
    });


    $( "#password" ).change(function() 
        {
            var password = $(this);

            if(password.val().length < 8) 
            {
                $("#panjang_password").show();
                password.removeClass('is-valid').addClass('is-invalid');
            }
            else
            {
                $("#panjang_password").hide();
                password.removeClass('is-invalid').addClass('is-valid');
            }
        });


    $( "#name" ).change(function()
        {
            var nama = $(this);

            if(nama.val().length >= 3) 
            {
                nama.removeClass('is-invalid').addClass('is-valid');
            }
            else 
                nama.removeClass('is-valid').addClass('is-invalid');
        });


    $( "#tanggal" ).change(function() 
        {
            var tanggal = $(this);
            tanggal.addClass('is-valid');
        });
</script>
</html>