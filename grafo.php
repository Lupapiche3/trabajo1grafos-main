<?php
//$t = $_POST["cantnodo"];
//$a = $_POST["tipografo"];
date_default_timezone_set("America/Santiago");
$fechaActual = date ( 'd-m-Y H:i:s' );
if ($t != NULL){
    
    $fi=fopen("archivo.log", "a");
    //or die("problemas al crear archivo.txt");

     fwrite($fi, $fechaActual);
     fwrite($fi, "   [grafo.php]El usuario ha seleccionado la cantidad de nodos: ");
     fwrite($fi, $t);
     fwrite($fi, ", El usuario ha seleccionado el tipo de grafo: ");
     fwrite($fi,$a);
     fwrite($fi, "\n");
     fclose($fi);
   }

else {
    echo "Datos incompletos o no seleccionados, vuelva y rellene la casilla";
} 
error_reporting(0);
    $s=0; $i=0; $j=0;
    $n=array();
    if(isset($_POST ["MatrizNodo"])){
        $n[0][0]= (int)$_POST ["txtn00"];
        $n[0][1]= (int)$_POST ["txtn01"];
        $n[0][2]= (int)$_POST ["txtn02"];
        $n[0][3]= (int)$_POST ["txtn03"];

        $n[1][0]= (int)$_POST ["txtn10"];
        $n[1][1]= (int)$_POST ["txtn11"];
        $n[1][2]= (int)$_POST ["txtn12"];
        $n[1][3]= (int)$_POST ["txtn13"];

        $n[2][0]= (int)$_POST ["txtn20"];
        $n[2][1]= (int)$_POST ["txtn21"];
        $n[2][2]= (int)$_POST ["txtn22"];
        $n[2][3]= (int)$_POST ["txtn23"];

        $n[3][0]= (int)$_POST ["txtn30"];
        $n[3][1]= (int)$_POST ["txtn31"];
        $n[3][2]= (int)$_POST ["txtn32"];
        $n[3][3]= (int)$_POST ["txtn33"];

        $s = $n[0][0];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{ 
            border: 1px solid;
        }
    </style>
</head>
<body>
<form method="post" action="grafo.php">
<table width="115" border="0"> 
    <tr>
        <td colspan="5" style="text-align: center;" ><strong >ESCRIBIR PESO DE CONEXION</td>
    </tr>
    <tr>
        <td width="43">  </td>
        <td width="43"> A </td>
        <td width="43"> B </td>
        <td width="43"> C </td>
        <td width="43"> D </td>
    </tr>
    <tr>
        <td width="43"> A </td>
        <td width="43"><input name="txtn00" type="text" id="txtn00"
        value="<?= $n[0][0]?>" size = "5"/> </td>
        <td width="62"><input name="txtn01" type="text" id="txtn01"
        value="<?= $n[0][1]?>" size = "5"/> </td>
        <td width="62"><input name="txtn02" type="text" id="txtn02"
        value="<?= $n[0][2]?>" size = "5"/> </td>
        <td width="62"><input name="txtn03" type="text" id="txtn03"
        value="<?= $n[0][3]?>" size = "5"/> </td>

    </tr>
    <tr>
        <td width="43"> B </td>
        <td width="43"><input name="txtn10" type="text" id="txtn10"
        value="<?= $n[1][0]?>" size = "5"/> </td>
        <td width="62"><input name="txtn11" type="text" id="txtn11"
        value="<?= $n[1][1]?>" size = "5"/> </td>
        <td width="62"><input name="txtn12" type="text" id="txtn12"
        value="<?= $n[1][2]?>" size = "5"/> </td>
        <td width="62"><input name="txtn13" type="text" id="txtn13"
        value="<?= $n[1][3]?>" size = "5"/> </td>

    </tr>
    <tr>
        <td width="43"> C </td>
        <td width="43"><input name="txtn20" type="text" id="txtn20"
        value="<?= $n[2][0]?>" size = "5"/> </td>
        <td width="62"><input name="txtn21" type="text" id="txtn21"
        value="<?= $n[2][1]?>" size = "5"/> </td>
        <td width="62"><input name="txtn22" type="text" id="txtn22"
        value="<?= $n[2][2]?>" size = "5"/> </td>
        <td width="62"><input name="txtn23" type="text" id="txtn23"
        value="<?= $n[2][3]?>" size = "5"/> </td>
    </tr>

    <tr>
        <td width="43"> D </td>
        <td width="43"><input name="txtn30" type="text" id="txtn30"
        value="<?= $n[3][0]?>" size = "5"/> </td>
        <td width="62"><input name="txtn31" type="text" id="txtn31"
        value="<?= $n[3][1]?>" size = "5"/> </td>
        <td width="62"><input name="txtn32" type="text" id="txtn32"
        value="<?= $n[3][2]?>" size = "5"/> </td>
        <td width="62"><input name="txtn33" type="text" id="txtn33"
        value="<?= $n[3][3]?>" size = "5"/> </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>[0][0]</td>
        <td>
            <input name= "txts" type="text" id="txts" value="<?=$s?>" size="5"/></td>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name= "MatrizNodo" type="submit" id="MatrizNodo" value="Mostrar"/></td>
        </td>
    </tr>
</table>
</form>
 <!--<?php /*
        for($i = 0; $i < $n; $i++){
            ?>
            <tr>
            <?php
            for($j = 0; $j < $n; $j++){
                ?>
                    <td>
                        <?php echo $i  ?> <!-- aca va el dato que se escribe dentro de cada cuadrito de la matriz -->
                    </td>
                <?php
            }
            ?>
            </tr>
            <?php
     }
    ?>
    <!-- <tr>
        <td>E</td>
        <td><?php/*
        $bin1 = $_POST['Conectado'] - 1;
        $bin2 = $_POST ['Conectado1'] - 1 ; 
        $Matriz = array (Array (0,0,0,0,0), Array (0,0,0,0,0), Array (0,0,0,0,0) , Array (0,0,0,0,0) , Array (0,0,0,0,0));
        $Matriz[$bin1][$bin2]  = 1;
        $i=4;
            for($j= 0; $j <5; $j++){
                echo " " .$Matriz[$i][$j];
            }   
        */?> </td>
    </tr>
</table>
</body>
</html>

<form action ="./arbol.php"method ="post" >
<div style="text-align: center;">
 <input type ="submit" value = "arbol" style='width:70px; height:40px' class= "btn btn-outline-success mt-3 mb-3"/>
        </form>
        </div>