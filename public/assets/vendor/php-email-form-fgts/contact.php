<?php
  //AUTOR: Daniel Pereira da Silva
 // Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
 require_once("class.phpmailer.php");
// Cria variáveis
 if ((isset($_POST['email']) && !empty(trim($_POST['email'])))) {

	$name = !empty($_POST['name']) ? $_POST['name'] : 'Não informado';
	$email = $_POST['email'];
	$telefone = !empty($_POST['telefone']) ? utf8_decode($_POST['telefone']) : 'Não informado';
	$data = date('d/m/Y H:i:s');

 // Inicia a classe PHPMailer
 $mail = new PHPMailer();
 // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
 $mail->IsSMTP(); // Define que a mensagem será SMTP
 $mail->Host = "smtp.lugecred.com.br"; // Seu endereço de host SMTP
 $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
 $mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
 $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
 $mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
 $mail->Username = 'site@lugecred.com.br'; // Conta de email existente e ativa em seu domínio
 $mail->Password = 'Lugecred2021*'; // Senha da sua conta de email
 // DADOS DO REMETENTE
 $mail->Sender = "site@lugecred.com.br"; // Conta de email existente e ativa em seu domínio
 $mail->From = "site@lugecred.com.br"; // Sua conta de email que será remetente da mensagem
 $mail->FromName = "Contato Site - FGTS"; // Nome da conta de email
 // DADOS DO DESTINATÁRIO
 $mail->AddAddress('atendimento@lugecred.com.br', 'Contato Site - FGTS'); // Define qual conta de email receberá a mensagem
 //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
 //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
 //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
 // Definição de HTML/codificação
 $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
 $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 // DEFINIÇÃO DA MENSAGEM
 $mail->Subject  = "Formulário FGTS"; 
 // Assunto da mensagem
 $mail->Body = "Nome: {$name}<br>
          Email: {$email}<br>
          Telefone: {$telefone}<br>
          Data/hora: {$data}";
 $mail->Body .= " Nome: ".$_POST['name'].""; 
 // Texto da mensagem
 $mail->Body .= " E-mail: ".$_POST['email']."";
  // Texto da mensagem
  $mail->Body .= " E-mail: ".$_POST['telefone']."";
  // Texto da mensagem
 $mail->Body = " Assunto: Tela FGTS"; 
 // Texto da mensagem
 $mail->Body .= " Mensagem: Captação de Lead da tela FGTS"; 
 // Texto da mensagem
 // ENVIO DO EMAIL
 $enviado = $mail->Send();
 // Limpa os destinatários e os anexos
 $mail->ClearAllRecipients();
 // Exibe uma mensagem de resultado do envio (sucesso/erro)
 if ($mail->send()) {
  echo 'Email enviado com sucesso.';
} else {
  echo 'Email não enviado.';
}
} else {
echo 'Não enviado: informar o email e a mensagem.';
}