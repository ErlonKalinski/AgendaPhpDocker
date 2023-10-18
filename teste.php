<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
         <a class="nav-item nav-link" href="teste.php">teste</a>
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
        <? $id = $_POST['$data'] ?>
        <td><div class="dropdown">
            <button class="btn btn-secondary btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">...</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <form method='POST' action="delete_row.php?id=<? echo $data['id']?>">
                    <button type='submit' class="dropdown-item">Apagar</button>
                </form>
                <form method='POST' action="id = <? echo $data['id'] ?>">
                    <button type='submit'class="dropdown-item" data-toggle="modal" data-target="#exampleModal" >Editar</button>
                </form>
            </div>
        <? } ?>
        </td>
        </tr>
                    
    </tbody>
    </table>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="row justify-content-center modal-body"> 
    <?

        $id = $_GET['data'];
        $query = "SELECT * FROM AgendaContato WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        while($data = mysqli_fetch_assoc($result)){
    ?>
<div class="row justify-content-center">
         <div class="col-md-2 text-center">
             <form method="post" action="save_edit.php?id=<? echo $data['id']?>">
                 <h1>Editar cadastro</h1>
                 <br>
                 <p class="text-info">Insira os dados abaixo:</p>
                
                 <div class="form-group">
                     <label for="inputName">Nome:</label>
                     <input type="text" name="nomex" value="<? echo $data['contato'];?>" autocomplete="off" class="input-group-text border-black " placeholder="Nome"/>
                 </div>
                
                 <div class="form-group">
                     <label for="inputNum">Numero de telefone:</label>
                     <input type="text" name ="numx" value="<? echo $data['numero'];?>" autocomplete ="off" class="input-group-text border-black dropup-center" placeholder="Numero de telefone"/>
                 </div>
                
                 <div class="form-group">
                     <label for="inputAdress">Endereço:</label>
                     <input type="text" name="enderecox" value="<? echo $data['endereco'];?>" autocomplete="off" class="input-group-text border-black" placeholder="Endereço"/>
                 </div>
                
                 <div class="form-group">
                     <label for="inputEmail">Email:</label>
                     <input type="text" name="emailx" value="<? echo $data['email'];?>" autocomplete="off" class="input-group-text border-black" placeholder="nome@Email"/>
                 </div>
                 <br>
                 <button type = "submit"  id= "confirma" name="button1" class="btn btn-outline-dark">Confirmar</button>
             </form>
<? } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
</body>
</html>

    
</body>
</html>