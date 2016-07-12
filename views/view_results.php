<?php
$result_id = $_GET['result_id'];
echo "<p>".anchor('Results/show_gamer_result?result_id='.$result_id, 'View Results')."</p>";