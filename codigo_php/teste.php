
<?php
$nome = "Willian";
$idade = "21";
$altura = "1.75";
echo "Olá, $nome!"
?>

<?php
define("PI", 3.14159);
const VERSAO = "1.0";
echo PI;
?>

<?php
$a = 10;
$b = 3;
echo $a + $b;
echo $a . " reais";
echo ($a ===10);
?> 

<?php
$nota = 10;
if ($nota >= 7) {
    echo "aprovado";
} elseif ($nota >= 5) {
    echo "recuperaçao";
} else {
    "reprovado";
}
?>

<?php
switch ($nota){
    case 10:
        echo "Excelente";
        break;
    case 7:
        echo "bom";
        break;
    default:
    echo "outros";
}
?>

<?php
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}
?>

<?php
for ($i = 0; $i < 5; $i++) {
    echo $i;   
}
?>

<?php 
$frutas = ["maça, banana, melancia"];
foreach ($frutas as $frutas) {
    echo $frutas;
}
?>

<?php
function saudacao ($nome, $titulo = "Sr.") {
 return "Ola, $titulo  $nome!";
} 
    echo saudacao ("Willian");
    echo saudacao("Ana", "Dra.");
?>
    <?php
    $frutas = ["maca", "banana", "goiaba"];
    $frutas[] = "uva";

    echo $frutas[0];
    echo count ($frutas);

    array_push($frutas, "manga");
    array_pop($frutas);
    array_shift($frutas);
    sort($frutas);
    ?>   

<?php
$pessoa = [
    "nome" => "Willian",
    "idade" => 21,
    "cidade" => "Santa Catarina"
    ];

    echo $pessoa["nome"];
    $pessoa["email"] = "willian@gmail.com";
    foreach ($pessoa as $chave => $valor) {
        echo "$chave: $valor\n";
    }
?>

<?php
$alunos = [
    ["nome" => "Ana","nota"=> "9,5"],
    ["nome"=> "Joao","nota"=> "7.0"],
];

foreach ($alunos as $aluno) {
    echo $aluno["nome"] . ": " . $aluno["nota"] . "\n";
}
?>


