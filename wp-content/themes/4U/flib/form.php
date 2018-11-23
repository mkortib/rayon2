 
<?php
 include($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
 $mymail = get_field('field_5a570f34869f5', 18);
    
 
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

// Принимаем данные с формы

$firstname=$_POST['firstname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$form_name=$_POST['form_name'];
$form_name1=$_POST['form_name1']; 


// ----------------------------конфигурация-------------------------- //
//$mail->SMTPDebug = 3;
 /*                         // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
    */
 
 
$mail->setFrom('info@marinara.ru', 'Заявка с сайта');

$mail->addAddress('anton.oliynik@gmail.com'); 

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заказ с сайта';

//---------------------------------------------------------------------- //


// ----------------------------РџРёСЃСЊРјРѕ РєР»РёРµРЅС‚Сѓ-------------------------- //
$mail->Body = "Добрый день, $name!\n
Ваша заявка принята, наши менеджеры свяжутся с вами в ближайшее время.
";

$date=date("d.m.y"); // число.месяц.год
$time=date("H:i"); // часы:минуты:секунды


 
 
$msg .="<p>Имя: $firstname </p>\r\n";
$msg .="<p>Имя: $email </p>\r\n";
$msg .="<p>Телефон: $phone </p>\r\n";
$msg .="<p>Сообщение: $message </p>\r\n";
$msg .="<p></p>\r\n";
$msg .="<p>Страница сайта: $form_name1  </p>\r\n";

$mail->Body    = $msg;



/* Отпарвляем письмо */
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
};







?>