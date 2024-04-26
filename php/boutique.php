<?php
// Connexion à la base de données (à remplacer avec vos propres informations de connexion)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studiograph";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête pour récupérer les produits depuis la base de données (à adapter à votre structure de base de données)
$sql = "SELECT id, nom, prix FROM produits";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Afficher les produits sous forme de liste
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["nom"]. " - " . $row["prix"]. "</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun produit trouvé";
}
$conn->close();
?>
