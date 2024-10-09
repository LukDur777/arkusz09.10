<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header> <h1> Bibilioteka w Książkowicach Wielkich</h1>
    </header>
    <main>
        <div class="lewo">
            <h3>Polecamy dzieła autorów</h3>
            <?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "biblioteka";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Połączenie nieudane: " . $conn->connect_error);
    }
    $sql = "SELECT imie, nazwisko FROM autorzy"; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<ol>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row["imie"]) . " " . htmlspecialchars($row["nazwisko"]) . "</li>";
        }
     echo "</ol>"; 
    } else {
        echo "Brak wyników.";
    }
    $conn->close();
    ?>
        </div>
        <div class="srodek">
            <h3>ul. Czytelnicza 25, Książkowice&nbsp;Wielkie</h3>
            <a href="mailto:sekretariat@biblioteka.pl"><p>Napisz do nas</p></a>
            <img src="biblioteka.png" alt="książki">
        </div>
        <div class="prawo">
            <div class="gora">
                <h3>
                    Dodaj czytelnika
                </h3>
                <form action="biblioteka.php" method="post">
                    <label for="firstName">Imię</label>
                    <input type="text" name="firstName" class="firstName"><br><br>
                    <label for="lastName">nazwisko:</label>
                    <input type="text" name="lastName" class="lastName" ><br><br>
                    <label for="symbol">symbol</label>
                    <input type="text" name="symbol" class="symbol"><br><br>
                    <input type="submit" value="Dodaj"><br>
                </form>

            </div>
            <div class="dol">

            </div>
        </div>
    </main>
    <footer>
        <p>
            Projekt strony: 000000000000000000
        </p>
    </footer>
    
</body>
</html>