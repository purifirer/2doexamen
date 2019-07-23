<?php
$connection= new mysqli('localhost','root','', 'nan');
include "header.php";
get_header();
 ?>
<div class="Generado">
  <div class="GeneradoH">
    <p class="title">
      Mostrando Publicaciones Recientes...
    </p>
</div>
<?php
 foreach($connection->query('SELECT * from posts order by id desc') as $row){
    ?>
    <div class="back">
      <div class="title_date">
        <p class="titulo_Index">
          <br />
          <?php echo $row['title'] ?>
          <p class="date">
              <?php echo $row['date'] ?>
          </p>
        </p>
      </div>
      <div class="contenido">
        <div class="contenidoh">
          <p>
            <?php echo $row['content'] ?>
          </p>
        </div>
      </div>
      <div class="borrar">
        <input type="submit" class="btn" name="borrar" value="Borrar Publicacion">

      </div>
      <br>
      <div class="editar">
        <input type="submit" class="btn" name="editar" value="Editar Publicacion">
      </div>
    </div>

 <?php } ?>
<?php
 ?>


</div>
