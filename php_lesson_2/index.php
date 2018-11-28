<?php

echo "Задание 1";
//Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//если $a и $b положительные, вывести их разность;
//если $а и $b отрицательные, вывести их произведение;
//если $а и $b разных знаков, вывести их сумму;
//ноль можно считать положительным числом.

$a = rand(-15, 15);
$b = rand(-15, 15);

if ($a >= 0 && $b >= 0)
	echo $a $b;
if ($a < 0 && $b < 0)
	echo $a * $b;
if ($a >= 0 && $b < 0)
	echo $a + $b;
if ($a < 0 && $b >= 0)
	echo $a + $b;



echo "Задание 2";
//Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

$a = 0;

switch ($a) {
	case 0:
		echo "0";
		break;
	case 1:
		echo "1";
		break;
	case 2:
		echo "2";
		break;
	case 3:
		echo "3";
		break;
	case 4:
		echo "4";
		break;
	case 5:
		echo "5";
		break;
	case 6:
		echo "6";
		break;
	case 7:
		echo "7";
		break;
	case 8:
		echo "8";
		break;
	case 9:
		echo "9";
		break;
	case 10:
		echo "10";
		break;
	case 11:
		echo "11";
		break;
	case 12:
		echo "12";
		break;
	case 13:
		echo "13";
		break;
	case 14:
		echo "14";
		break;
	case 15:
		echo "15";
		break;
};


echo "Задание 3";
// Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.


function addition ($a, $b) {
	return $a + $b;
}
$add = addition (5,10);
echo $add;

function subtraction ($a, $b) {
	return $a  $b;
}
$sub = subtraction (15,5);
echo $sub;

function multiplication ($a, $b) {
	return $a * $b;
}
$multipl = multiplication (2,2);
echo $multipl;

function division ($a, $b) {
	return $a / $b;
}
$div = division (8,10);
echo $div;


echo "Задание 4";
//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation ($arg1, $arg2, $operation) {
	$resultat = 0;

	switch ($operation) {
		case 'addition':
			$resultat = addition ($arg1, $arg2);
			break;
		
		case 'subtraction':
			$resultat = subtraction ($arg1, $arg2);
			break;

		case 'multiplication':
			$resultat = multiplication ($arg1, $arg2);
			break;

		case 'division':
			$resultat = division ($arg1, $arg2);
			break;
	}
	return $resultat;
}

echo mathOperation ($a, $b, 'addition');

echo mathOperation ($a, $b, 'subtraction');
 
echo mathOperation ($a, $b, 'multiplication');

echo mathOperation ($a, $b, 'division');


echo "Задание 5";
//Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.

echo (date("m.d.Y"))

?> 