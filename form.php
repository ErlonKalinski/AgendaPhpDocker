<html>
<head> 
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
   <meta charset="utf-8"/>
   <script src="scriptindex.js"></script>

<title>Agenda de Contatos</title>
</head>
<body class="mx-2">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">Agenda de contatos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
         <a class="nav-item nav-link" href="index.php">Agenda</a>
        <a class="nav-item nav-link active" href="form.php">Formulario</a>
        </div>
  </div>
</nav>
    <br>
    <div>
    <div class="row d-flex" >
        <div class=" col-sm-4 ">
            <form method="post" action="save_on_table.php" >
                <h1 class="text-center">Formulario de cadastro</h1>
                <br>
                <p class="text-info">Insira os dados abaixo:</p>
                
                <div class="form-group">
                    <label for="inputName">Nome:</label>
                    <input type="text" name="nomex" autocomplete="off" class="input-group-text border-black" placeholder="Nome"/>
                </div>
                
                <div class="form-group">
                    <label for="inputNum">Numero de telefone:</label>
                    <input type="text" name ="numx" autocomplete ="off" class="input-group-text border-black dropup-center" placeholder="Numero de telefone"/>
                </div>
                
                <div class="form-group">
                    <label for="inputAdress">Endereço:</label>
                    <input type="text" name="enderecox" autocomplete="off" class="input-group-text border-black" placeholder="Endereço"/>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail">Email:</label>
                    <input type="text" name="emailx" autocomplete="off" class="input-group-text border-black" placeholder="nome@email.com"/>
                </div>
                
                <br>
                <button type = "submit"  id= "confirma" name="button1" class="btn btn-outline-dark">Confirmar</button>
            </form>
            <br>
        </div>    
    </div>