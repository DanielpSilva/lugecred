<?php
  //AUTOR: Daniel Pereira da Silva
 // Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
 require_once("class.phpmailer.php");
 // Inicia a classe PHPMailer
 $mail = new PHPMailer();
 // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
 $mail->IsSMTP(); // Define que a mensagem será SMTP
 $mail->Host = "mail.lugecred.com.br"; // Seu endereço de host SMTP
 $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
 $mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
 $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
 $mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
 $mail->Username = 'contato.site@lugecred.com.br'; // Conta de email existente e ativa em seu domínio
 $mail->Password = 'Caragua2021*'; // Senha da sua conta de email
 // DADOS DO REMETENTE
 $mail->Sender = "contato.site@lugecred.com.br"; // Conta de email existente e ativa em seu domínio
 $mail->From = "contato.site@lugecred.com.br"; // Sua conta de email que será remetente da mensagem
 $mail->FromName = "Contato Site"; // Nome da conta de email
 // DADOS DO DESTINATÁRIO
 $mail->AddAddress('atendimento@lugecred.com.br', 'Contato - Site'); // Define qual conta de email receberá a mensagem
 //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
 //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
 //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
 // Definição de HTML/codificação
 $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
 $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 // DEFINIÇÃO DA MENSAGEM
 $mail->Subject  = "Formulário de Contato Site"; // Assunto da mensagem
 $mail->Body .= " Nome: ".$_POST['name']."
"; // Texto da mensagem
 $mail->Body .= " E-mail: ".$_POST['email']." 
"; // Texto da mensagem
 $mail->Body .= " Assunto: ".$_POST['subject']."
"; // Texto da mensagem
 $mail->Body .= " Mensagem: ".nl2br($_POST['message'])."
"; // Texto da mensagem
 // ENVIO DO EMAIL
 $enviado = $mail->Send();
 // Limpa os destinatários e os anexos
 $mail->ClearAllRecipients();
 // Exibe uma mensagem de resultado do envio (sucesso/erro)
