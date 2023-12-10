<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        *{text-align:center;}
        table{
            width:100%;
        }
        </style>
</head>
<body>
    <?php 
        echo "<h2>Welcome To PHP with(echo) </h2>";
        print "<h2> Welcome To PHP with(print) </h2>";
        $x=5;
        $y="Welcome";
        $z=true;
        echo '<p> Type of $x  is '.gettype($x)."</p>";
        echo '<p> Type of $y  is '.gettype($y)."</p>";
        echo '<p> Type of $z  is '.gettype($z)."</p>";

        echo "<hr />";
        echo "<p> <p> For Loop </p>";
        for($i=0;$i<=15;$i++){
            echo $i." &nbsp; ";
        }
        echo "</p>";

        echo "<p> <p> While Loop </p>";
        $i=0;
        while($i<=15){
            echo $i." &nbsp; ";
            $i++;
        }
        echo "</p>";
        echo "<hr />";
        echo "<p> Define a Constant </p>";
        define("DEF_1","ITI");
        const DEF_2 = "ITI";

        echo "<p>".DEF_1."</p>";
        echo "<p>".DEF_2."</p>";

        echo "<hr />";
        $m=5;
        $n=7;
        $res  = $m+$n;
        if($res > 50){
            echo "<p> Accepted </p>";
        }else{
            echo "<p> Not Accepted </p>";
        }

        $A = 1000;
        $B = 2000;
        $C = 3000;

    ?>
    <hr />
<table border="border"> 
    <tr> <td>Name</td>  <td>Salary</td>  </tr> 
    <tr> <td><?php echo "A"; ?></td>  <td><?php echo "$A"; ?></td>  </tr> 
    <tr> <td><?php echo "B"; ?></td>  <td><?php echo "$B"; ?></td>  </tr> 
    <tr> <td><?php echo "C"; ?></td>  <td><?php echo "$C"; ?></td>  </tr> 
</table>
<hr />
<?php 
function to_string($var){
    $change = (string) $var;
    return gettype($change); 
}
echo  '<p> Change Type of $x From '.gettype($x); 
echo  " To ".to_string($x)."</p>"; 
?>
</body>
</html>