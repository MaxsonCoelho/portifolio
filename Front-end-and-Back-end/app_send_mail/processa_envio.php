<?php

    require "./bibliotecas/PHPMailer/Exception.php";
    require "./bibliotecas/PHPMailer/OAuth.php";
    require "./bibliotecas/PHPMailer/PHPMailer.php";
    require "./bibliotecas/PHPMailer/POP3.php";
    require "./bibliotecas/PHPMailer/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

//print_r($_POST); 

    class Mensagem {
        private $para =null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        public function mensagemValida() {
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
                return false;
            }

            return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    //print_r($mensagem);

    if(!$mensagem->mensagemValida()) {
        echo 'Mensagem não é válida';
        die();
    } 


    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'cursowebsendemail@gmail.com';                 // SMTP username
        $mail->Password = 'websendemail';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('cursowebsendemail@gmail.com', 'Max'); //e-mail de quem vai enviar
        $mail->addAddress('maxsoncoelho@gmail.com', 'Max fazendo testes');     // e-mail do destinatario, Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('maxsonvendedor@gmail.com', 'Information'); //Para onde vem a resposta automaticamente
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Sou o Max fazendo um teste'; //assunto
        $mail->Body    = 'Uma aplicação de enviu de email que estou fazendo em php o.o'; //conteúdo, aqui funciona html
        $mail->AltBody = 'Aqui é o conteúdo do email';

        $mail->send();
        echo 'e-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo 'Não foi possível enviar esse e-mail! Por favor tente mais tarde.';
        echo 'Detalhes do erro: ' . $mail->ErrorInfo;
    }










?>