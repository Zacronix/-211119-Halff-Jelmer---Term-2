<!DOCTYPE html>
<html>
<head>
<title>Memory Game - 18+ Game 32 cards</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<style>
h1{
	color: white;
}
html{
background: url(img/main.jpg);
background-size: cover;
}
div#memory_board > div{
	background: url(img/background18.png);
	background-size: contain;
	border-radius: 10%;
	float:left;
	height: 75px;
	width: 75px;
	margin:10px;
	padding:20px;
	cursor:pointer;
	text-align:center;
}
</style>

<script>
var memory_array = ['cards/18+/cardGirl1.png','cards/18+/cardGirl1.png','cards/18+/cardGirl2.png','cards/18+/cardGirl2.png','cards/18+/cardGirl3.png','cards/18+/cardGirl3.png','cards/18+/cardGirl4.png','cards/18+/cardGirl4.png','cards/18+/cardGirl5.png','cards/18+/cardGirl5.png','cards/18+/cardGirl6.png','cards/18+/cardGirl6.png','cards/18+/cardGirl7.png','cards/18+/cardGirl7.png','cards/18+/cardGirl8.png','cards/18+/cardGirl8.png','cards/18+/cardGirl9.png','cards/18+/cardGirl9.png','cards/18+/cardGirl10.png','cards/18+/cardGirl10.png','cards/18+/cardGirl11.png','cards/18+/cardGirl11.png','cards/18+/cardGirl12.png','cards/18+/cardGirl12.png','cards/18+/cardGirl13.png','cards/18+/cardGirl13.png','cards/18+/cardGirl14.png','cards/18+/cardGirl14.png','cards/18+/cardGirl15.png','cards/18+/cardGirl15.png','cards/18+/cardGirl16.png','cards/18+/cardGirl16.png'];
var memory_values = [];
var memory_tile_ids = [];
var tiles_flipped = 0;
var player = "player1";
var player1 = 0;
var player2 = 0;
Array.prototype.memory_tile_shuffle = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
    }
}
function newBoard(){
	tiles_flipped = 0;
	var output = '';
	player1 = 0;
	player2 = 0;
  memory_array.memory_tile_shuffle();
	document.getElementById("player1").style.color = "red";
	document.getElementById("color1").style.color = "red";
	document.getElementById("player2").style.color = "white";
	document.getElementById("color2").style.color = "white";
	document.getElementById("player1").innerHTML = player1;
	document.getElementById("player2").innerHTML = player2;
    memory_array.memory_tile_shuffle();
	for(var i = 0; i < memory_array.length; i++){
		output += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')"></div>';
	}
	console.log(output);
	document.getElementById('memory_board').innerHTML = output;
}

function memoryFlipTile(tile,val){
	if(tile.innerHTML == "" && memory_values.length < 2){
		tile.style.backgroundImage = 'url('+val+')';
		tile.style.borderRadius = '10%';
		if(memory_values.length == 0){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
		} else if(memory_values.length == 1){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);
			if(memory_values[0] == memory_values[1]){
				tiles_flipped += 2;
				// Clear both arrays
				memory_values = [];
            	memory_tile_ids = [];
							if(player == "player1"){
								 player1++;
								document.getElementById("player1").innerHTML = player1;
								player = "player2";
							}else if(player == "player2"){
								player2++;
								document.getElementById("player2").innerHTML = player2;
								player = "player1";
							}

				// Check to see if the whole board is cleared
				if(tiles_flipped == memory_array.length){
					alert("Board cleared... generating new board");
					document.getElementById('memory_board').innerHTML = "";
					newBoard();
				}
			} else {


				function flip2Back(){
				    // Flip the 2 tiles back over
						if(player == "player1"){
							player = "player2";
							document.getElementById("player2").style.color = "red";
							document.getElementById("player1").style.color = "white";
							document.getElementById("color2").style.color = "red";
							document.getElementById("color1").style.color = "white";
						}else if(player == "player2"){
							player = "player1";
							document.getElementById("player1").style.color = "red";
							document.getElementById("player2").style.color = "white";
							document.getElementById("color1").style.color = "red";
							document.getElementById("color2").style.color = "white";
						}
				    var tile_1 = document.getElementById(memory_tile_ids[0]);
				    var tile_2 = document.getElementById(memory_tile_ids[1]);
				    tile_1.style.background = 'url(img/background18.png)';
            	    tile_1.innerHTML = "";
            	    tile_1.style.backgroundSize = 'contain';
									tile_1.style.borderRadius = '10%';



				    tile_2.style.background = 'url(img/background18.png)';
            	    tile_2.innerHTML = "";
 					tile_2.style.backgroundSize = 'contain';
					tile_2.style.borderRadius = '10%';

				    // Clear both arrays
				    memory_values = [];
            	    memory_tile_ids = [];
				}
				setTimeout(flip2Back, 700);
			}
		}
	}
}
</script>
</head>
<body>
<h1 id="color1">player 1:<p id="player1"></p></h1>
<h1 id="color2">player 2:<p id="player2"></p></h1>

<div id="memory_board"></div>
<script>newBoard();</script>

<?php
$cookie_name = "BU7wjaP32FAW4CmsD2db";
$url = 'index.php';

if(!isset($_COOKIE[$cookie_name])) {
		 header( "Location: $url" );
}
?>


</body>
</html>
