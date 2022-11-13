<?
$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$destino = "k3m.sst@gmail.com";
$assunto = "Novo Recebido Formulario do Site";
$msg = "Nome: " . $nome \n "Empresa: " . $empresa \n "Email: " . $email \n "Telefone: " . $telefone;

$send = mail($destino, $assunto, $msg);

if($sen){
echo "<script>Alert('Email Enviado com Sucesso!')</script>";
echo " <meta http-equiv='refresh' content='10;URL=../index.html'>";
} else {
echo "<script>Alert('Error ao Enviar Email')</script>";
echo " <meta http-equiv='refresh' content='10;URL=../index.html'>";
}

?>