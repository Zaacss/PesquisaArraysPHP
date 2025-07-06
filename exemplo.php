<?php
$tipo = $_POST["tipo"] ?? "";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Formulário</title>
    <link rel="stylesheet" href="css/style_exemplo.css">
</head>
<body>
    <header>
    <h1><a href="index.html">Arrays em PHP</a></h1>
    <h2>Resultado</h2>

    <nav>
        <a href="exemplo.html">Voltar para o Exemplo</a>
        <a href="pesquisa.html">Ir para a Pesquisa</a>
        <a href="sobre.html">Sobre os Desenvolvedores</a>
    </nav>
    </header>
    <main class="conteudo">

    <?php
    if ($tipo === "indexado") {
        $frutas = $_POST["frutas"];
        echo "<h2>Array Indexado - Frutas</h2>";
        echo "<ul>";
        foreach ($frutas as $fruta) {
            echo "<li>" . htmlspecialchars($fruta) . "</li>";
        }
        echo "</ul>";
    }
    elseif ($tipo === "associativo") {
        $produto = $_POST["produto"];
        echo "<h2>Array Associativo - Produto</h2>";
        echo "<ul>";
        foreach ($produto as $chave => $valor) {
            echo "<li><strong>" . htmlspecialchars($chave) . ":</strong> " . htmlspecialchars($valor) . "</li>";
        }
        echo "</ul>";
    }
    elseif ($tipo === "multidimensional") {
        $alunos = $_POST["alunos"];
        echo "<h2>Array Multidimensional - Alunos</h2>";
        foreach ($alunos as $index => $aluno) {
            echo "<h3>Aluno " . ($index + 1) . "</h3>";
            echo "<ul>";
            foreach ($aluno as $chave => $valor) {
                echo "<li><strong>" . htmlspecialchars($chave) . ":</strong> " . htmlspecialchars($valor) . "</li>";
            }
            echo "</ul>";
        }
    }
    else {
        echo "<p>Nenhum dado recebido.</p>";
    }
    ?>

    </main>
    <footer>
        <p>&copy; 2025 Nicolas e Isaac - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
