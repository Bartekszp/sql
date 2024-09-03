<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root','','firma111');
        $q = mysqli_query($conn,"SELECT imie, nazwisko, pensja from pracownicy WHERE zawod = 'informatyk' and plec = 'm' and year(data_urodzenia) < 1975 ORDER by pensja desc");

        echo '<table>';
        while($row=mysqli_fetch_array($q))
        {
            echo '<tr>';
            echo '<td>'.$row['imie'].'</td><td>'.$row['nazwisko'].'</td><td>'.$row['pensja']."</td>";
            echo '</tr>';
        }
        echo '</table>';
        mysqli_close($conn);
    ?>
    <?php
        $conn = mysqli_connect('localhost','root','','firma111');
        $q = mysqli_query($conn,"SELECT imie, nazwisko, nazwa from pracownicy p inner join placowki pl on p.idplacowki = pl.id_placowki WHERE zawod = 'sekretarka' and plec = 'k' and pensja = 2000 and nazwa = 'Omega'");
        
        echo '<ul>';
        while($row=mysqli_fetch_array($q))
        {
            echo '<li>';
            echo $row['imie'].' '.$row['nazwisko'];
            echo '</li>';
        }
        echo '</ul>';
        mysqli_close($conn);
    ?>
    <?php
        $conn = mysqli_connect('localhost','root','','firma111');
        $q = mysqli_query($conn,'select min(pensja), max(pensja), round(avg(pensja), 2) from pracownicy');
        while($row = mysqli_fetch_assoc($q))
        {
            echo "<p> Najniższa pensja: ".$row["min(pensja)"]."</p>";
            echo "<p>"."Najwyższa pensja: ".$row["max(pensja)"]."</p>";
            echo "<p>"."Średnia pensja: ".$row["round(avg(pensja), 2)"]."</p>";
        }
    
        

        #echo $maxValue;
        mysqli_close($conn);
    ?>
</body>
</html>