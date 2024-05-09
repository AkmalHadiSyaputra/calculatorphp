<!-- 
  Nama  : Akmal Hadi Syaputra
  NIM   : 2200457
  Kelas : RPL-4B
 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kalkulator Sederhana Akmal Hadi S (RPL-4B)</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST['nomor'])) {
              $result = $_POST['result'] . $_POST['nomor'];
              $_POST['result'] = $result;
          } 
          else if (isset($_POST['bagi'])) {
            $result = $_POST['result'] . $_POST['bagi'];
            $_POST['result'] = $result;
          } else if (isset($_POST['kali'])) {
            $result = $_POST['result'] . $_POST['kali'];
            $_POST['result'] = $result;
          } else if (isset($_POST['kurang'])) {
            $result = $_POST['result'] . $_POST['kurang'];
            $_POST['result'] = $result;
          } else if (isset($_POST['tambah'])) {
            $result = $_POST['result'] . $_POST['tambah'];
            $_POST['result'] = $result;
          } 
          elseif (isset($_POST['operator'])) {
              $result = $_POST['result'] . $_POST['operator'];
              $_POST['result'] = $result;
          } elseif (isset($_POST['clear'])) {
              $_POST['result'] = '';
          } elseif (isset($_POST['delete'])) {
              $_POST['result'] = substr($_POST['result'], 0, -1);
          } elseif (isset($_POST['samadengan'])) {
              $result = eval('return ' . $_POST['result'] . ';');
              $_POST['result'] = $result;
          }
    }
    ?>
    
    <div class="container">
      <form method="post" action="">
        <input type="text" class="display" name="result" value="<?php echo isset($_POST['result']) ? $_POST['result'] : ''; ?>" />

        <div class="buttons">
          <button class="operator" name="clear" value="AC">AC</button>
          <button class="operator" name="delete" value="DEL">DEL</button>
          <button class="operator" name="bagi" value="/">/</button>
          <button class="operator" name="tambah" value="+">+</button>
          <button class="operator" name="kurang" value="-">-</button>
          <button class="operator" name="kali" value="*">*</button>
          <button class="operator" name="samadengan" value="=">=</button>

          <button name="nomor" value="1">1</button>
          <button name="nomor" value="2">2</button>
          <button name="nomor" value="3">3</button>
          
          <button name="nomor" value="4">4</button>
          <button name="nomor" value="5">5</button>
          <button name="nomor" value="6">6</button>
          
          <button name="nomor" value="7">7</button>
          <button name="nomor" value="8">8</button>
          <button name="nomor" value="9">9</button>
        
          <button name="nomor" value="0">0</button>
          <button name="nomor" value="00">00</button>
          
        </div>
      </form>
    </div>

  </body>
</html>
