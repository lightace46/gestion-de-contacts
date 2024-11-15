<?php
include 'bd.php';
$base = connectDB();

$sql = $base->query("SELECT * FROM `contacts`");

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Nom</th><th>Email</th><th>Téléphone</th></tr>";

//affichage de chaque ligne
while ($donnees = $sql->fetch()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($donnees['nom']) . "</td>";
    echo "<td>" . htmlspecialchars($donnees['email']) . "</td>";
    echo "<td>" . htmlspecialchars($donnees['telephone']) . "</td>";
    echo "<td><a href='edit.php?id=" . htmlspecialchars($donnees['id']) . "'>Modifier</a></td>";
    echo "</tr>";
}

echo "</table>";

?>