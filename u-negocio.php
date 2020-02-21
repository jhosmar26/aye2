<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="style/u-negocio.css">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

	</head>
	<body>
		<?php include 'headerSticky.html';?>
		<div class="index-info">
			<div class="index-info-title">
				<h2>¿Qué ofrecemos?</h2>
			</div>
		</div>
<!--		<div class="principal">-->
<!--			<div class="principal-cnt">-->
<!--				<a class="btn btn1"><p>Fabricación y Montaje de Estructuras Metálicas</p></a>-->
<!--			</div>-->
<!--			<div class="principal-cnt">-->
<!--				<a class="btn btn2"><p>Edificación y obras civiles</p></a>-->
<!--			</div>-->
<!--			<div class="principal-cnt">-->
<!--				<a class="btn btn3"><p>Servicios de Instalación de sistemas de Climatización, Sistemas Eléctricos y  de Seguridad</p></a>-->
<!--			</div>-->
<!--			<div class="principal-cnt">-->
<!--				<a class="btn btn4"><p>Mantenimientos de plantas industriales y almacenes</p></a>-->
<!--			</div>-->
<!--		</div>-->
		<div class="newc">
            <div class="card front">
                <div class="content content-front">
                    <p>Fabricación y Montaje de Estructuras Metálicas</p>
                </div>
                <div class="content content-back">
                    <ul class="card-cont">
                        <li class="card-data">
                            Manejo de maquinaria pesada
                        </li>
                        <li class="card-data">
                            Tarrajeo con asfalto
                        </li>
                        <li class="card-data">
                            Remodelado de construccion con material noble
                        </li>
                        <li class="card-data">
                            Ventas
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card front">
                <div class="content content-front">
                    <p>Edificación y obras civiles</p>
                </div>
                <div class="content content-back">
                    <ul class="card-cont">
                        <li class="card-data">
                            Manejo de maquinaria pesada
                        </li>
                        <li class="card-data">
                            Tarrajeo con asfalto
                        </li>
                        <li class="card-data">
                            Remodelado de construccion con material noble
                        </li>
                        <li class="card-data">
                            Ventas
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card front">
                <div class="content content-front">
                    <p>Servicios de Instalación de sistemas de Climatización, Sistemas Eléctricos y de Seguridad</p>
                </div>
                <div class="content content-back">
                    <ul class="card-cont">
                        <li class="card-data">
                            Manejo de maquinaria pesada
                        </li>
                        <li class="card-data">
                            Tarrajeo con asfalto
                        </li>
                        <li class="card-data">
                            Remodelado de construccion con material noble
                        </li>
                        <li class="card-data">
                            Ventas
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card front">
                <div class="content content-front">
                    <p>Mantenimientos de plantas industriales y almacenes</p>
                </div>
                <div class="content content-back">
                    <ul class="card-cont">
                        <li class="card-data">
                            Manejo de maquinaria pesada
                        </li>
                        <li class="card-data">
                            Tarrajeo con asfalto
                        </li>
                        <li class="card-data">
                            Remodelado de construccion con material noble
                        </li>
                        <li class="card-data">
                            Ventas
                        </li>
                    </ul>
                </div>
            </div>
		</div>
		<?php include 'footer.html';?>

		<script>
			$(".card").click(function (e) {
				$(this).toggleClass('front')
			})
		</script>
	</body>
</html>