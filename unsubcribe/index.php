<?php
// Adatbázis kapcsolat beállítása
$host = 'localhost'; // Az adatbázis hosztja
$user = 'root'; // Az adatbázis felhasználója
$password = ''; // Az adatbázis jelszava
$dbname = 'localhost'; // Az adatbázis neve

// Kapcsolódás az adatbázishoz
$conn = new mysqli($host, $user, $password, $dbname);

// Kapcsolat ellenőrzése
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

// E-mail cím lekérése a URL paraméterből
if (isset($_GET['mail'])) {
    $email = $_GET['mail'];

    // SQL lekérdezés, hogy töröljük a felhasználót az adatbázisból az e-mail alapján
    $sql = "DELETE FROM mail_sub WHERE Email = ?";
    
    // Előkészített lekérdezés
    if ($stmt = $conn->prepare($sql)) {
        // Paraméterek bindelése
        $stmt->bind_param("s", $email);

        // Lekérdezés végrehajtása
        if ($stmt->execute()) {
            // Leiratkozás sikeres
            // Nincs üzenet, csak törlés
        } else {
            // Hiba esetén (nem fogunk üzenetet kiírni)
        }

        // Lekérdezés bezárása
        $stmt->close();
    }
}

// Kapcsolat lezárása
$conn->close();
?>
