<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoriu generavimas</title>
</head>
<body>
    <form action="" method="get">
        <button type="submit" name="submit">Sukurti autorius</button>
    </form>
    <?php 

    require_once("connection.php");

    if(isset($_GET["submit"])) {
        for ($i=0; $i<10; $i++) {

            $vardas = "vardas".$i;
            $pavarde = "pavarde".$i;
            $slapyvardis = "slapyvardis".$i;

            $sql = "INSERT INTO `autoriai`(`vardas`, `pavarde`, `slapyvardis`) 
            VALUES ('$vardas','$pavarde','$slapyvardis')";

            if(mysqli_query($conn, $sql)) {
                echo "Autorius sukurtas sekmingai";
                echo "<br>";
            } else {
                echo "Kazkas ivyko negerai";
                echo "<br>";
            }
        }
    }

?>
</body>
</html>