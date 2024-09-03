<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weterynarz</title>
    <link rel="stylesheet" href="weterynarz.css">
</head>
<body>
    <div id="baner">
        <h1>GABINET WETERYNARYJNY</h1>
    </div>
    <div id="lewy">
        <h2>PSY</h2>
        <?php
        $conn = mysqli_connect('localhost', 'root','', 'weterynarium');
        $q = mysqli_query($conn,"SELECT id, imie,wlasciciel from zwierzeta where rodzaj = 1");
        while($row=mysqli_fetch_array($q))
        {
            echo $row['id'].' '.$row['imie'].' '.$row['wlasciciel']."<br>";
        }

        ?>
        <h2>KOTY</h2>
        <?php
        $conn = mysqli_connect('localhost', 'root','', 'weterynarium');
        $q = mysqli_query($conn,"SELECT id, imie,wlasciciel from zwierzeta where rodzaj = 2");
        while($row=mysqli_fetch_array($q))
        {
            echo $row['id'].' '.$row['imie'].' '.$row['wlasciciel']."<br>";
        }
        ?>
    </div>
    <div id="srodkowy">
        <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
        <?php
        $q = mysqli_query($conn,"SELECT imie,telefon,szczepienie,opis FROM zwierzeta");
        while( $row=mysqli_fetch_array($q))
        {
            echo "Pacjent: ".$row['imie'].'<br>'."Telefon wlasciciela: ".$row['telefon'].", ostatnie szczepienie: ".$row['szczepienie'].", informacje: ".$row['opis']."<hr>";
        }
        mysqli_close($conn);
        ?>
    </div>
    <div id="prawy">
        <h2>WETERYNARZ</h2>
        <a href="logo.jpg"><img src="logo-mini.jpg" alt=""></a>
        <p>Krzysztof Nowakowski, lekarz weterynarii</p>
        <h2>GODZINY PRZYJĘĆ</h2>
        <table>
            <tr>
                <td>Poniedziałek</td><td>15:00 - 19:00</td>
            </tr>
            <tr>
                <td>Wtorek</td><td>15:00 - 19:00</td>
            </tr>
        </table>
    </div>
</body>
</html>