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
        <h1>Formulário de linhas</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Padrão de asterisco</h2>
			<form method="POST" action="resposta.php">

                <label>Numero de linhas:
                    <input type="number" id="linhas" name="linhas" required>
                </label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
</body>
</html>
