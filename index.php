<!DOCTYPE html>
<html>
<head>
  <title>Astronave Phantasma</title>

  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="base.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <style>
	#welcome{
		background-color: rgb(0, 0, 0);
		background-color: rgba(0, 0, 0, 0.2);
		font-family: cursive;
		margin-top: 20rem;
	}
	.rainbow{
		font-size: 3rem;
		text-align: center;
		letter-spacing: 5px;
		animation: colorRotate 1s linear 0s infinite;
	}
	@keyframes colorRotate {
	  from {
		color: #6666ff;
	  }
	  10% {
		color: #0099ff;
	  }
	  50% {
		color: #00ff00;
	  }
	  75% {
		color: #ff3399;
	  }
	  100% {
		color: #6666ff;
	  }
	}
  </style>
</head>
<body >
	<div id="welcome"><h1 class="rainbow">Welcome To Astronave Phantasma <br> Dev : Moz-Moz </h1></div>
  <div id="target" style="display:none;"></div>
  <script>
	  
	$(document).ready(function() {
		var w = document.getElementById('welcome').style;
		var t = document.getElementById('target');
		w.opacity = 1;
		(function fade(){(w.opacity-=.1)<0?w.display="none":setTimeout(fade,500)})();
		
	});
	setTimeout(function() {
		 $('#target').css('display','block');
		}, 13000);
  </script>
  <script src="./src/main.js" type="module">
  </script>
</body>
</html>
