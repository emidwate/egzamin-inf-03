<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styl5.css">
  <title>Mój kalendarz</title>
</head>

<body>
  <div class="baner1">
    <img src="logo1.png" alt="Mój kalendarz">
  </div>
  <div class="baner2">
    <h1>KALENDARZ</h1>
    <?php 
     $conn = mysqli_connect('localhost', 'root', '', 'egzamin5');
     $query = 'SELECT miesiac, rok FROM zadania WHERE dataZadania = "2020-07-01"';
     $res = mysqli_query($conn, $query);
     while($row = mysqli_fetch_row($res)) {
       echo "
       <h3>miesiąc: $row[0], rok:$row[1] </h3>
       ";
      }
      mysqli_close($conn);
      ?>
  </div>
  <div class="glowny">
    <?php 
    $conn = mysqli_connect('localhost', 'root', '', 'egzamin5');
    $query = 'SELECT dataZadania, wpis FROM zadania WHERE miesiac = "lipiec"';
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_row($res)) {
      echo "
      <div class='blok'>
      <h5>$row[0]</h5>
      <p>$row[1]</p>
      </div>
      ";
    }
    mysqli_close($conn);
    ?>
  </div>
  <footer class="stopka">
    <form action="kalendarz.php" method="post">
      <label for="wpis">dodaj wpis:</label>
      <input type="text" name="wpis" id="wpis">
      <input type="submit" value="DODAJ">
    </form>
    <p>Stronę wykonał: 111111111111</p>
    <?php
      $conn = mysqli_connect('localhost', 'root', '', 'egzamin5');
      if(isset($_POST["wpis"])) {
        $wpis = $_POST["wpis"];
        $query = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-13'";
        $res = mysqli_query($conn, $query);
      }
      mysqli_close($conn);
    ?>
  </footer>

</body>

</html>