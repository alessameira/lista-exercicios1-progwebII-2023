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
        <h1>Formulário fruta favorita</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Fruta favorita</h2>
			<form method="POST" action="resposta.php">
                <label for="frutas">Selecione suas frutas favoritas:</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="banana">
  <label for="frutas">Banana</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="maça">
  <label for="frutas">Maçã</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="laranja">
  <label for="frutas">Laranja</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="uva">
  <label for="frutas">Uva</label><br>
  <input type="checkbox" id="frutas" name="frutas[]" value="manga">
  <label for="frutas">Manga</label><br>
  <br>
       
                <button name="enviar"> Enviar </button>
            </form>
        </div>
</body>
</html>





