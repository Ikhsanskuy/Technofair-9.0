<?php
include "../../../koneksi.php";
 


// use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "../../config/SEND-EMAIL/vendor/phpmailer/phpmailer/src/PHPMailer.php"; 
require "../../config/SEND-EMAIL/vendor/phpmailer/phpmailer/src/SMTP.php"; 
require "../../config/SEND-EMAIL/vendor/phpmailer/phpmailer/src/Exception.php";
require "../../config/SEND-EMAIL/vendor/autoload.php";

$nama = mysqli_escape_string($conn, $_POST['nama']);
$email = mysqli_escape_string($conn, $_POST['email']);
$id = mysqli_real_escape_string($conn, $_POST['id']);

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                   

$mail->Host = "technofair.id";
$mail->SMTPAuth = true;                            
$mail->Username = "admin@technofair.id";                 
$mail->Password = "tf9lancar";                           
$mail->SMTPSecure = "ssl";                           
$mail->Port = 465;                                   
$mail->From = "admin@technofair.id";
$mail->FromName = "FIKTI E-SPORTS EXPERIENCE 2021";
$mail->addAddress($email, $nama);
$mail->isHTML(true);

$mail->Subject = "Konfirmasi Team Mobile Legends ''Be a Professional Gamers'' ";
$mail->Body = "Terima kasih telah mendaftar di Mobile Legends Competitions ''Be a Professional Gamers'' yang diselenggarakan oleh FIKTI E-Sports Experience 2021. 
                <br>

                Untuk informasi lebih lanjut dapat menghubungi contact person kami :
                <br>
                <br>
                Tsamara
                <table>
                    <tr>
                        <td>WhatsApp</td>
                        <td>:</td>
                        <td>081298650583</td>
                    </tr>
                    <tr>
                        <td>LINE</td>
                        <td>:</td>
                        <td>tsmrhsnfdyh</td>
                    </tr>
                </table>
                
                <br>
                Media sosial kami :
                <br>
                <table>
                    <tr>
                        <td>Line</td>
                        <td>:</td>
                        <td>@865ikgvt</td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>:</td>
                        <td>@fosc_ug</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>:</td>
                        <td>fosc.bemfikti@gmail.com</td>
                    </tr>
                </table>

                <br>

                Website Kami :
                <br>
                https://fex2021.com/
                <br>
                <br>

                FEX 2021
                <br>
                Presented by FOSC
                <br>
                <br>
                
                Bergerak Maju,
                <br>
                Semangat Baru.
                <br>
                <br>
                
                Departemen Olahraga
                <br>
                BEM FIKTI UG 2020/2021
                <br>
                fikti.bem.gunadarma.ac.id";

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{

    $queries = mysqli_query($conn, "UPDATE `tambah` SET stat_tf = 1 WHERE id = '$id' ");

    echo "<script>alert('Account Has Been Approved'); 
    location.href='../../pages/infographic.php';</script>";
}