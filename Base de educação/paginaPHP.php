<?php
$tituloPagina = "Template de Exemplos PHP";
$descricao = "Modelo base";

$exemplos = [
    [
        "categoria" => "Básico",
        "titulo" => "Exemplo 1: echo",
        "descricao" => "Demonstra como imprimir texto na tela com PHP.",
        "codigo" => '<?php\necho "Olá, mundo!";\n?>',
        "saida" => "Olá, mundo!"
    ],
    
];
?>
<?php
$tituloPagina = "Template de Exemplos PHP";
$descricao = "Modelo base";

$exemplos = [
    [
        "categoria" => "Básico",
        "titulo" => "Exemplo 2: echo",
        "descricao" => "Demonstra como imprimir texto na tela com PHP.",
        "codigo" => '<?php\necho "Olá, mundo!";\n?>',
        "saida" => "Olá, mundo!"
    ],
    
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 30px;
            color: #222;
        }
        .container {
            max-width: 1000px;
            margin: auto;
        }
        .topo {
            background: #ffffff;
            padding: 24px;
            border-radius: 16px;
            margin-bottom: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.08);
        }
        .card {
            background: #fff;
            border-radius: 14px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        }
        .tag {
            display: inline-block;
            background: #e7f4f4;
            color: #01696f;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        pre {
            background: #1f2430;
            color: #f8f8f2;
            padding: 16px;
            border-radius: 10px;
            overflow-x: auto;
        }
        .saida {
            margin-top: 14px;
            padding: 12px;
            background: #f0f9f9;
            border-left: 4px solid #01696f;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="topo">
            <h1><?php echo $tituloPagina; ?></h1>
            <p><?php echo $descricao; ?></p>
        </section>

        <?php foreach ($exemplos as $exemplo): ?>
            <article class="card">
                <span class="tag"><?php echo $exemplo['categoria']; ?></span>
                <h2><?php echo $exemplo['titulo']; ?></h2>
                <p><?php echo $exemplo['descricao']; ?></p>

                <pre><code><?php echo htmlspecialchars($exemplo['codigo']); ?></code></pre>

                <div class="saida">
                    <strong>Saída esperada:</strong>
                    <p><?php echo $exemplo['saida']; ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</body>
</html>