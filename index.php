<form method="post" action="ajouterContacts.php">
    <label>
        nom : <input type="text" name="nom"/>
        <br/>
        email : <input type="text" name="email"/>
        <br/>
        téléphone : <input type="text" name="telephone"/>
        <br/>
    </label>
    <input type="submit" value="Entrer" />
    <br/>
    <label>
        pour modifier les contacts cliquer <a href="modifierContacts.php">ici</a>
    </label>
</form>

<?php

//foreach ($contact as $value) {
//    echo $value[$nom]." ".$value[$email]." ".$value[$telephone];
//}

?>

