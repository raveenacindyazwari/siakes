<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">

    <div class="login_wrapper">

        <div class="animate form login_form">
            <div>
                <center>
                    <img src="<?= base_url() ?>assets/images/logo.png" width="120" height="120">
                    <p>
                        <b>
                            <h3>SISTEM INFORMASI AKADEMIK</h3>
                        </b>
                    <h6> <strong>SMK KESEHATAN REFORMASI PONTIANAK</strong></h6>
                </center>
            </div>

            <section class="login_content">

                <?php $this->view('messages') ?>
                <form action="" method="post">

                    <a class="btn btn-primary" href="<?= site_url('Auth/login_siswa') ?>" role="button">Login Siswa</a>
                    <a class="btn btn-primary" href="<?= site_url('Auth/login_guru') ?>" role="button">Login Guru</a>
                    <div class="clearfix mt-5"></div>
                    <div class="separator">
                        <p>
                            <strong>Copyright &copy; 2022 SMKKR PONTIANAK.</strong>
                        </p>
                        <div class="clearfix"></div>
                        <br />

                    </div>
                </form>
            </section>
        </div>
    </div>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f4a849a5d3d358c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>