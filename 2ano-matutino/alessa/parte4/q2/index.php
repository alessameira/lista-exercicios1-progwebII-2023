<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <title>Sorteio de Pessoas</title>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Sorteio de Pessoas</h2>
			<form method="POST" action="resposta.php">
                    <label for="nomes">Digite o nome de várias pessoas, cada uma em uma linha:</label>
                    <br>
                    <textarea name="nomes" id="nomes" rows="10" cols="50"></textarea>
                    <br>
                    <input type="submit" value="Sortear">
                </form>
            </form>
        </div>
</body>
</html>


