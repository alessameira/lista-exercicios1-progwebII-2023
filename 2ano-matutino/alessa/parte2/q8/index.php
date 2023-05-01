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
        <h1>Formulário IMC </h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Calculadora de IMC</h2>
			<form method="POST" action="resposta.php">
                <label>Informe seu peso em kg:
                    <input type="number" id="peso" name="peso" min="0" max="300" step=".01">
                </label>
                <label>Informe sua altura em metros:
                    <input type="number" id="altura" name="altura" min="0" max="100" step=".01">
                </label>
                <button name="enviar"> Enviar </button>
            </form>
        </div>
</body>
</html>
