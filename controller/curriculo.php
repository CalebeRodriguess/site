<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];

$efc = $_POST["efc"];
$emc = $_POST["emc"];
$esc = $_POST["esc"];
$pgc = $_POST["pgc"];
$mc = $_POST["mc"];

$empresa = $_POST["empresa"];
$data_admissao = $_POST["data_admissao"];
$data_demissao = $_POST["data_demissao"];
$atividade_exercida = $_POST["atividade_exercida"];

$descricao = $_POST["descricao"];
$horas = $_POST["horas"];
$ano_conclusao = $_POST["ano_conclusao"];

$informacoes = $_POST["informacoes"];

echo "DADOS PESSOAIS";
echo $nome;
echo $telefone;
echo $email;
echo $endereco;
echo "ESCOLARIDADE";
echo $efc;
echo $emc;
echo $esc;
echo $pgc;
echo $mc;
echo "EXPERIENCIA PROFISSIONAL"
echo $empresa;
echo $data_amissao;
echo $data_demissao;
echo $atividade_exercida;
echo "CURSOS E IDIOMAS"
echo $descricao;
echo $horas;
echo $ano_conclusao;
echo "INFORMAÇOES ADICIONAIS"
echo $informacoes;



?>
