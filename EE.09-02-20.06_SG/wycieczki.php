<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styl3.css">
  <title>Wycieczki i urlopy</title>
</head>

<body>
  <div class="baner">
    <h1>BIURO PODRÓŻY</h1>
  </div>
  <div class="lewy">
    <h2>KONTAKT</h2>
    <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
    <p>telefon: 555666777</p>
  </div>
  <div class="srodkowy">
    <h2>GALERIA</h2>
    <div class="siatka-zdjec">
      <?php 
        $conn = mysqli_connect('localhost', 'root', '','egzamin3');
        $query = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC";

        $res = mysqli_query($conn, $query);

        while($row = mysqli_fetch_row($res)) {
          echo "<img src='$row[0]' alt='$row[1]'>";
        }
      ?>
    </div>
  </div>
  <div class="prawy">
    <h2>PROMOCJE</h2>
    <table>
      <tr>
        <td>Jesień</td>
        <td>Grupa 4+</td>
        <td>Grupa 10+</td>
      </tr>
      <tr>
        <td>5%</td>
        <td>10%</td>
        <td>15%</td>
      </tr>
    </table>
  </div>
  <div class="dane">
    <h2>LISTA WYCIECZEK</h2>
    <?php 
      $query = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1";
      $res = mysqli_query($conn, $query);
      while($row = mysqli_fetch_row($res)) {
        echo "$row[0]. $row[1], $row[2], cena: $row[3] <br>";
      }
      mysqli_close($conn);
    ?>
  </div>
  <footer class="stopka">
    <p>Stronę wykonał: 11111111111</p>
  </footer>
</body>

</html>