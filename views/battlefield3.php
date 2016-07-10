
<DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="<?php echo base_url().'/assets/js/jquery-3.0.0.js';?>"></script>
		<link href="<?php echo base_url().'/assets/css/style.css';?>" rel="stylesheet" >
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>	
		<script src="<?php echo base_url().'/assets/js/jquery-ui.js';?>"></script>
		
		<meta name="keywords" content="Game">
		<title></title>
	</head>
	<body>	
		<div id="containerMenu">
			<span class="btn1"> Потребителско име: <?php $username = $this->session->userdata('username'); echo $username;?><!--<input type="text" name="<?php $username ?>"/>--></span>			
			<span class="btn1" id="aimSuccess" >Точни изтрели: 0</span>
			<span class="btn1" id="clicks">Налични снаряди: 20</span>
			<span class="btn1"> <?php echo '<a href='.base_url().'index.php/home/do-logout'.'>Изход</a>'; ?></span>		
			<!--<span class="btn1" id="aimSuccess"><?php //echo anchor('results/insert_result', 'Logout'); Taka shte dobavim res v DB i sled tova shte se logout?></span>-->
		</div>	
	<?php 
		$clicks = '';
		$aimSuccess='';
	?>		
	<div id="background">

	<?php 	
		echo "<img src='".base_url()."/assets/images/background.png' class='stretch' />";

			//$username ='Tosheto';
			$username = $this->session->userdata('username');

			$x = array(rand(100, 400), rand(100, 400), rand(100, 400), rand(100, 400), rand(100, 400), rand(100, 400),rand(100, 400), rand(100, 400)); 
			$y = array(rand(0, 1000), rand(0, 900), rand(0, 0), rand(0, 900), rand(0, 900), rand(0, 900), rand(0, 900), rand(0, 900), rand(0, 900));					
				echo '<div id="warrior0"  style="top: '. $x[0] .'"; left: '. $y[0] .'; "><img src="'.base_url().'/assets/images/warriorSmall.png" /></div>';
				echo '<div id="warrior1"  style="top: '. $x[1] .'; left: '. $y[1] .'; "><img src="'.base_url().'/assets/images/warriorSmall.png" /></div>';
				echo '<div id="warrior2"  style="top: '. $x[2] .'; left: '. $y[2] .'; "><img src="'.base_url().'/assets/images/warriorSmall.png" /></div>';
				echo '<div id="warrior3"  style="top: '. $x[3] .'; left: '. $y[3] .'; "><img src="'.base_url().'/assets/images/warriorSmall.png" /></div>';
				echo '<div id="warrior4"  style="top: '. $x[4] .'; left: '. $y[4] .'; "><img src="'.base_url().'/assets/images/warriorSmall.png" /></div>';
				echo '<div id="warrior5"  style="top: '. $x[5] .'; left: '. $y[5] .'; "><img src="'.base_url().'/assets/images/warriorSmall.png" /></div>';
	?>
			<div id="boom"  style="top:  ; left:  ;"><img  src="<?php echo base_url()?>/assets/images/c.gif"></div>
	</div>	
	<div id="draggable"  width='100px'>
		<p class="draggable ui-widget-content" >
			<input  id = 'power' class='gun1'  type='range' value='' min='0'  max='' data-role='none' step='1'>
			<button id="attackButton" class="btn" onclick = "Attack()" >Attack </button></p>
	</div>
		<audio autoplay="autoplay">
			<source src="sounds/terran-1.mp3" />     
		</audio>	-->
		<audio id="audio1" src="sounds/boom.wav"></audio>
		<audio id="audio2" src="sounds/end.wav"></audio>
<script>
	function aaaa () {
		location.reload();
	}	
	  $(function() { 
		$( "#draggable" ).draggable({  axis: "x"});    
	  });

	var xh = screen.height;
		document.getElementById("power").max = xh;
	console.log (xh);

	var clicks = 20;
	var aimSuccess = 0;

	Number.prototype.between = function (min, max) {
		return this > min && this < max;
	};
	document.getElementById('boom').style.visibility='hidden';
	document.getElementById('boom').style.display = '';  // show it, and then...
	document.getElementById('boom').innerHTML = document.getElementById('boom').innerHTML;

	function Attack() {
	document.getElementById('audio1').play();
	
	 clicks -= 1;
        document.getElementById("clicks").innerHTML = 'Налични снаряди: <b>'+clicks+'</b>';
		if (clicks==0) {
			document.getElementById("attackButton").disabled=true;
			document.getElementById("attackButton").style.background='#000000';
			
		}
	var element = document.getElementById('warrior0');
	document.getElementById('warrior0').style.position = "absolute";
	var position = element.getBoundingClientRect();
	var xW0 = position.left;
	var yW0 = position.top;
	
	
	var element = document.getElementById('warrior1');
	document.getElementById('warrior1').style.position = "absolute";
	var position = element.getBoundingClientRect();
	var xW1 = position.left;
	var yW1 = position.top;
	
	var element = document.getElementById('warrior2');
	document.getElementById('warrior2').style.position = "absolute";
	var position = element.getBoundingClientRect();
	var xW2 = position.left;
	var yW2 = position.top;
	
	var element = document.getElementById('warrior3');
	document.getElementById('warrior3').style.position = "absolute";
	var position = element.getBoundingClientRect();
	var xW3 = position.left;
	var yW3 = position.top;
	
	var element = document.getElementById('warrior4');
	document.getElementById('warrior4').style.position = "absolute";
	var position = element.getBoundingClientRect();
	var xW4 = position.left;
	var yW4 = position.top;
	
	var element = document.getElementById('warrior5');
	document.getElementById('warrior5').style.position = "absolute";
	var position = element.getBoundingClientRect();
	var xW5 = position.left;
	var yW5 = position.top;

	var power = document.getElementById('power').value*1;

	var powerXmax = power*1+power*40/100;
	var powerXmin = power*1-power*40/100;
	
	var element = document.getElementById('draggable');
	document.getElementById('draggable').style.position = "absolute";
	var position = element.getBoundingClientRect();
	var draggable = position.left;
	var draggableXmax = draggable*1+draggable*20/100;
	var draggableXmin = draggable*1-draggable*20/100;
		
	document.getElementById('boom').style.visibility='visible';
	document.getElementById('boom').style.position = "absolute";
	document.getElementById('boom').style.top = power;
	document.getElementById('boom').style.left = draggable+20;
	
	//successful target conditions
	if ((xW0).between(draggableXmin, draggableXmax) && (yW0).between(powerXmin, powerXmax)){
	console.log ('good');
	document.getElementById('warrior0').style.visibility='hidden';
	aimSuccess+=1
	document.getElementById("aimSuccess").innerHTML = 'Точни изтрели:<b>'+aimSuccess+'</b>';
	document.getElementById('audio2').play();
	}
	
	if ((xW1).between(draggableXmin, draggableXmax) && (yW1).between(powerXmin, powerXmax)){
	console.log ('good');
	document.getElementById('warrior1').style.visibility='hidden';
	aimSuccess+=1
	document.getElementById("aimSuccess").innerHTML = 'Точни изтрели:<b>'+aimSuccess+'</b>';
	document.getElementById('audio2').play();
	}
	
	if ((xW2).between(draggableXmin, draggableXmax) && (yW2).between(powerXmin, powerXmax)){
	console.log ('good');
	document.getElementById('warrior2').style.visibility='hidden';
	aimSuccess+=1
	document.getElementById("aimSuccess").innerHTML = 'Точни изтрели:<b>'+aimSuccess+'</b>';
	document.getElementById('audio2').play();
	}
	
	if ((xW3).between(draggableXmin, draggableXmax) && (yW3).between(powerXmin, powerXmax)){
	console.log ('good');
	document.getElementById('warrior3').style.visibility='hidden';
	aimSuccess+=1
	document.getElementById("aimSuccess").innerHTML = 'Точни изтрели:<b>'+aimSuccess+'</b>';
	document.getElementById('audio2').play();
	}
	
	if ((xW4).between(draggableXmin, draggableXmax) && (yW4).between(powerXmin, powerXmax)){
	console.log ('good');
	document.getElementById('warrior4').style.visibility='hidden';
	aimSuccess+=1
	document.getElementById("aimSuccess").innerHTML = 'Точни изтрели:<b>'+aimSuccess+'</b>';
	document.getElementById('audio2').play();
	}
	
	if ((xW5).between(draggableXmin, draggableXmax) && (yW5).between(powerXmin, powerXmax)){
	console.log ('good');
	document.getElementById('warrior5').style.visibility='hidden';
	aimSuccess+=1
	document.getElementById("aimSuccess").innerHTML = 'Точни изтрели:<b>'+aimSuccess+'</b>';
	document.getElementById('audio2').play();
	}
	if (aimSuccess>6 || clicks==0) {
	console.log  (aimSuccess);
	console.log  (clicks);
	var res = aimSuccess*5+clicks*2;
	window.location.href = "home?res=" + res; 
	alert ("Твоят резултат е  "+res + " точки");

	
	}
}
	</script>
	<?php  
		$date = date('Y-m-d');

		$res = $_GET['res'];
		//$username = $_GET[$this->session->userdata('username')];
		//$id = $_GET[$this->session->userdata('gamer_id')];
		$id = $_GET['gamer_id'];
		
		echo $res ;
		$conn = mysqli_connect('localhost', 'root', '', 'game');
		$insert_query = 	"INSERT INTO results ('score', 'date') 
							VALUES ($res, $date) WHERE 'gamer_id' = ".$id."";
		$insert_result= mysqli_query($conn, $insert_query);
				if ($insert_result) {
					echo "OK";

				}else{
					echo "Not OK";
				}
	?>	
	</body>
</html>
	
	