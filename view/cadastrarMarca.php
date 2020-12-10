<?php 

require "header.php";
?>

  <div class="row justify-content-center">
    <form action="../banco_dados/cadastroMarcaBd.php" method="POST">
      <div class="form-group">
      <label class="nomeMarca">Nome da Marca</label>
      <input type="text" class="form-control" id="nomeMarca" name="nomeMarca" required value="">
      </div>
      <div class="form-group">
      <button type="submit"class="btn btn-primary">Salvar</button> 
      </div>
    </form>
  </div>



  <?php
    if(isset($_GET['msg'])){?>

    <div class="toast" role="alert">

      O produto <?php echo $_GET['nomeMarca']; ?> foi cadastrado
    </div>
   <?php } ?>

<?php 

require "footer.php";

?>