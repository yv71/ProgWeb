
<html>
<body>

    <form action="index.php" method="post">
        Nom :
        <input type="text" name="nom" />
        <br />
        Espece :
        <input type="text" name="espece" />
        <br />
        Cri :
        <input type="text" name="cri" />
        <br />
        Proprietaire :
        <input type="text" name="proprio" />
        <br />
        Age :
        <input type="number" name=" age" />
        <br />
        <input type="submit" name="submit" value="Envoie !" />
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])){
    
    echo "ah";
    $an = new Animal(array(
    'id' => 1,
    'nom' => $_POST['nom'],
    'espece' => $_POST['espece'],
    'cri' => $_POST['cri'],
    'proprietaire' => $_POST['proprio'],
    'age' => $_POST['age']));
    $manager->add($an);
}



?>
