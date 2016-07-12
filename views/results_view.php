<?php
//echo "<pre>";
//var_dump($res);
//echo "</pre>";
$username = $this->session->userdata('username'); 
echo "<div id='results'>";
echo "<font color=white size=10>Резултати на: ".$username."</font>";
$i = 1;
echo "<table border=1>";
echo "<tr>";
	echo "<td>БРОЙ</td>";
	
	echo "<td>ДАТА</td>";
	echo "<td>ТОЧКИ</td>";
	echo "<td>ИЗТРИЙ</td>";
	echo "</tr>";
foreach($res as $key => $value){
	echo "<tr>";
	echo '<td>'.$i++.'</td>';
	echo "<td>";
	echo $value['record_date'];
	echo "</td>";
	echo "<td>";
	echo $value['score'];
	echo "</td>";
	//echo "<td>".anchor('Results/del-result/?result_id='.$value['result_id'], 'Изтрии')."</td>";
	echo "<td>".anchor('Results/del-result/?result_id='.$value['result_id'], 'Изтрий')."</td>";
	echo "</tr>";
}
echo "</table>";

echo '<h2><a href='.base_url().'index.php/home'.'>Назад</a> ';
echo '<a href='.base_url().'index.php/home/do-logout'.'>Изход</a></h2>';

echo "</div>";