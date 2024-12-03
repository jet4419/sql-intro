<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<label for="">Number 1</label>
		<input oninput="getNum1()" id="number1" type="number">
	</div>
	<div>
		<label for="">Number 2</label>
		<input oninput="getNum2()" id="number2" type="number">
	</div>
	<button id="add">Add</button>
	<!-- <p>
		<span id="num1">1</span> 
		<button id="add">+</button> 
		<span id="num2">1</span> 
	</p>	 -->
	<p>Answer: <span id="answer"></span></p>

	<script src="script.js"></script>
</body>
</html>