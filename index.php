<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'sprawdzian';

    $conn = mysqli_connect($server, $user, $pass, $db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    #miecze {
        display: grid;
        grid-template-rows: repeat(4, 25vw);
        grid-template-columns: repeat(4, 25vw);
        gap: 1%;
        background-color: bisque;
    }

    .miecz {
        background-color: wheat;
        display: flex;
        flex-flow: row wrap;
    }

    .miecz h1 {
        width: 100%;
        text-align: center;
        text-decoration: underline;
    }

    .miecz em {
        width: 100%;
        text-align: center;
    }

    .miecz strong {
        width: 100%;
        text-align: center;
        font-size: 23px;
    }

    </style>

</head>
<body>

    <form action="dodawanie.php" method="POST">
        Imie: <input type="text" name="imie">
        Wybudzenie: <input type="text" name="wybudzenie">
        <select name="element">
            <?php

                $query = "SELECT * FROM `elementy`";
                $result = mysqli_query($conn, $query) or die();

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {

                        $id = $row['id'];
                        $nazwa = $row['nazwa'];

                        echo '<option value="' . $id . '">' . $nazwa . '</option>';

                    }
                }

            ?>
        </select>
        <input type="submit" name="wykuj" value="Wykuj">
    </form>

    <div id="miecze">

    <?php

        $query = "SELECT imie, wybudzenie, elementy.nazwa FROM zanpakuto INNER JOIN elementy ON zanpakuto.element=elementy.id";
        $result = mysqli_query($conn, $query) or die();

        $muzycy = array();
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {

                $imie = $row['imie'];
                $wybudzenie = $row['wybudzenie'];
                $element = $row['nazwa'];

                if($element == 'ogień') {
                    $kolor = 'red';
                } elseif($element == 'lód') {
                    $kolor = 'dodgerblue';
                } elseif($element == 'void') {
                    $kolor = 'black';
                } else {
                    $kolor = 'black';
                }

                echo '<div class="miecz">';
                echo '<h1 class="miecz">' . $imie. '</h1>';
                echo '<em>' . $wybudzenie . '</em>';
                echo '<strong style="color: ' . $kolor . ';">' . $element . '</strong>';
                echo '</div>';

            }
        }

    ?>

    </div>

</body>
</html>
