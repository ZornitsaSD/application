<?php
//echo "<pre>";
//var_dump($res);
//echo "</pre>";

$i = 1;
echo "<table border=1>";
echo "<tr>";
	echo "<td>Result number</td>";
	echo "<td>Name</td>";
	echo "<td>Date</td>";
	echo "<td>Result</td>";
	echo "</tr>";
foreach($res as $key => $value){
	echo "<tr>";
	echo '<td>'.$i++.'</td>';
	echo "<td>";
	echo $value['username'];
	echo "</td>";
	echo "<td>";
	echo $value['record_date'];
	echo "</td>";
	echo "<td>";
	echo $value['score'];
	echo "</td>";

	echo "</tr>";
}
echo "</table>";

echo '<h2><a href='.base_url().'index.php/home'.'>Назад</a> ';
echo '<a href='.base_url().'index.php/home/do-logout'.'>Изход</a></h2>';