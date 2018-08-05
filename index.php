<!doctype html>
<html lang="en">
  <head>
    <title>UAS SEMESTER 6 HANI MAULIZA 6P45</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/hani.css">

  </head>
  <body>
   

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-center" href="#">APLIKASI KIRIM EMAIL INSTAN GRATIS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

  <div class="container-fluid hani-container">
    <div class="card hani-card" style="width: 50rem;">
      <h4 class="card-header">Form Kirim Email<br><small>Kami tidak akan menyimpan informasi apapun dari form yang anda isi ! :) </small><br><small>E-mail Open : flolilky@gmail.com</small></h4><br>
      <div class="card-body">

        <!-- FORM EMAIL -->
        <form action="index.php" method="post">
          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" id="from_name" name="from_name" placeholder="Nama Pengirim">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" id="from_email" name="from_email" placeholder="Alamat E-mail Pengirim">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <input type="password" class="form-control" name="from_password" id="from_password" placeholder="Password E-mail Pengirim">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" id="to_email" name="to_email" placeholder="Alamat E-mail Penerima">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" id="subject_email" name="subject_email" placeholder="Subject">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <textarea class="form-control" rows="4" cols="50" placeholder="Tulis Pesan..." name="message"></textarea>
            </div>
          </div>


        <button type="submit" class="btn btn-primary" value="send" name="send">Kirim Email</button>
        </form>
        <!-- // FORM EMAIL -->
      </div>
    </div>

  </div>
          <?php
        
              require 'phpmailer/PHPMailerAutoload.php';
              if(isset($_POST['send']))
                  {
                    $from_email = $_POST['from_email'];                    
                    $from_password = $_POST['from_password'];
                    $to_email = $_POST['to_email'];
                    $from_name = $_POST['from_name'];
                    $message = $_POST['message'];
                    $subject_email = $_POST['subject_email'];

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $from_email;

                    $mail->Password = $from_password;

                    $mail->setFrom($from_email, $from_name);

                    $mail->addReplyTo($from_email, $from_name);

                    $mail->addAddress($to_email);

                    $mail->Subject = $subject_email;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Terjadi Kesalahan: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Email berhasil terkirim");</script>';
                    }
               }
        ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
  </body>
</html>