<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - Aplikasi E-Library</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <script src="<?php echo base_url() . 'assets/js/jquery.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
</head>

<body>
    <div class="col-md-4 col-md-offset-4" style="margin-top:50px">
        <center>
            <h2>PERPUSTAKAAN<br>UNIVERSITAS<br> HAFLAN ABDUR RAJAK<br>THE PUCIMAY</h2>
            <h3>LOGIN</h3>
        </center>
        <br>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger alert-danger'>";
                echo $this->session->flashdata('alert');
                echo "</div>";
            } elseif ($_GET['pesan'] == 'logout') {
                if ($this->session->flashdata()) {
                    echo "<div class='alert alert-danger alert-success'>";
                    echo $this->session->flashdata('Anda telah logout');
                    echo "</div>";
                }
            } elseif ($_GET['pesan'] == 'Belum Login') {
                if ($this->session->flashdata()) {
                    echo "<div class='alert alert-danger alert-primary'>";
                    echo $this->session->flashdata('alert');
                    echo "</div>";
                }
            }
        } else {
            if ($this->session->flashdata()) {
                echo "<div class='alert alert-danger alert-message'>";
                echo $this->session->flashdata('alert');
                echo "</div>";
            }
        }
        ?>
        <br>
        <div class="panel panel-default">
            <div class="panel-body">
                <br><br>
                <form action="<?php echo base_url() . 'welcome/login' ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="admin_username" placeholder="username" class="form-control" id=""><?php echo form_error('username'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="admin_password" placeholder="password" class="form-control" id=""><?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="login" class="btn btn-primary">
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>
    <script src="" type="text/javascript">
        $('.alert-message').alert().delay(3000).slideUp('slow');
    </script>
</body>

</html>









