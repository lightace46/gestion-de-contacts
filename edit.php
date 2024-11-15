<?php
include 'bd.php';

$id=$_GET['id'];

$base = connectDB();
$sql = $base->query("SELECT `nom`,`email`,`telephone` FROM contacts WHERE id=$id");
$contact = $sql->fetch(PDO::FETCH_ASSOC);
?>
<form method="post" action="edit.php?id=<?php echo htmlspecialchars($id); ?>">
    <label>
        Nom : <input type="text" name="nom" value="<?php echo htmlspecialchars($contact['nom']); ?>" />
        <br/>
        Email : <input type="text" name="email" value="<?php echo htmlspecialchars($contact['email']); ?>" />
        <br/>
        Téléphone : <input type="text" name="telephone" value="<?php echo htmlspecialchars($contact['telephone']); ?>" />
        <br/>
    </label>
    <input type="submit" value="Mettre à jour" />
    <br/>
</form>

<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];

$base->query("UPDATE `contacts` SET `nom`='$nom',`email`='$email',`telephone`='$telephone' WHERE id=$id");
header("Location: index.php");
?>