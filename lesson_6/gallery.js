
console.log('Задание 1');

function onWindowLoad(){
	var images = document.getElementsByTagName('img');
	var input = document.getElementsByTagName('input');

	for ( var i = 0; i < images.length; i++ ) {
		images[i].onclick = onImageClick;
	}

	for (var i = 0; i < input.length; i++ ) {
		input[i].onclick = onInputClick;
	}
};

function onImageClick(e){
	var div = document.getElementById('big_picture');
	div.innerHTML = '';

	var id = e.target.getAttribute('id');
	var data = id.split('_');
	var src = 'img/' + data[1] + ' big' + '.jpg';

	var img = document.createElement('img');
	img.src = src;
	div.appendChild(img);

	img.onload = function () {
	alert ('Картинка существует');
}

img.onerror = function () {
	alert ('Картинка  не существует!');
}

};



window.onload = onWindowLoad;



console.log ('Задание 2');


 

var basket = [
	{	name: 'Яблоки',
		price: 80,
		quantity: 0 
},

	{	name: 'Груши',
		price: 100,
		quantity: 0 
},

	{	name: 'Бананы',
		price: 30,
		quantity: 0 
}
];




function onInputClick(e){
	var div = document.getElementById('basket');
	div.innerHTML = 'Сумма равна:';


	var id = e.target.getAttribute('id');
	var data = id.split('_');
	basket[data[1]].quantity++;

	var summa = 0;
	for (i = 0; i < basket.length; i++) {
		summa += basket[i].price * basket[i].quantity;
	}

	var str='';

	for (i = 0; i < basket.length; i++) {
		if (basket[i].quantity > 0) {
		str=str+(basket[i].name + ' ' +basket[i].quantity + 'шт. ' + basket[i].price +'руб.<br>');
	};
	}


	div.innerHTML = str + 'Сумма:' + summa;

};