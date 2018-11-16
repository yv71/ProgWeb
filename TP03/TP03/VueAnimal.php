
<style type="text/css">
    td {
       border : 1px solid black;
       width : 50px;
       height : 50px;

    }
    table {
        border-collapse : collapse;
    }
</style>

<?php

/**
 * Class1 short summary.
 *
 * Class1 description.
 *
 * @version 1.0
 * @author yv066840
 */
class VueAnimal
{
    public function afficheAnimaux(array $Animaux){
        echo "<table>";
        echo "<tr> <td> id </td> <td> nom </td> <td> espece </td> <td> cri </td> <td> proprietaire </td> <td> age </td><td> Modifier <td/> </tr>";
        foreach($Animaux as $value){
            $id = $value->id();
            $espece = $value->espece();
            $nom = $value->nom();
            $cri = $value->cri();
            $proprietaire = $value->proprietaire();
            $age = $value->age();

            echo "<tr>  <td> $id</td><td>$espece </td><td>$nom </td><td>$cri </td><td>$proprietaire </td><td>$age </td> <td> ";
            echo"<form action ='index.php'> </form>";
            echo "</td></tr>";
        }

        echo "</table>";
    }
}

?>