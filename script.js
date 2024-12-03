
const answer = document.getElementById('answer');

let num1;
let num2;

function getNum1 () {
	num1 = Number(document.getElementById('number1').value);
	console.log(num1);
	
}

function getNum2 () {
	num2 = Number(document.getElementById('number2').value);
	console.log(num2);
}

const addBtn = document.getElementById('add');

addBtn.addEventListener('click', () => {
	answer.innerText = num1 + num2;	
});

