<!DOCTYPE html
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" >
		<title></title>
	</head>
	<body>
		<section id="topo-pagina" class="redes-sociais">
			<div class="container">
				<div class="row">
					<div id="topo-pagina1" class="col-sm-12 col-md-12">
						<div class="sp-column">
							<div class="sp-module">
								<div class="">
									<div class="">
										<div class="redes">
											<a href=""> 
												<img src="/images/sociais/icone_sic4x.png">
											</a>
											<a href="" target="_blank" rel="noopener noreferrer"> 
												<img src="/images/sociais/icone_ouvidoria4x.png">
											</a>
											<a href="" target="_blank" rel="noopener noreferrer"> 
												<img src="/images/sociais/icone_facebook4x.png"> 
											</a>
											<a href="" target="_blank" rel="noopener noreferrer"> 
												<img src="/images/sociais/icone_instagram4x.png"> 
											</a>
											<a href="" target="_blank" rel="noopener noreferrer"> 
												<img src="/images/sociais/icone_twitter4x.png">
											</a>
											<a href="" target="_blank" rel="noopener noreferrer"> 
												<img src="/images/sociais/icone_youtube4x.png">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<header id="header" class="animated menu-fixed-out">
			<div class="container">
				<div class="row">
					<div  id="sp-menu" class="dropdown col-xs-2 col-sm-2 col-md-2">
					  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					    <p style="font-size: 23px;background: none;color:#AFCA0B"><i class="fa fa-bars" title="Helix Megamenu Options"></i>MENU</p>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					    <li><a class="dropdown-item" href="#slider" style="color:#9E9E9E">Slide</a></li>
					    <li><a class="dropdown-item" href="#blog" style="color:#9E9E9E">Blog</a></li>
					    <li><a class="dropdown-item" href="#servicos" style="color:#9E9E9E">Serviços</a></li>
					  </ul>
					</div>
					<div id="sp-logo" class="col-xs-4 col-sm-3 col-md-3">
						<div class="sp-column ">
							<div class="logo">
								<a href="/">
									<img class="sp-default-logo visible-xs" src="/images/logo/logogoval.png" alt="">
								</a>
							</div>
						</div>
					</div>
					<div id="sp-title" class="col-xs-6 col-sm-5 col-md-5">
						<div class="sp-column ">
							<div class="sp-module ">
								<div class="sp-module-content">
									<div class="custom">
										<div class="titulo_site">
											<h1>[SIGLA]</h1>
											<p class="sub-title-main">Nome completo do órgão.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="sp-search" class="col-sm-2 col-md-2 hidden-xs">
						<div id="contato">
							<div class="contato-div">
								<div class="btn-contato">
									<p>
										<a href="">
											<button class="buttoncontato" type="button">Contato</button>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div id="pesquisar">
							<div class="pesquisar-div">
								<div class="input-pesquisar">
									<input name="searchword" id="mod-search-searchword" maxlength="200" class="inputbox" type="text" size="10" placeholder="Busque aqui"  style="border: 0!important;margin-top: 14px;"><br> 
									<button class="button btn btn-primary" style="background-color: #9E9E9E; border-color: #9E9E9E;">
										<i class="fa fa-search" aria-hidden="true" style="color:#727272;"></i>
									</button>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="row" id="slider">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 470px;">
					<div class="carousel-inner" style="height:100%">
						<div class="carousel-item active">
							<img src="/images/slide/Noticia1.png" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block" style="background:none;right: 700px!important;bottom: 35px!important;">
							    <h3>[TÍTULO DA NOTÍCIA AQUI]</h3>
						    </div>
						</div>
						<div class="carousel-item">
							<img src="/images/slide/Noticia2.png" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block" style="background:none; right: 700px!important;bottom: 35px!important;">
							    <h3>[TÍTULO DA NOTÍCIA AQUI]</h3>
						    </div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
		<section id="blog">
			<div class="container">
				<div class="d-flex justify-content-center" style="margin-bottom: 3%;">
					<h2 style="color: #AFCA0B;">NOTÍCIAS</h2>
				</div>
				<div class="row">
					<div class="row">
						@foreach ($dados as $dado)
						<div class="col-sm-4 col-md-4 col-xs-4" style="padding-bottom: 30px;">
							<div class="card">
								<img src="{{asset($dado->image)}}" class="card-img-top" alt="...">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="d-flex justify-content-left" style="width: 26px;">
												<img src="/images/icones/calendar.png" style="height: 15px;">

												<span style="color:#646262;font-style: normal;font-weight: 325;font-size: 0.8rem;">
													{{$dado->data}}
												</span>	
											</div>
											
										</div>
										<div class="col-2">
											<div  class="d-flex justify-content-left">
												<img src="/images/icones/clock.png" style="height: 15px;">

												<span style="color:#646262;font-style: normal;font-weight: 325;font-size: 0.8rem;">
													{{$dado->hora}}
												</span>	
											</div>
										</div>
										<div class="col-5">
											<button class="button-noticias" type="button">tema</button>
											<button class="button-noticias" type="button">tema</button>
										</div>
									</div>
									<h5 class="card-title" style="color:#C01466; padding-top: 15px;">{{$dado->titulo}}</h5>
									<div class="d-flex justify-content-start">
										<p>
											<a href="">
												<button class="button-ver-mais" type="button">Ver mais</button>
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center" style="margin-top: 3%;">
				<p>
					<a href="">
						<button class="button-noticias" type="button" style="padding: 2px 25px; width: 114px; height: 35px;font-size: 16px!important;">+Notícias</button>
					</a>
				</p>
			</div>
		</section>
		<section id="servicos">
			<div class="d-flex justify-content-center" style="padding-top: 2%;padding-bottom: 1%;">
				<h2 style="color: #FFF;">SERVIÇOS</h2>
			</div>
			<div class="container">
				<div class="d-flex justify-content-center">
					<div>
						<a href="">
							<img class="image-servico" src="/images/icones/napd.png" alt="">
						</a>
					</div>
					<div>
						<a href="">
							<img class="image-servico" src="/images/icones/nutricional.png" alt="">
						</a>
					</div>
					<div>
						<a href="">
							<img class="image-servico" src="/images/icones/restaurante.png" alt="">
						</a>
					</div>
					<div>
						<a href="">
							<img class="image-servico" src="/images/icones/vigilancia.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</section>
		<section id="rodape">
			<div class="rodape-redes-sociais">
				<div class="d-flex justify-content-center">
					<div style="margin-right: 1%; color:#FFF;">
						<h4>SIGA A GENTE</h4>						
					</div>
					<div>
						<a href="" target="_blank" rel="noopener noreferrer"> 
							<img class="image-rodape" src="/images/sociais/icone_facebook4x.png"> 
						</a>
					</div>
					<div>
						<a href="">
							<img class="image-rodape" src="/images/sociais/icone_instagram4x.png"> 
						</a>
					</div>
					<div>
						<a href="">
							<img class="image-rodape" src="/images/sociais/icone_twitter4x.png"> 
						</a>
					</div>
					<div>
						<a href="">
							<img class="image-rodape" src="/images/sociais/icone_youtube4x.png"> 
						</a>
					</div>
				</div>
			</div>
			<div class="rodape-informacoes">
				<div class="container">
					<div class="row" style="padding: 30px !important;">
						<div class="col-6">
							<div class="">
								<a href="/">
									<img class="image-rodape-informacoes" src="https://www.itec.al.gov.br/images/logo_gov_branca.png" alt="">
								</a>
							</div>
							<div class="titulo_site" style="padding-top:20px; color:#FFF;">
								<h3>[SIGLA]</h3>
								<h6 class="sub-title-main">Nome completo do órgão.</h6>
							</div>
							<div class="d-flex justify-content-left" style="padding-top:28px">
								<img src="/images/icones/phone.png" style="height: 17px;">

								<span style="color:#FFF;">(82) 0000-0000</span>
							</div>
							<div class="d-flex justify-content-left" style="padding-top:1%">
								<img src="/images/icones/location.png" style="height: 17px;">

								<span style="color:#FFF;">[rua], n. 00 - CEP 00000-000 - [Cidade]</span>
							</div>
							<div style="padding-top:2%;">
								<p>
									<a href="">
										<button class="button-rodape-mapa" type="button" style="">VER MAPA</button>
									</a>
								</p>
							</div>
							<div class="divider" style="margin-top:2%;height: 3px;background: #FFF;">
								
							</div>
							<div class="d-flex justify-content-left" style="padding-top:3%;">
								<div>
								<a href="" target="_blank" rel="noopener noreferrer"> 
									<img class="image-rodape-redes" src="/images/sociais/icone_facebook4x.png"> 
								</a>
								</div>
								<div>
									<a href="">
										<img class="image-rodape-redes" src="/images/sociais/icone_twitter4x.png">
									</a>
								</div>
								<div>
									<a href="">
										<img class="image-rodape-redes" src="/images/sociais/icone_instagram4x.png"> 
									</a>
								</div>
								<div>
									<a href="">
										<img class="image-rodape-redes" src="/images/sociais/icone_youtube4x.png"> 
									</a>
								</div>
							</div>
						</div>
						<div class="col-3" style="padding-top: 40px;">
							<div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Início</button>
										</a>
									</p>
								</div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Institucional</button>
										</a>
									</p>
								</div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Notícias</button>
										</a>
									</p>
								</div>
							</div>
							<div style="padding-top:20px;">
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Arquivo público</button>
										</a>
									</p>
								</div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Legislação</button>
										</a>
									</p>
								</div>
							</div>
							<div style="padding-top:20px;">
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Alagoas</button>
										</a>
									</p>
								</div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Contato</button>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-3" style="padding-top:40px">
							<div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Início</button>
										</a>
									</p>
								</div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Institucional</button>
										</a>
									</p>
								</div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Notícias</button>
										</a>
									</p>
								</div>
							</div>
							<div style="padding-top:20px;">
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Arquivo público</button>
										</a>
									</p>
								</div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Legislação</button>
										</a>
									</p>
								</div>
							</div>
							<div style="padding-top:20px;">
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Alagoas</button>
										</a>
									</p>
								</div>
								<div>
									<p>
										<a href="">
											<button class="button-rodape-info" type="button">Contato</button>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="rodape-inferior">
				<div class="d-flex justify-content-between rodape-inferior-info">
					<div>
						<h6 class="rodape-inferior-texto" style="color: #FFF!important;">
							Governo do Estado de Alagoas 
						</h6>
						<span class="rodape-inferior-texto" style="color: #FFF!important;">
							2022 - Versão para teste
						</span>
					</div>
					<div class="" style="margin-right: 80px;">
						<a href="/">
							<img class="image-rodape-informacoes" src="/images/logo/itec_iso_9001.png" alt="" style="height:65px;">
						</a>
					</div>
				</div>
			</div>
		</section>
		<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>