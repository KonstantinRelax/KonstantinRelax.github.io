<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Homepage</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Link Open Sans as font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <!-- link font-awsome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- For sliders -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="css/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- our stile -->
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>

<section class="slider-sec">
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-0 logo">
	    <div>
	      <img src="img/logo.png" alt="logotype">
	    	Relax
	    </div>
    </div>
  </div> <!-- row -->
  <div class="row main-text">
    <div class="col-lg-12 ">
      <h2>Это всего лишь пример моей работы...</h2>
      <p class="header-title">Давайте работать вместе!</p>
<?php	
	echo "<h1>ссусксусус</h1>";
?>
  
      <p class="header-description">На данном сайте представлены лишь крохи чудесных возможностей HTML5/CSS3, Bootstrap-3, JavaScript, его феймворка JQuery и библиотеки UI, canvas и прочего ;) Мои контакты есть в footer'е. До связи!</p>
      <a class="scroll" href="#servises"><div class="btn-canvas">
      	 Начать знакомство!
      	</div></a>
    </div>
  </div>
</section>

<section id="servises" class="servises">
    <div id="cover"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 header-section">
				<p>Servises we provide</p>
			</div>
		</div>
		<div class="row">
			<a href="#design" class='scroll'><div class="col-lg-3 col-xs-2 box box-1">
				<p>Slider</p>
			</div></a>
			<a href="#canvas-sec" class='scroll'><div class="col-lg-3 col-xs-2 box box-2">
				<p>Drag&Drop</p>
			</div></a>
			<a href="#"><div class="col-lg-3 col-xs-2 box box-3"></div></a>
			<a href="footer" class='scroll'><div class="col-lg-3 col-xs-2 box box-4">We Are</div></a>
		</div>
	</div>
</section>

<section id="design">
	<div class="container">
	<div class="row">
		<div class="col-xs-12 header-section">Slick - Slider</div>
	</div>
		<div class="row sites" > 
			<div class="col-md-4 site site-1" value=1></div>
			<div class="col-md-4 site site-2" value=2></div>
			<div class="col-md-4 site site-3" value=3></div>
			<div class="col-md-4 site site-1" value=1></div>
			<div class="col-md-4 site site-2" value=2></div>
			<div class="col-md-4 site site-3" value=3></div>
		</div>
	</div>
</section>

<section id="canvas-sec">
	<div class="container">
		<canvas id="canvas">
		</canvas>
	<div class="dropBox dBox-1"></div>
	<div class="dropBox dBox-2"></div>
	<div class="dropBox dBox-3"></div>
		<div class="row">
			<div class="col-xs-12 header-section">Решим задачку?</div>
			<div class="col-xs-12 under-header">Расположите числа так, чтобы равенство оказалось верным</div>
		</div>

			<div class="numBox nbox-0"></div>
			<div class="numBox nbox-9"></div>
			<div class="numBox nbox-8"></div>
			<div class="numBox nbox-7"></div>
			<div class="numBox nbox-6"></div>
			<div class="numBox nbox-5"></div>
			<div class="numBox nbox-4"></div>
			<div class="numBox nbox-3"></div>
			<div class="numBox nbox-2"></div>
			<div class="numBox nbox-1"></div>

		<a href="#" id="check"><div class = 'btn-canvas'>Проверить себя!</div></a> 
		<a href="#" id='start'><div class = 'btn-canvas'>Стартовать</div></a>
		<a href="#" id='order'><div class = 'btn-canvas'>навести порядок</div></a>
		<div id="record">Рекорд сессии	</div>
		<div id="time">Зараченное время	</div>
		<div id="worldRecord" action=''></div>

	</div>
</section>

<footer>
	<div class="container">
		<div class="col-sm-6 col-xs-12 footer-left">
			<img src="img/trubka.png" alt="" class="vk-logo"></img>
			<img src="img/number.png" class ='number' alt="89823170272">
			<form id='reply' action="php/mail.php" method="post">
				<input type  = "text" 
					   name  = 'uname' 
					   class = 'form-input' 
					   placeholder = 'Тут вводить свое имя' required>
				<input type  = "text" 
					   name  = 'phone' 
					   id = 'phoneNumber' 
					   class = 'form-input' 
					   placeholder='Тут вводить телефон' required>
				<textarea type="text" 
					   name = 'msg' 
					   class='form-input' 
					   placeholder='Оставляйте отзыв здесь' 
					   rows=5></textarea>
				<input type="submit" 
					   formaction='php/mail.php' 
					   id='post' 
					   value='отправить отзыв' 
					   class="btn-canvas">
			</form>
		</div>
		<div class="col-sm-6 col-xs-12 footer-right">
			<img src="img/vk-logo.png" alt="" class='vk-logo'>
			<div class="footer-box">
				<a href = 'https://vk.com/id157100427'>
					<img src="img/vk.jpg" alt="" class="vk">
				</a>
			</div>
		</div>
	</div>
</footer>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src='js/jquery-ui.min.js'> </script>
  <script src='js/mask.min.js'></script>	
  <script type="text/javascript" src="js/slick.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>
  <!--
  WOW-connect 
  <script src="js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script> -->
  <script type="text/javascript">
  	$(document).ready(function(){
		$(".scroll").click(function (event) {
			//отменяем стандартную обработку нажатия по ссылке
			event.preventDefault();
			//забираем идентификатор бока с атрибута href
			var id  = $(this).attr('href'),

			//узнаем высоту от начала страницы до блока на который ссылается якорь
				top = $(id).offset().top,
				dtop = $(id).css('margin-top');

			top = parseInt(top) - parseInt(dtop);
			
			//анимируем переход на расстояние - top за 1500 мс
			$('body').animate({scrollTop: top}, 1500);
		});
	});
  </script>
  <script>
  	$('#phoneNumber').mask("+7 (999)-999-99-99");
 
  </script>
  <script type='text/javascript'>
  	$(document).ready(function(){
  		$('.sites').slick({
  			infinite: true,
  			slidesToShow: 3,
  			slidesToScroll: 1,
  			autoplay: true,
  			autoplaySpeed: 2000,
 			nextArrow: '<i class="fa fa-chevron-circle-right col-xs-1" aria-hidden="true"></i>',
        	prevArrow: '<i class="fa fa-chevron-circle-left col-xs-1" aria-hidden="true"></i>',
        	responsive: [
        	{
		      	breakpoint: 990,
		      	settings: {
		        	slidesToShow: 2,
		        	slidesToScroll: 1
		        }
		 
		    }]
		  
  		})
	});
  </script>
  <script>
  	var a = Math.round(Math.random()*20),
  		b =	Math.round(Math.random()*20),
  		recordTime = new Date(9991);
  		timeOn = new Date;
  		diff = 5, /*максимальное значение числа*/
  		sum = a+b, /*необходимые блоки*/
  		a1 = -20,
  		b1 = -30, /*варианты обучающегося*/
  		y1 = 50, /*уровень написания уравнения*/
  		areaSize =  50,/*размер поля для кубика*/
  		plusSize = 15, /*длины плюса*/
  		equalSize = 3, /*толщина знака равно*/
  		sum1 = -10; /*сумма вариантов обучающегося*/

/*Проверка праильности решения уравнения*/
  	function isRight(){
  		a1 = parseInt(a1);
  		b1 = parseInt(b1);
  		sum1 = parseInt(sum1);
  		
  	 	if (sum1 == a1+b1){
  	 		return true;
  	 	} else{
  	 		return false;
  	 	}
  	}

  	/*определить падеж секунд*/
  	function endSeconds(time){
  		var end = 0;
  		if ((time % 10 == 1) && ((time % 100) / 10) != 1){
  			end = ' секунда';
  		} else if (((time % 10 == 2) || (time % 10 == 3) || (time % 10 == 4)) && ((time % 100) / 10) != 1){
  			end = ' секунды';
  		} else {
  			end = ' секунд';
  		}
  		return end;
  	}

  	/*проверить установление рекорда и записать новый рекорд*/
  	function isRecord(time){
		
  		if (time < recordTime){
  			recordTime = time;
  			alert('Новый рекорд!!!');
  		} else{
  			alert('Затрачено на решение: ' + time / 1000 + endSeconds(time));
  		}
  			$('#record').text('Рекорд ' + recordTime / 1000 + endSeconds(recordTime));
  			$('#time').text('Затрачено ' + time / 1000 + endSeconds(time));
  	}

 /*Та самая кнопка*/
  	$('#check').click(function(event) {
  		event.preventDefault();
  		if(isRight()){
  			timeOn = - timeOn + Date.now();
  			$('.dropBox').css('background-color', 'green');
  			alert('Верно!');
  			isRecord(timeOn);
  		} else{
  			$('.dropBox').css('background-color', 'red');
  			alert('Ошибка!');
  		}

  	})
 /*Кнопка для старта*/
 	$('#start').click(function(event){
 		event.preventDefault();
 		$('.numBox').draggable('enable');
 		$('.numBox').show();
 		$('.dropBox').text('');
 		$('.dropBox').css('background-color', 'white');
 		
 		createArray();
 		var i =0;
 		for(; i < 10; i++){
			var box = '.nbox-' + i;
			$(box).css({'position': 'absolute', "top":'0', "left": '0'});
			var x = Math.round(Math.random() * (window.innerWidth / 4) + window.innerWidth / 2);
			var y = Math.round(Math.random() * (window.innerHeight / 3) + parseInt($('#start').offset().top));
			$(box).css({"top":y, "left": x});
		}
		timeOn = Date.now();

 	})
 	/*Кнопка наведения порядка*/
 	$('#order').click(function(event){
 		event.preventDefault();
 		$('.numBox').css({'display': 'inline-block', 'position' : 'static'});
 		$('.temp').draggable('disable');
 		$('.temp').show();
 		$('.dropBox').text('');
 		$('.dropBox').css('background-color', 'yellow');
 		$('.numBox').text('');
		var yq = 50;
		var i = 0;
 	})

/*Создание массива вариантов*/
function createArray(){
	var variant = [],
		i = 0;
		for(; i<9; i++){
			variant[i] = Math.round(Math.random()*diff);

			var box = '.nbox-' + i;
			$(box).text(variant[i]);
		}
		variant[9] = variant[8]+variant[7];
		$('.nbox-9').text(variant[i]);

}
$(function() {
	
	$('.numBox').draggable({
		start: function(){
			$('.red').removeClass('red');
			$(this).addClass('red');
		}
	});
	
	$('.dBox-1').droppable({
		drop: function() {
			$('.red').draggable('disable');
			$('.red').hide();
			$('.red').addClass('temp');
			a1 = $('.red').text();
			$('.dBox-1').text(a1);
			$('.dBox-1').css('background-color', 'yellow');
		}
	})
	
	$('.dBox-2').droppable({
		drop: function() {
			$('.red').draggable('disable');
			$('.red').hide();
			$('.red').addClass('temp');
			b1 = $('.red').text();
			$('.dBox-2').text(b1);
			$('.dBox-2').css('background-color', 'yellow');
		}
	})

	$('.dBox-3').droppable({
		drop: function() {
			$('.red').draggable('disable');
			$('.red').hide();
			$('.red').addClass('temp');
			sum1 = $('.red').text();
			$('.dBox-3').text(sum1);
			$('.dBox-3').css('background-color', 'yellow');
		}
	})
})
/*Выбрана коробочка*/

/*Рисование*/
  	window.onload = function() {
    	var drawingCanvas = document.getElementById('canvas');
	    if(drawingCanvas && drawingCanvas.getContext) {
   		 	var context = drawingCanvas.getContext('2d');
   	  // Определим функции отрисовки 
			function drawArea(x, y){
				context.beginPath();
		        context.moveTo(x, y);
	        	context.lineTo(x+areaSize, y);
	   		    context.lineTo(x+areaSize, y+areaSize);
	   		    context.lineTo(x, y+areaSize);
	   		    context.lineTo(x, y);
	   		    context.closePath();
	       		context.strokeStyle = "black";
	        	context.stroke();
			}
			function drawPlus(x, y){
				context.beginPath();
		        context.moveTo(x+(plusSize/2), y+(areaSize-plusSize)/2);
	        	context.lineTo(x+(plusSize/2), y+(areaSize-plusSize)/2+plusSize);
	   		    context.moveTo(x, y+(areaSize/2));
	   		    context.lineTo(x+plusSize,y+(areaSize/2));
	   		    context.closePath();
	       		context.strokeStyle = "black";
	        	context.stroke();
			}
			function drawEqual(x,y){
				context.beginPath();
		        context.moveTo(x, y+(areaSize-equalSize)/2);
	        	context.lineTo(x+(plusSize), y+(areaSize-equalSize)/2);
	   		    context.moveTo(x, y+(areaSize-equalSize)/2+equalSize);
	   		    context.lineTo(x+plusSize,y+(areaSize-equalSize)/2+equalSize);
	   		    context.closePath();
	       		context.strokeStyle = "black";
	        	context.stroke();
			}
			function drawStart(x, y){
				drawArea(x, y);
				drawPlus(x+areaSize+10, y);
				x = x+ areaSize + 10 + plusSize+10;
				drawArea(x, y);
				x += areaSize + 10;
				drawEqual(x, y);
				x += plusSize + 10;
				drawArea(x, y);
			}

			drawStart(50, 50);
			
   		}
   	}

  </script>
</body>

</html>

   