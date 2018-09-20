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
<html>
    <head>
    </head>

    <body>
        <p>
            <?php
                function hellowWorld(){
                    for ($i=0 ; $i < 10; $i++) {
                        echo "<b>Hello world ! </b></br>";
                    }
                }
                function bissextile($annee){
                    if (($annee%4 == 0 && $annee%100!=0)||($annee%100==0 && $annee%400==0)){
                        echo "<b> L'année $annee est bissextile </b></br>";
                    }
                    else {
                        echo "<b> L'année $annee n'est pas bissextile </b></br>";
                    }
                }
                /**for ($i = 1950; $i <= 2018; $i++){
                    bissextile($i);
                }               **/
                function tableMult($x){
                    echo "<table>";
                    for ($i = -1; $i <= $x; $i++){
                        echo "<tr>";
                        for($j =-1; $j <= $x ; $j++){
                            if ($i == -1 && $j == -1){
                                echo "<td><b> x </b></td>";
                            }
                            elseif($i == -1 &&  $j != -1){
                                echo "<td><b> $j </b></td>";
                            }
                            elseif ($i != -1 &&  $j == -1) {
                                echo "<td><b> $i</b></td>";
                            }
                            else {
                                $r = $i * $j;
                                echo "<td> $r </td>";
                            }

                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                function tabCouleur(){
                    echo "<table>";
                    for ($i = 0; $i <= 250; $i += 10){
                        echo "<tr>";
                        for ($j = 0; $j <= 250; $j += 10){

                            echo "<td style=\"background-color : rgb(255, $i,$j);\" ></td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }       
                tabCouleur();
            ?>
        </p>
    </body>
</html>