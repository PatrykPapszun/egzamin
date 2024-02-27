<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con = mysqli_connect('localhost', 'root', '', 'ee09');
        @$nrKaretki = $_POST['nrKaretki'];
        @$ratownik1 = $_POST['ratownik1'];
        @$ratownik2 = $_POST['ratownik2'];
        @$ratownik3 = $_POST['ratownik3'];
        $zap = mysqli_query($con, "INSERT INTO ratownicy('nrKaretki', 'ratownik1', 'ratownik2', 'ratownik3')");
        
        while($option = mysqli_fetch_array($zap)){

        }
    ?>
</body>
</html>