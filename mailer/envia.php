<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$getnome = strtoupper($_POST["nome"]);
$msg = strtoupper($_POST["msg"]);
$assunto = strtoupper($_POST["assunto"]);
$email = $_POST["email"];


//==== ENVIO DE EMAIL PHPMAILER + RECAPTCHA =====
//==== USANDO VERSAO 6.2X. VERSAO ANTERIOR NAO FUNCIONA!

//Defino a Chave do meu site
$secret_key = '6LfIeuweAAAAAG0tcRhdLK1oJ4FPtczoHYrThSxH';

//Pego a validação do Captcha feita pelo usuário
$recaptcha_response = $_POST['g-recaptcha-response'];

// Verifico se foi feita a postagem do Captcha 
if(isset($recaptcha_response)){
		
	// Valido se a ação do usuário foi correta junto ao google
	$answer = 
		json_decode(
			file_get_contents(
				'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.
				'&response='.$_POST['g-recaptcha-response']
			)
		);

	// Se a ação do usuário foi correta executo o restante do meu formulário
	if($answer->success) {
		
//CONFIGURAÇÃO DO PHPMAILER UOLHOST DE UM OUTRO CLIENTE. 


/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/
$enviaFormularioParaNome = 'Secretaria';
$enviaFormularioParaEmail = 'mmriempreendimentos@gmail.com';
$caixaPostalServidorNome = 'Nova mensagem de: '.$getnome;
$caixaPostalServidorEmail = 'comercial@gremioantoniojoao.com.br';
$caixaPostalServidorSenha = '36422621';
/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/

/* abaixo as variaveis principais, que devem conter em seu formulario*/

$mensagemConcatenada = 'Email enviado pelo formulário do Site'.'<br/>';
$mensagemConcatenada .= '-------------------------------<br/><br/>';
$mensagemConcatenada .= '<b>Nome: </b>'.$getnome.'<br/>';
$mensagemConcatenada .= '<b>Assunto: </b>'.$assunto.'<br/>';
$mensagemConcatenada .= '<b>E-mail: </b>'.$email.'<br/>';
$mensagemConcatenada .= '-------------------------------<br/><br/>';
$mensagemConcatenada .= '<b>Mensagem: </b>"'.$msg.'"<br/>';

/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth  = true;
$mail->Charset   = 'utf8_decode()';
$mail->Host  = 'smtp.'.substr(strstr($caixaPostalServidorEmail, '@'), 1);
$mail->Port  = 587;
$mail->Username  = $caixaPostalServidorEmail;
$mail->Password  = $caixaPostalServidorSenha;
$mail->From  = $caixaPostalServidorEmail;
$mail->FromName  = utf8_decode($caixaPostalServidorNome);
$mail->IsHTML(true);
$mail->Subject  = utf8_decode($assunto);
$mail->Body  = utf8_decode($mensagemConcatenada);


$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));


if(!$mail->Send()){
    $mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);
}else{
    $mensagemRetorno = 'Formulário enviado com sucesso! Recarregando a página.';
	echo $mensagemRetorno;
  	header( "refresh:3; url=http://localhost:8080/mmrimoveis/index.html" ); 
	die();

}

	}

	// Caso o Captcha não tenha sido validado 
	//retorno uma mensagem de erro. 
	else {
		echo 'Valide o captcha primeiro';
	}
}
$_SESSION=[];
?>