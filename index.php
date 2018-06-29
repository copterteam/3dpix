<?
$parametr1=$_GET['p'];

if($parametr1){  header('HTTP/1.1 404 Not Found');  }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">


<title>Купить беспилотник для аэрофотосъемки |  KBGO - КБ Горбунова А.А.</title>
<meta name="description" content="Профессиональный беспилотник S900 Индиго с автономным вертикальным взлетом и посадкой для геодезической аэрофотосъемки и картографии." />


<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="_css/fonts.css" type="text/css" media="screen">
<link rel="stylesheet" href="_css/main.css" type="text/css" media="screen">
<link rel="stylesheet" href="_css/landing.css" type="text/css" media="screen">


</head>
<body  itemscope itemtype="http://schema.org/Product">
<?include("header.php"); 


$city_name=array(  array('pid'=>1,'name'=>'Москва'),  array('pid'=>1,'name'=>'Санкт-Петербург'),  array('pid'=>1,'name'=>'Новосибирск'),  array('pid'=>1,'name'=>'Екатеринбург'),  array('pid'=>1,'name'=>'Нижний Новгород'),  array('pid'=>1,'name'=>'Самара'),  array('pid'=>1,'name'=>'Омск'),  array('pid'=>1,'name'=>'Казань'),  array('pid'=>1,'name'=>'Челябинск'),  array('pid'=>1,'name'=>'Ростов-на-Дону'),  array('pid'=>1,'name'=>'Уф'),  array('pid'=>1,'name'=>'Пермь'),  array('pid'=>1,'name'=>'Волгоград'),  array('pid'=>1,'name'=>'Красноярск'),  array('pid'=>1,'name'=>'Воронеж'),  array('pid'=>1,'name'=>'Саратов'),  array('pid'=>1,'name'=>'Краснодар'),  array('pid'=>1,'name'=>'Тольятти'),  array('pid'=>1,'name'=>'Барнаул'),  array('pid'=>1,'name'=>'Ижевск'),array('pid'=>1,'name'=>'Ульяновск'),  array('pid'=>1,'name'=>'Ярославль'),  array('pid'=>1,'name'=>'Владивосток'),  array('pid'=>1,'name'=>'Хабаровск'),  array('pid'=>1,'name'=>'Иркутск'),  array('pid'=>1,'name'=>'Новокузнецк'),  array('pid'=>1,'name'=>'Тюмень'),  array('pid'=>1,'name'=>'Оренбург'),  array('pid'=>1,'name'=>'Кемерово'),  array('pid'=>1,'name'=>'Рязань'),array('pid'=>1,'name'=>'Пенза'),  array('pid'=>1,'name'=>'Набережные Челны'),  array('pid'=>1,'name'=>'Тула'),  array('pid'=>1,'name'=>'Липецк'),  array('pid'=>1,'name'=>'Астрахань'),  array('pid'=>1,'name'=>'Томск'),  array('pid'=>1,'name'=>'Махачкала'),  array('pid'=>1,'name'=>'Киров'),  array('pid'=>1,'name'=>'Чебоксары'),  array('pid'=>1,'name'=>'Калининград'),  array('pid'=>1,'name'=>'Брянск'),  array('pid'=>1,'name'=>'Магнитогорск'),  array('pid'=>1,'name'=>'Иваново'),  array('pid'=>1,'name'=>'Курск'),  array('pid'=>1,'name'=>'Тверь'),  array('pid'=>1,'name'=>'Нижний Тагил'),  array('pid'=>1,'name'=>'Ставрополь'),  array('pid'=>1,'name'=>'Архангельск'),  array('pid'=>1,'name'=>'Белгород'),  array('pid'=>1,'name'=>'Улан-Удэ'),  array('pid'=>1,'name'=>'Владимир'),  array('pid'=>1,'name'=>'Сочи'),  array('pid'=>1,'name'=>'Калуга'),  array('pid'=>1,'name'=>'Курган'),  array('pid'=>1,'name'=>'Орёл'),  array('pid'=>1,'name'=>'Мурманск'),  array('pid'=>1,'name'=>'Смоленск'),  array('pid'=>1,'name'=>'Владикавказ'),  array('pid'=>1,'name'=>'Череповец'),  array('pid'=>1,'name'=>'Волжский'),  array('pid'=>1,'name'=>'Чита'),  array('pid'=>1,'name'=>'Саранск'),array('pid'=>1,'name'=>'Сургут'),  array('pid'=>1,'name'=>'Вологда'),array('pid'=>1,'name'=>'Тамбов'),  array('pid'=>1,'name'=>'Кострома'),array('pid'=>1,'name'=>'Комсомольск-на-Амуре'),  array('pid'=>1,'name'=>'Нальчик'),  array('pid'=>1,'name'=>'Петрозаводск'),  array('pid'=>1,'name'=>'Стерлитамак'),  array('pid'=>1,'name'=>'Таганрог'),  array('pid'=>1,'name'=>'Братск'),  array('pid'=>1,'name'=>'Дзержинск'),  array('pid'=>1,'name'=>'Йошкар-Ола'),  array('pid'=>1,'name'=>'Орск'),  array('pid'=>1,'name'=>'Шахты'),  array('pid'=>1,'name'=>'Якутск'),  array('pid'=>1,'name'=>'Ангарск'),  array('pid'=>1,'name'=>'Нижневартовск'),  array('pid'=>1,'name'=>'Новороссийск'),  array('pid'=>1,'name'=>'Сыктывкар'),  array('pid'=>1,'name'=>'Нижнекамск'),  array('pid'=>1,'name'=>'Бийск'),  array('pid'=>1,'name'=>'Грозный'),  array('pid'=>1,'name'=>'Старый Оскол'),  array('pid'=>1,'name'=>'Великий Новгород'),  array('pid'=>1,'name'=>'Прокопьевск'),  array('pid'=>1,'name'=>'Рыбинск'),  array('pid'=>1,'name'=>'Норильск'),  array('pid'=>1,'name'=>'Благовещенск'),  array('pid'=>1,'name'=>'Энгельс'),  array('pid'=>1,'name'=>'Балаково'),  array('pid'=>1,'name'=>'Петропавловск-Камчатский'),  array('pid'=>1,'name'=>'Псков'),  array('pid'=>1,'name'=>'Северодвинск'),  array('pid'=>1,'name'=>'Армавир'),  array('pid'=>1,'name'=>'Златоуст'),  array('pid'=>1,'name'=>'Балашиха'),  array('pid'=>1,'name'=>'Каменск-Уральский'),  array('pid'=>1,'name'=>'Химки'),  array('pid'=>1,'name'=>'Сызрань'),  array('pid'=>1,'name'=>'Подольск'),array('pid'=>1,'name'=>'Новочеркасск'),  array('pid'=>1,'name'=>'Королёв'),  array('pid'=>1,'name'=>'Южно-Сахалинск'),  array('pid'=>1,'name'=>'Волгодонск'),  array('pid'=>1,'name'=>'Находка'),  array('pid'=>1,'name'=>'Березники'),  array('pid'=>1,'name'=>'Абакан'),  array('pid'=>1,'name'=>'Мытищи'),  array('pid'=>1,'name'=>'Люберцы'),  array('pid'=>1,'name'=>'Рубцовск'),  array('pid'=>1,'name'=>'Майкоп'),  array('pid'=>1,'name'=>'Салават'),array('pid'=>1,'name'=>'Уссурийск'),  array('pid'=>1,'name'=>'Миасс'),array('pid'=>1,'name'=>'Ковров'),  array('pid'=>1,'name'=>'Коломна'),array('pid'=>1,'name'=>'Электросталь'),  array('pid'=>1,'name'=>'Альметьевск'),  array('pid'=>1,'name'=>'Пятигорск'),  array('pid'=>1,'name'=>'Копейск'),  array('pid'=>1,'name'=>'Первоуральск'),  array('pid'=>1,'name'=>'Назрань'),  array('pid'=>1,'name'=>'Одинцово'),  array('pid'=>1,'name'=>'Невинномысск'),  array('pid'=>1,'name'=>'Кисловодск'),  array('pid'=>1,'name'=>'Димитровград'),  array('pid'=>1,'name'=>'Новомосковск'),  array('pid'=>1,'name'=>'Новочебоксарск'),  array('pid'=>1,'name'=>'Хасавюрт'),  array('pid'=>1,'name'=>'Серпухов'),  array('pid'=>1,'name'=>'Орехово-Зуево'),  array('pid'=>1,'name'=>'Муром'),  array('pid'=>1,'name'=>'Камышин'),  array('pid'=>1,'name'=>'Железнодорожный'),  array('pid'=>1,'name'=>'Нефтекамск'),  array('pid'=>1,'name'=>'Новый Уренгой'),  array('pid'=>1,'name'=>'Черкесск'),  array('pid'=>1,'name'=>'Ногинск'),  array('pid'=>1,'name'=>'Новошахтинск'),  array('pid'=>1,'name'=>'Нефтеюганск'),  array('pid'=>1,'name'=>'Щёлково'),  array('pid'=>1,'name'=>'Елец'),  array('pid'=>1,'name'=>'Ачинск'),  array('pid'=>1,'name'=>'Новокуйбышевск'),  array('pid'=>1,'name'=>'Сергиев Посад'),  array('pid'=>1,'name'=>'Ноябрьск'),  array('pid'=>1,'name'=>'Кызыл'),  array('pid'=>1,'name'=>'Октябрьский'),  array('pid'=>1,'name'=>'Дербент'),  array('pid'=>1,'name'=>'Северск'),  array('pid'=>1,'name'=>'Ленинск-Кузнецкий'),  array('pid'=>1,'name'=>'Арзамас'),  array('pid'=>1,'name'=>'Обнинск'),  array('pid'=>1,'name'=>'Междуреченск'),  array('pid'=>1,'name'=>'Ухта'),  array('pid'=>1,'name'=>'Киселёвск'),  array('pid'=>1,'name'=>'Новотроицк'),  array('pid'=>1,'name'=>'Батайск'),  array('pid'=>1,'name'=>'Элиста'),  array('pid'=>1,'name'=>'Артём'),array('pid'=>1,'name'=>'Жуковский'),  array('pid'=>1,'name'=>'Великие Луки'),  array('pid'=>1,'name'=>'Канск'),  array('pid'=>1,'name'=>'Магадан'),  array('pid'=>1,'name'=>'Тобольск') );
 
asort($city_name);

 
?>

<div class="main_content">

<div class="slide1">
  <div class="center-container">
    <div class="rightcolumn">
      <!--<div class="beginform">
        <form id="beginform">
	        <input type="text" name="username" placeholder="Ваше Имя">
		      <input type="text" name="usermail" placeholder="Ваш E-mail">
          <button>Узнать стоимость</button>
	      </form>
	
      </div>-->
   </div>
   <span class="utp"><h1>Купить беспилотник для<br/>аэрофотосъемки и картографии</h1></span>
	 <span class="utp mini"><h2 itemprop="description">Профессиональный беспилотный комплекс Индиго на базе гексакоптера для автономной геодезической аэрофотосъемки</h2></span>
  
	 <ul>
     <li>Беспилотник Индиго позволяет:</li>
     <li>Работать в условиях ограниченного пространства</li>
     <li>Выполнять полет полностью автономно</li>
     <li>Создавать подробные карты и 3-D модели поверхности</li>
  </ul>
 
  <div class="profits desktop">
    <div class="icon"><strong>1</strong></div>
      <div class="desc">Не требует дополнительного стартового оборудования для выполнения работ на объекте</div>
	  <div class="icon"><strong>2</strong></div>
		  <div class="desc">Управляется с ноутбука или планшета без специальных навыков ручного управления</div>
 	  <div class="icon"><strong>3</strong></div>
      <div class="desc">Обеспечивает разрешение снимков до 5 см/px с высокой точностью GPS привязки</div>
	  
  </div>


  <div class="clearfix"></div>
	
  </div>
</div>


<div class="slide2 img_gal">
  
  <h2><span itemprop="name">S900 Индиго</span> - профессиональный беспилотник <br> для аэрофотосъемки</h2>
  	
	<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject" >
	
	<a class="blueimp" href="img/indigo_main.jpg" itemprop="url"><img itemprop="thumbnail"  class="img-topoffer" src="img/indigo_main_s.jpg" alt="S900 Indigo - беспилотник для аэрофотосъемки купить"></a>
	
	</span>
     
 	<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject" >
	
	<a class="blueimp" href="img/indigo_main2.jpg" itemprop="url"  style="display:none;"><img itemprop="thumbnail" src="img/indigo_main2_s.jpg" alt="S900 Indigo - беспилотник для геодезии купить" class="gal_image"></a>
	
	</span>
	 	<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject" >
		
		<a class="blueimp" href="img/indigo_main3.jpg" itemprop="url" style="display:none;"><img itemprop="thumbnail" src="img/indigo_main3_s.jpg" alt="S900 Indigo - беспилотник для картографии купить" class="gal_image"></a>
	
	</span>
		 <span itemprop="image" itemscope itemtype="http://schema.org/ImageObject" >	
		 
		 <a class="blueimp" href="img/indigo_main4.jpg" itemprop="url"  style="display:none;"><img itemprop="thumbnail" src="img/indigo_main4_s.jpg" alt="Профессиональный беспилотник для аэрофотосъемки" class="gal_image"></a>
	
	</span>
				<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject" >
				
				<a class="blueimp" href="img/indigo_compact.jpg" itemprop="url" style="display:none;"><img itemprop="thumbnail" src="img/indigo_compact_s.jpg" alt="Беспилотник S900 Indigo - транспортировочное сотояние" class="gal_image"></a>
	
	</span>
		
		<ul class="profits" >
		  <li>Ключевые особенности комплекса:</li>
		   <li itemprop="description">Разработан на базе стабильной мультироторной платформы S900</li>
		   <li itemprop="description">Полностью автономная работа с управлением через наземную станцию</li>
		   <li itemprop="description">Минимальные требования к пространству для взлета и посадки</li>
		   <li itemprop="description">Независимая парашютная система экстренного спасения (опция)</li>
		   <li itemprop="description">Автоматическая привязка GPS координат к фотоснимкам в полете</li>
		   <li itemprop="description">Центральный блок управления системами полета в герметичном исполнении</li>

		   <button type="button" id="act-button">Посмотреть видео полета</button>
		</ul>
		
		
		<div class="clearfix"></div>
	
	    <div class="steptab">
	    <h3>1. Подготовка к полету</h3>
		<p>
		Все стартовое оборудование умещается в одном небольшом ящике. Подготовка к полету 5-10 минут. Минимальные предстартовые проверки и калибровки.
		Площадка для взлета и посадки 5х5 метров. Удаленность от выбранного объекта съемки до 1000 метров. 
		</p>
	    </div>
		
		 <div class="steptab">
	    <h3>2. Простота управления</h3>
		<p>
		Полетные задания для беспилотного комплекса Индиго создаются на ноутбуке или планшете через понятный и удобный интерфейс. 
		Внесение изменений в программу полета возможно в любое время, в том числе и в процессе ее выполнения в воздухе.
		</p>
	    </div>
		
		 <div class="steptab">
	    <h3>3. Обработка материалов</h3>
		<p>
		Результатом выполнения полетного задания является набор фотоснимков под заданным углом к поверхности 
		и с привязкой центров изображений к GPS координатам местности. Полученный набор файлов позволяет создавать 3D-модель для дальнейшего анализа.
		</p>
	    </div>
  
</div>
	<div class="pline"></div>


<div class="slide3">
  
  <h2>Полезная нагрузка - фотокамера на двухосевом подвесе<br> обеспечивает гиростабилизированную съемку</h2>
  	
		<div class="slider_container">
  	<div id="slider_main">

	  <div class="nextslide">
	    <img src="/img/gimbal_front.jpg" alt="Двухосевой подвес для аэрофотосъемки" style="display:block;margin:0 auto;width:450px;">
			<span></span>
			<span></span>
	  </div>
	  	  <div class="nextslide">
	    <img src="/img/gimbal_angle.jpg" alt="Двухосевой подвес для фотокамеры Sony" style="display:block;margin:0 auto;width:450px;">
			<span></span>
			<span></span>
	  </div>
	  
	   	  <div class="nextslide">
	    <img src="/img/gimbal_left.jpg" alt="Двухосевой подвес для Sony Alpha" style="display:block;margin:0 auto;width:420px;">
			<span></span>
			<span></span>
	  </div>
	  

   <div class="nextslide">
	    <img src="/img/mapping.png" alt="Составление карты местности по фотографиям" style="display:block;margin:50px auto;width:450px;">
			<span></span>
			<span></span>
	  </div>
 
	</div>
	
 </div>
	
	<div class="slidertext" >
		<h3>Автономная аэрофотосъемка</h3>
		<p>
		Беспилотник выполняет автоматическую аэрофотосъемку местности по загруженной сетке снимков в полетном задании. Каждый снимок получает привязку к координатам GPS и может быть выполнен с разрешением до 5 см/px.
		</p>
		
		<ul class="profits" style="margin-top:20px;">
		 <li>Технические характеристики камеры:</li>
		 <li>Разрешение матрицы:	20.1 МПикс</li>
         <li>Тип матрицы:	"Exmor" APS HD CMOS</li>
		 <li>Диапазон выдержки:	30 - 1/4000 сек</li>
		 <li>Диапазон ISO:	100 - 16000</li>
		 <li>Фокусное расстояние:	16 - 50 мм</li>
		 <li>Светосила: F:3.5 - 5.6</li>


		 
	
		 

		   <button type="button" id="act-button">Посмотреть видео с борта</button>
		</ul>
		
	</div>	
		
		<div class="clearfix"></div>
	
  
</div>
	
		<div class="pline"></div>

	<div class="pricelist" >
	  <h2>Комплектации и цены</h2>
	  
	  
	  <div class="coplect_item">
	  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
	  <strong class="complect_name" itemprop="name">1. Комплектация "Базовый специалист" </strong>
	  <img class="complect_image" itemprop="image" src="/img/complect.jpg" width="400" alt="Профессиональный беспилотник для аэрофотосъемки Индиго">
	  <span class="complect_desc">
	  <ul>
	   <li>В комплект входит:</li>
		 <li>Гексакоптер S900 Индиго</li>
         <li>Двухосевой подвес</li>
		 <li>Фотокамера Sony Alpha A5000</li>
		 <li>Транспортировочный кейс</li>
		 <li>Планшет 10" на штативе</li>
		 <li>Приложение наземной станции</li>
		 <li>Аккумулятор 6S 22 000 mAh</li>
		 <li>Зарядное устройство</li>
	  </ul>
	  </span>
	  <span class="complect_price">
	  <meta itemprop="price" content="375000">
	    <meta itemprop="priceCurrency" content="RUB">
	     <link itemprop="availability" href="http://schema.org/InStock">
		 
	  <strong class="price">375 000 руб.</strong>
	  
	  		   <button type="button" id="buy-button">Купить</button>

	  </span>
	  
	  	<div class="devider"></div>
	  </div>
	  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
	  
	  <strong class="complect_name" itemprop="name">2. Комплектация "Базовый специалист" + опция "Видеоканал" </strong>
	  <img class="complect_image" itemprop="image" src="/img/complect2.jpg" width="400"  alt="Профессиональный беспилотник для аэрофотосъемки Индиго">
	  <span class="complect_desc">
	  <ul>
	   <li>В комплект входит:</li>
		 <li>Гексакоптер S900 Индиго</li>
         <li>Двухосевой подвес</li>
		 <li>Фотокамера Sony Alpha A5000</li>
		 <li>Видеоканал 5.8 GHz</li>
		 <li>Монитор 8" с приемником</li>
		 <li>Транспортировочный кейс</li>
		 <li>Планшет 10" на штативе</li>
		 <li>Приложение наземной станции</li>
		 <li>Аккумулятор 6S 22 000 mAh</li>
		 <li>Зарядное устройство</li>
	  </ul>
	  </span>
	  <span class="complect_price">
	   <meta itemprop="price" content="410000">
	    <meta itemprop="priceCurrency" content="RUB">
	     <link itemprop="availability" href="http://schema.org/InStock"> 
		 
	  <strong class="price">410 000 руб.</strong>
	  
	  		   <button type="button" id="buy-button">Купить</button>

	  </span>
	
	  
	  	<div class="devider"></div>
	  
	       </div>
		   <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
	  <strong class="complect_name" itemprop="name">3. Комплектация "RTK Геодезия" </strong>
	  <img class="complect_image" itemprop="image" src="/img/complect-rtk.jpg" width="400" alt="Промышленный беспилотник для геодезии Indigo-RTK">
	  <span class="complect_desc">
	  <ul>
	   <li>В комплект входит:</li>
		 <li>Гексакоптер S900 Индиго</li>
         <li>Двухосевой подвес</li>
		 <li>Фотокамера Sony Alpha A5000</li>
		 <li>Транспортировочный кейс</li>
		 <li>Ноутбук 15" на штативе</li>
		 <li>Базовая станция RTK на штативе</li>
		 <li>Приложение наземной станции</li>
		 <li>Аккумулятор 6S 22 000 mAh</li>
		 <li>Зарядное устройство</li>
	  </ul>
	  </span>
	  <span class="complect_price">
	  <meta itemprop="price" content="495000">
	    <meta itemprop="priceCurrency" content="RUB">
	     <link itemprop="availability" href="http://schema.org/InStock">
		 
	  <strong class="price">499 000 руб.</strong>
	  
	  		   <button type="button" id="buy-button">Купить</button>

	  </span>
	  
	  
	  </div>
	  
	  
	  
	    </div>
	   
	</div>  
	
	
	<div class="pline"></div>

	<div class="contacts">
	  <h2>Обратная связь</h2>
	  
	  <p class="label">Телефон в Санкт-Петербурге:</p>
	  <div class="phone">(812) 309-74-15</div>
	  
	  <p class="label">Адрес электронной почты:</p>
	  <div class="email">copter@kbgo.ru</div>
	  
	  <form id="contact_form">
	   <label class="header">Форма обратной связи</label>
	   <label>Ваше имя<strong>*</strong>:</label><input name="username" type="text" />
	   <label>Номер телефона<strong>*</strong>:</label><input name="userphone" type="text"  />
	   <label>E-mail:</label><input name="usermail" type="text" />
	   <textarea placeholder="Напишите Ваше сообщение" name="usertext"></textarea> 
	   <button type="submit" >Оставить заявку</button>
	   
		<span class="agreement">Нажимая на кнопку, вы даете <a href="/agreement" target="_blank">согласие на обработку</a> своих персональных данных</span>

	    <p class="label afterform">Вы можете оставить заявку в письменном виде, указав в комментариях ориентировочные параметры требуемого беспилотника и круг предполагаемых задач для него. Тогда мы сможем заранее подготовить и просчитаем возможные варианты решения под различный бюджет и ориентировочные сроки, чтобы вы смогли купить беспилотник для аэрофотосъемки.</p>
		  
		  <img src="/img/loading.gif" class="loading">
	  </form>
	
			<div class="clearfix"></div>
		
			
	
	</div>






 
 </div>
 
 
<?include("footer.php"); ?>

<link rel="stylesheet" href="_css/anythingslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="_css/slider_extra.css" type="text/css" media="screen">
<link rel="stylesheet" href="_css/blueimp-gallery.css" type="text/css" media="screen">

	
	<div id="blueimp_container">
	<div class="carousel_div">
	<div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel blueimp-gallery-controls">
	<div class="slides"></div>
	 <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
	</div>
	</div>
	<div class="info_div">
	
	</div>
	</div>

	
</body>
</html>


<script src="/_js/jquery-1.11.3.min.js"></script>
<script src="/_js/jquery.easing.1.3.js"></script>
<script src="/_js/jquery.color-2.1.2.min.js"></script>
<script src="/_js/jquery.validate.min.js"></script>
<script src="/_js/jquery.inputmask.js"></script>
<script src="/_js/jquery.anythingslider.min.js"></script>
<script src="/_js/blueimp-gallery.min.js"></script>

	<script>
	$('a.blueimp').click(function(clc){
		clc.preventDefault();
		
		var imglist = [];

		$(this).parents('div.img_gal').find('a.blueimp').each(function(i){

         imglist[i] = {
			href: $(this).attr('href'), 
			title: $(this).find('img').attr('alt')			
			  }; 
		});
		
		var gallery = blueimp.Gallery( imglist,
		      {   
			  container: '#blueimp-gallery-carousel', 
			  carousel: true, 
			  startSlideshow: false, 
			  hidePageScrollbars: true, 
			  closeOnSlideClick: true,
			  thumbnailIndicators: false, 
			  onclose: function () {
                
			  }});
		
	});
	
</script>

	
		<script src="_js/main.js"></script>
		<script src="_js/landing.js"></script>

		<script>if(isMobile.mini()){ $('head meta:[name="viewport"]').attr('content','width=device-width, initial-scale=0.327');$('head link:[href="_css/main.css"]').attr('href','_css/main_m.css'); $('head link:[href="_css/landing.css"]').attr('href','_css/landing_m.css');}</script>

		