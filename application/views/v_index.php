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
    <form action="<?=base_url('login/auth'); ?>" method="post">
        <table border=0px>
            <tr>
                <th colspan='3'>
                    <small><?= $this->session->flashdata('msg'); ?></small>
                    LOGIN
                </th></tr>  
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                    <input type="text" name='nama'  id='email'></td>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>
                    <input type="text" name='password' id='pass'></td>
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