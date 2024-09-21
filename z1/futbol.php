<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
    <title>Rozgrywki futbolowe</title>
</head>
<body>
    <div id="baner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </div>
    <div id="mecze">
        <?php
        $conn = mysqli_connect('localhost', 'root','', 'egzamin');
        $q = mysqli_query($conn,"SELECT zespol1, zespol2, wynik, data_rozgrywki from rozgrywka where zespol1 = 'EVG'");
        while($row=mysqli_fetch_array($q))
        {
            echo "<div class='informacje'><h3>".$row['zespol1']." - ".$row['zespol2']."</h3><h4>".$row['wynik'].'</h4>'."<p>W dniu: ".$row['data_rozgrywki'].'</p></div>';
        }
        ?>
    </div>
    <!-- bloki informacyjne ze skryptem -->
    <div id="main">
        <h2>Reprezentacja Polski</h2>
    </div>
    <div id="lewy">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="futbol.php" method="POST">
            <input type="number" name="liczba">
            <input type="submit" value="Sprawdz">
        </form>
        <?php
            $number = intval($_POST['liczba']);
            $q = mysqli_query($conn,"SELECT imie, nazwisko from zawodnik where pozycja_id = $number");
            
            if($_POST['liczba'] != null)
            {
                echo '<ul>';
                while($row=mysqli_fetch_array($q))
                {
                    echo "<li>";
                    echo $row['imie'].' '.$row['nazwisko'];
                    echo "</li>";
                }
                echo '</ul>';
            }
            mysqli_close($conn);
            
        ?>
    </div>
    <div id="prawy">
        <img src="zad1.png" alt="pilkarz">
        <p>Autor: 00000000000</p>
    </div>

</body>
</html>