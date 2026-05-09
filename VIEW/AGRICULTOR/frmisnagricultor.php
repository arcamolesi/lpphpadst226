<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Agricultor</title>
</head>
<body class="blue lighten-3 black-text">
    <div class="container brown lighten-4 col s12 ">
      <div>
          <h3 class="center col s10">Inserir Agricultor</h3>
      </div>


    <div class="row grey lighten-2">
        <form action="opinsagricultor.php" method="post" class="col s10">

            <div class="input-field col s8">
                    <input placeholder="Informar o nome do agricultor" id="nome" 
                                        name="nome" type="text" class="validate">
                    <label for="nomelabel">Nome: </label>
            </div>

            <div class="input-field col s8">
                    <input placeholder="Informar a cidade" id="cidade" 
                                        name="cidade" type="text" class="validate">
                    <label for="cidadelabel">Cidade: </label>
            </div>

            <div class="input-field col s8">
                    <input placeholder="Informar o bairro" id="bairro" 
                                        name="bairro" type="text" class="validate">
                    <label for="bairrolabel">Bairro: </label>
            </div>

            <div class="input-field col s8">
                    <input placeholder="Informar a idade" id="idade" 
                                        name="idade" type="text" class="validate">
                    <label for="idaddelabel">Idade: </label>
            </div>

            <div class="row center col s8">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                 <i class="material-icons right">Enviar</i>
            </button>

    

            </div>
        </form>
    </div>
</div>
</body>
</html>