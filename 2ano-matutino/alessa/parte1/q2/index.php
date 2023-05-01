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
        <h1>Formulário numérico </h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Informe seu valore numerico</h2>
			<form method="POST" action="resposta.php">
                <label>Numero
                    <input type="number" id="num" name="num" required>
                </label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
</body>
</html>
