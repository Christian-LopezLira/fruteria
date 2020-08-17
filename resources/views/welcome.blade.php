<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
	<meta charset="utf-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

	<title> SmartAdmin </title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Basic Styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css') }}">

	<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production-plugins.min.css') }}">
	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production.min.css') }}">
	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-skins.min.css') }}">

	<!-- SmartAdmin RTL Support  -->
	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-rtl.min.css') }}">

	<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

	<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/demo.min.css') }}">

</head>

<body>
	<div id="content">

		<!-- row -->
		<div class="row">

			<!-- col -->
			<center>
				<h1 class="page-title">
					FRUTERÍA
				</h1>
				<img src="img/logo.jpg" alt="" width="30%" height="auto">
			</center>
		</div>
		<!-- end row -->

		<div class="row">
			<div>
				<a href="/frutas/create" class="btn btn-primary btn-lg col-md-offset-2"> Agregar producto</a>
				<br><br><br>
			</div>

			<div class="col-md-8 col-md-offset-2">

				<table class="table table-light">
					<thead class="thead-light">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Cantidad</th>
							<th>Precio</th>
							<th>Descripcion</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($listaFrutas as $sepa)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$sepa->nombre}}</td>
							<td>{{$sepa->cantidad}}</td>
							<td>{{$sepa->precio}}</td>
							<td>{{$sepa->descripcion}}</td>
							<td>
								<a href="{{ url('/frutas/'.$sepa->id.'/edit')  }}" class="btn btn-success">Editar</a>




								<form method="post" action="{{ url('/frutas/'.$sepa->id) }}">
									{{csrf_field()}}
									{{ method_field('DELETE')  }}

									<button type=" submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger"> Borrar</button>


								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!-- widget grid -->
		<section id="widget-grid" class="">
			<div class="row">

				<div class="col-sm-6 col-md-6 col-lg-6">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="product-image">
									<img src="img/frambuesa.jpg" alt="194x228" class="img-responsive">
									<span class="tag2 hot">
										HOT
									</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<a href="#">
											Frambuesa
										</a>
									</h5>
									<p class="price-container">
										<span>$20</span>
									</p>
									<span class="tag1"></span>
								</div>
								<div class="description">
									<p>Rubus idaeus, de nombre común frambueso, es un arbusto perenne del género Rubus nativo de Europa y norte de Asia</p>
								</div>
								<div class="product-info smart-form">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">

										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="rating">
												<input type="radio" name="stars-rating" id="stars-rating-5">
												<label for="stars-rating-5"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-4">
												<label for="stars-rating-4"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-3">
												<label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-2">
												<label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-1">
												<label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>

				<div class="col-sm-6 col-md-6 col-lg-6">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="product-image">
									<img src="img/kiwi.jpg" alt="194x228" class="img-responsive">
									<span class="tag2 sale">
										Sale
									</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<a href="#">
											Kiwi
										</a>
									</h5>
									<p class="price-container">
										<span>$35</span>
									</p>
									<span class="tag1"></span>
								</div>
								<div class="description">
									<p>El kiwi es la baya de la enredadera Actinidia deliciosa. Es originaria de una gran área de China</p>
								</div>
								<div class="product-info smart-form">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="rating">

												<input type="radio" name="stars-rating" id="stars-rating-5">
												<label for="stars-rating-5"><i class="fa fa-star"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-4">
												<label for="stars-rating-4"><i class="fa fa-star"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-3 ">
												<label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-2">
												<label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-1">
												<label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="product-image">
									<img src="img/melon.jfif" alt="194x228" class="img-responsive">
									<span class="tag2 hot">
										HOT
									</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<a href="#">
											Melon
										</a>
									</h5>
									<p class="price-container">
										<span>$20</span>
									</p>
									<span class="tag1"></span>
								</div>
								<div class="description">
									El melón es una planta herbácea monoica de tallos rastreros. Se cultiva por su fruto
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="product-image">
									<img src="img/naranja.jpg" alt="194x228" class="img-responsive">
									<span class="tag2 sale">
										Sale
									</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<a href="#">
											Naranja
										</a>
									</h5>
									<p class="price-container">
										<span>$19</span>
									</p>
									<span class="tag1"></span>
								</div>
								<div class="description">
									<p>La naranja es una fruta cítrica obtenida del naranjo dulce</p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="product-image">
									<img src="img/pina.jfif" alt="194x228" class="img-responsive">
									<span class="tag2 sale">
										Sale
									</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<a href="#">
											Piña
										</a>
									</h5>
									<p class="price-container">
										<span>$48</span>
									</p>
									<span class="tag1"></span>
								</div>
								<div class="description">
									<p>Ananas comosus, la piña, el ananá, ananás o matzatli, es una planta perenne de la familia de las bromeliáceas, nativa de América</p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="product-image">
									<img src="img/platano.jfif" alt="194x228" class="img-responsive">
									<span class="tag2 sale">
										Sale
									</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<a href="#">
											Platano
										</a>
									</h5>
									<p class="price-container">
										<span>$37</span>
									</p>
									<span class="tag1"></span>
								</div>
								<div class="description">
									<p>El nombre científico Musa × paradisiaca y los nombres comunes banano, mínimo, banana, plátano, cambur, topocho, maduro y guineo</p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="product-image">
									<img src="img/uva.jpg" alt="194x228" class="img-responsive">
									<span class="tag2 sale">
										Sale
									</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<a href="#">
											Uva
										</a>
									</h5>
									<p class="price-container">
										<span>$60</span>
									</p>
									<span class="tag1"></span>
								</div>
								<div class="description">
									<p>La uva es una fruta obtenida de la vid. Las uvas vienen en racimos, son pequeñas y dulces.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- end product -->
				</div>

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="product-image">
									<img src="img/sandia.jfif" alt="194x228" class="img-responsive">
									<span class="tag2 sale">
										Sale
									</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
									<h5 class="name">
										<a href="#">
											Sandia
										</a>
									</h5>
									<p class="price-container">
										<span>$7</span>
									</p>
									<span class="tag1"></span>
								</div>
								<div class="description">
									<p>comúnmente llamada sandía, acendría, síndria, patilla, aguamelón o melón de agua </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>




</body>

</html>