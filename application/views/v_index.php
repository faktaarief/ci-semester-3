<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPOTIFY</title>
    <link rel="stylesheet" href="<?= base_url();?>bootstrap/css/style.css">
</head>
<body>
    <center>
        <section>
    <div class="contain">
    <form action="<?=base_url('Welcomespotify/beranda'); ?>" method="post">
        <table border=0px>
            <tr>
                <th colspan='3'>
                    LOGIN
                </th></tr>  
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                    <input type="text" name='email'  id='email'></td>
                    <small><?php echo form_error('email');?></small>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>
                    <input type="text" name='pass' id='pass'></td>
                    <small><?php echo form_error('pass');?></small>
                    </td>
                </tr>
                <tr>
                        <td colspan='3' align='center'>
                            <input type="submit" value="LOGIN" class="tombol_submit">
                            <a href="<?= base_url('create-account'); ?>" style="text-decoration: none;"><div class="tombol_signup">SIGN UP</div></a>
                        </td>
                    </tr>
                <tr>
                <td colspan="3"class="footer"> &copyCopyright Kelompok 2
                </td>
                </tr>
        </table>
    </form>
    </div>
</section>
    </center>
</body>
</html>