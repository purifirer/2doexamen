<?php
include "header.php";
include_once "clases/FlashMessage.php";
get_header();
$flashMessage = new FlashMessage();
 ?>
<div>
  <form action="clases/validaciones.php" method="post">
    <div class="abuelo">
      <div class="padre">
        <div class="hijo">
          <p class="title">
            Agregar Nueva Publicacion
          </p>
        </div>
        <div class="hijo">
          <input type="text" class="titulo" name="titulo" value="<?= $flashMessage->getInput('title'); ?>" placeholder="TITULO." required>
        </div>
        <div class="hijo">
          <textarea name="contenido" <?= $flashMessage->getInput('content'); ?> placeholder="PUBLICACION" rows="12" cols="50" style="margin-top:2%; width: 100%;
         padding: 8px; font-size: 20px;"required font-family;"Veltica"></textarea>
          <div class="btn-div">
            <input type="submit" class="btn" name="btn" value=" Publicar">
          </div>
        </div>
      </div>
    </div>

  </form>
  <?php if ($flashMessage->hasErrors() || $flashMessage->hasMessage()): ?>
<div class="alert danger">
  <?php if ($flashMessage->hasMessage()): ?>
  <p><?= $flashMessage->getMessage() ?></p>
  <?php endif; ?>

  <?php if ($flashMessage->hasErrors()): ?>
    <ul>
      <?php foreach ($flashMessage->all() as $error): ?>
        <li><?= $error[0] ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>
<?php endif; ?>

<?php if ($flashMessage->hasSuccessMessage()): ?>
<div class="alert success">
  <?= $flashMessage->getSuccessMessage() ?>
</div>
<?php endif; ?>
</div>
 <?php

  ?>
