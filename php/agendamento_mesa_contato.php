<?php

$pessoas = strip_tags(trim($_POST['pessoas']));
$dia = strip_tags(trim($_POST['dia']));
$horas = strip_tags(trim($_POST['horas']));
$nome = strip_tags(trim($_POST['nome']));
$email = strip_tags(trim($_POST['email']));
$telefone = strip_tags(trim($_POST['telefone']));
$mensagem = strip_tags(trim($_POST['mensagem']));

date_default_timezone_set('America/Recife');
$data = date("d/m/Y");
$hora = date("H:i");


$erro = array();
if (empty($pessoas)) {
    $erro[] = "Informe o número de pessoas";
}

if (empty($dia)) {
    $erro[] = "Informe uma data";
}

if (empty($horas)) {
    $erro[] = "Informe um horário";
}

if (empty($nome)) {
    $erro[] = "Informe seu nome";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erro[] = "Informe um e-mail válido";
}
if (empty($telefone)) {
    $erro[] = "Informe seu telefone";
}

if (count($erro) < 1) :
    require_once 'phpmailer/PHPMailerAutoload.php';

    $Email = new PHPMailer();
    $Email->setLanguage('br');

//Define dados do servidor e tipo de conexão
    $host = 'server.clidenorjr.com.br';
    $username = 'enviar@clidenorjr.com.br';
    $senha = 'mail3030cli';
    $porta = 587;
    $secure = 'tls'; //tls/ssl
//Email e nome de quem vai receber o email
    $receber_email = 'contato@lexrestaurante.com.br';
    $receber_nome = 'Lex Restaurante';

    $from = $username;
    $fromName = $nome;

    $Email->isSMTP();
    $Email->Host = $host;
    $Email->SMTPAuth = true;
    $Email->Username = $username;
    $Email->Password = $senha;
    $Email->Port = $porta;
    $Email->SMTPSecure = $secure;

    $Email->From = $from;
    $Email->FromName = $fromName;
    $Email->addReplyTo($email, $nome);
    $Email->addAddress($receber_email, $receber_nome);

    $Email->isHTML(true);
    $Email->CharSet = 'utf-8';

    $Email->Subject = "Solicitação de reserva";

    $body = "
     <strong>Numero de pessoas: </strong>{$pessoas}<br />
     <strong>Data escolhida: </strong>{$dia} às {$horas} <br /> <br />
     <strong>Nome: </strong>{$nome}<br />
     <strong>E-Mail: </strong>{$email} <br />
     <strong>Telefone: </strong>{$telefone} <br />
     <strong>Mensagem: </strong>{$mensagem} <br />
     Enviado em: {$data} às {$hora} <br />
    ";

    $Email->msgHTML($body);
    //$Email->AddAttachment($arquivo['tmp_name'], $arquivo['name']);
// Envia o e-mail
    $enviado = $Email->Send();

// Limpa os destinatários e os anexos
    $Email->ClearAllRecipients();
    $Email->ClearAttachments();

// Exibe uma mensagem de resultado
    if ($enviado) {
        echo '<p class="resposta email-enviado">Solicitação de reserva realizada com sucesso, retornaremos em breve!</p>';
    } else {
        echo '<p class="resposta email-nao-enviado">Error: e-mail não enviado, por favor tente outra vez!</p>';
    }
endif;

// se ouver algum erro nas validações ele vai imprimir
if (count($erro) >= 1) {
    echo '<ul class="resposta email-nao-validado">';
    foreach ($erro as $err) {
        echo '<li>' . $err . '</li>';
    }
    echo '</ul>';
} 


