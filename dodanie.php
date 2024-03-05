<?php
    $conn = mysqli_connect("localhost", "root", "", "ee09");
    
    $nrKaretki = $_POST['nrKaretki'];
    $imie1 = $_POST['ratownik1'];
    $imie2 = $_POST['ratownik2'];
    $imie3 = $_POST['ratownik3'];
    
    
    $sql = "INSERT INTO `ratownicy`(`nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES ($nrKaretki, '$imie1', '$imie2', '$imie3')";
    $zapytanie = mysqli_query($conn, $sql);
    echo "Do bazy zostało wysłane zapytanie: ".$sql;
    mysqli_close($conn);
?>