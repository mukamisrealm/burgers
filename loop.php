<h1>Loops</h1>

<h4>do-While Loop</h4>
<?php
//While loop
$i=11;
do{
print $i . "<br>";
$i++;
}while($i < 16);
?>
<h4>for loop</h4>
<?php
     //for loop
for($s=44;$s<55;$s+=2){
    print $s . "<br>";
}
?>

<h4>foreach</h4>
<?php
$months= ["January","February","March","April","May","June","July",
"August","September","October","Novemmber","December"];

foreach($months AS $month){
    print $month . ", ";
}

?>
<form action="">
    <select name=""id="">
        <option value="">--Month--</option>
        <?php
    foreach($months AS $month){
        echo  "option value=''>$month</option>";
    }
?>
</select>
<select name=""id="">
    <option value="">--
