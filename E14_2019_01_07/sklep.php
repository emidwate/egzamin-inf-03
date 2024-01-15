<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styl1.css">
  <title>Hurtownia</title>
</head>

<body>
  <div class="logo">
    <img src="zad1.png" alt="hurtownia komputerowa">
  </div>
  <div class="lista">
    <ul>
      <li>Sprzęt</li>
      <ol>
        <li>Procesory</li>
        <li>Pamięci RAM</li>
        <li>Monitory</li>
        <li>Obudowy</li>
        <li>Karty graficzne</li>
        <li>Dyski twarde</li>
      </ol>
      <li>Oprogramowanie</li>
    </ul>
  </div>
  <div class="formularz">
    <h2>Hurtownia komputerowa</h2>
    <form action="sklep.php" method="post">
      <label for="numer"></label> <br>
      <p>Wybierz kategorię sprzętu</p>
      <input type="number" name="numer" id="numer">
      <input type="submit" value="SPRAWDŹ">
    </form>
  </div>
  <div class="glowny">
    <h1>Podzespoły we wskazanej kategorii</h1>
    <?php
      $conn = mysqli_connect('localhost', 'root', '','sklep');

      if(!isset($_POST["numer"]) || empty($_POST["numer"])) {
        echo "Wybierz poprawną kategorię sprzętu";
      } else {
        $numer = $_POST["numer"];
        $query = "SELECT nazwa, opis, cena from podzespoly where typy_id = $numer";
        
        $res = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_row($res)) {
          echo "<p>$row[0] $row[1] $row[2]</p> <br>";
        }
      }
      mysqli_close($conn);
    ?>
  </div>
  <footer class="stopka">
    <h3>Hurtowania działa od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>00</sup></h3>
    <a href="mailto:bok@hurtownia.pl">Napisz do nas</a>
    Partnerzy:
    <a href="http://intel.pl">Intel</a>
    <a href="http://amd.pl">AMD</a>
    <p>Strone wykonał: 111111111111</p>
  </footer>
</body>

</html>