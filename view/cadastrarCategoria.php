<?php 

require "header.php";

?>
<link rel="stylesheet" href="../css/button.css">

  <div class="row justify-content-center">
    <form action="../banco_dados/cadastroCategoriaBd.php" method="POST">
      <div class="form-group">
      <label for="nomeCategoria">Nome da Categoria</label>
      <input type="text" class="form-control" id="nomeCategoria" name="nomeCategoria" required value="">
      </div>
      <div class="form-group">
      <button type="submit"class="btn btn-primary">Salvar</button> 
      </div>
    </form>
  </div>

  <?php
    if(isset($_GET['msg'])){?>

    <div class="alert alert-success" role="alert">

      A categoria <?php echo $_GET['nomeCategoria']; ?> foi cadastrada
    </div>
   <?php } ?>

<?php 

require "footer.php";

?>