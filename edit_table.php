<html>
<head> 
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
   <meta charset="utf-8"/>
   <script src="scriptindex.js"></script>
    <?
    include 'mysqli_connect.php';
    ?>
</head>
<body class="mx-2">
<?
    $id = $_GET['id'];
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
</body>
 </html>



