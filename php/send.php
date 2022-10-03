<?php
try {
//Variáveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

//Compo E-mail
$arquivo = "
  <html>
    <p><b>Nome: </b>$nome</p>
    <p><b>E-mail: </b>$email</p>
    <p><b>Mensagem: </b>$mensagem</p>
  </html>
";

//Emails para quem será enviado o formulário
$destino = "Naftalipinto1007@gmail.com";
$assunto = "Contato pelo Site";

//Este sempre deverá existir para garantir a exibição correta dos caracteres
$headers  = "MIME-Version: 1.0;\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>";

ini_set("smtp_server","smtp.gmail.com");
ini_set("smtp_port","587");
ini_set("smtp_ssl","tsl");

//Enviar
if(mail($destino,$arquivo, $headers)){
  header("location: /?send=1");
}else{header("location: /?send=0");}
} catch (Exception e) {
  throw new Exception(e.message())
}
  

?>