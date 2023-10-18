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
         <a class="nav-item nav-link active" href="index.php">Agenda</a>
         <a class="nav-item nav-link" href="form.php">Formulario</a>
         <!-- <a class="nav-item nav-link" href="teste.php">teste</a> -->
        </div>
  </div>
</nav>
<br><br>
<div class="justify-content-center">
    <h1 class="text-center">Agenda de Contatos</h1>
    <p class="text-center">Agenda feita com o objetivo de salvar, editar e excluir contatos</p>
    <form method="POST" action="search_table.php">
        <div class="input-group mb-3">
            <input type="text" name="busca" class="input-group-text" placeholder="Buscar...">
            <div class="input-group-append">
                <button type='submit' class="btn btn-outline-dark input-group-append">OK</button>
            </div>  
    </form>
</div>
<div class="justify-content-center">

    <table class="table table-bordered ">
    <tbody class="text-center align-middle">
    <tr class="text-decoration-underline">                
        <th>id</th>
        <th>Contatos</th>
        <th>Numeros</th>
        <th>Endereço</th>
        <th>Email</th>
        <th>Ações</th>
                
    </tr>
    <? 
    include 'load_table.php';
    while($data = mysqli_fetch_assoc($result)){
    ?>
        <tr>
        <td><? echo $data['id'];?> </td>
        <td><? echo $data['contato'];  ?></td>
        <td><? echo $data['numero']; ?></td>
        <td><? echo $data['endereco']; ?></td>
        <td><? echo $data['email'];?></td>
        <td><div class="dropdown">
            <button class="btn btn-secondary btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">...</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <form method='POST' action="delete_row.php?id=<? echo $data['id']?>">
                    <button type='submit' class="dropdown-item">Apagar</button>
                </form>
                <form method='POST' action="edit_table.php?id=<? echo $data['id']?>">
                    <button type='submit'class="dropdown-item" >Editar</button>
                </form>
            </div>
        <? } ?>
        </td>
        </tr>
                    
    </tbody>
    </table>

<div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
</body>
</html>

