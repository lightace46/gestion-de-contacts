<form method="post">
    <label>
        nom : <input type="text" name="nom"/>
        <br/>
        email : <input type="text" name="email"/>
        <br/>
        téléphone : <input type="text" name="telephone"/>
        <br/>
    </label>
    <input type="submit" value="Entrer" />
</form>
<?php
include 'bd.php';

$nom = $_POST['nom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];

$base = connectDB();

$sql = $base->query("INSERT INTO contacts (`nom`,`email`,`telephone`) VALUES ('$nom','$email','$telephone')");
