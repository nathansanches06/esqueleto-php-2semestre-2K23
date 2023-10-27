<?php
include "header.php";
include "dados.php";

   $id = $_GET["id"];//esse id vem da URL produto.php?id=2
   //print_r($id);exit;
   
?>

<main>
   
    <div class="grid">
       <img src="imagens/<?=$produtos[$id]["imagem"]?>" alt="<?=$produtos[$id]["nome"]?>">
    </div>
    <div class="coluna">
    <h2><?=$produtos[$id]["nome"]?></h2>
    <p> R$ <?=$produtos[$id]["valor"]?></p>
    </div>
   
</main>

<?php 
  include "footer.php";
?>

