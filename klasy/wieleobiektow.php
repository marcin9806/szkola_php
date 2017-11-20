<!DOCTYPE html>
<html>
<head><title>Wiele obiektów</title><meta charset="utf-8"><link rel="stylesheet" href="style.css"></head>
<body>
    <?php
        require_once("klasa_samochod.php");
        $auta=array();
        for($i=0;$i<3;$i++){
            $auta[$i]=new Samochod("Polska");
        }
        $auta[0]->marka="Ferrari";
        $auta[0]->model="F430";

        $auta[1]->marka="Audi";
        $auta[1]->model="A3";

        $auta[2]->marka="Mercedes";
        $auta[2]->model="A170";

        echo<<<TABELA
        <table>
            <tr>
                <th>Marka</th>
                <th>Model</th>
            </tr>
TABELA;
        //for($i=0;$i<3;$i++) echo "<tr><td>".$auta[$i]->marka."</td><td>".$auta[$i]->model."</td></tr>";
    foreach($auta as $auto) echo "<tr><td>".$auto->marka."</td><td>".$auto->model."</td></tr>";
        echo "</table>";
    ?>
</body>
</html>
