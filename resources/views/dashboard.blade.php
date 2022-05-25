<!DOCTYPE html>
<html lang="en">

<head>

	<title>poulailler</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
	<meta name="author" content="Codedthemes" />

	<!-- Favicon icon -->
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
	<!-- animation css -->
	<link rel="stylesheet" href="{{asset('assets/plugins/animation/css/animate.min.css')}}">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
            @include('layouts.nav')
            @include('layouts.sidebar')



	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							<!-- [ breadcrumb ] start -->
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5>Accueil</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#!">Tableau de bord</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							<div class="row">

								<!-- product profit start -->
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-red">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Total Poulailler</h6>
													<h3 class="m-b-0 text-white">5</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-money-bill-alt text-c-red f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-blue">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Stocks-Poules</h6>
													<h3 class="m-b-0 text-white">2500</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-database text-c-blue f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-green">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Materiel</h6>
													<h3 class="m-b-0 text-white">100000Fr</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-dollar-sign text-c-green f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-yellow">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Produits</h6>
													<h3 class="m-b-0 text-white">50 sacs</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-tags text-c-yellow f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-8 col-md-6">
									<div class="card table-card">
										<div class="card-header">
											<h5>liste stocke poulets</h5>
										</div>
										<div class="card-body px-0 py-0">
											<div class="table-responsive">
												<div class="session-scroll" style="height:478px;position:relative;">
													<table class="table table-hover m-b-0">
														<thead>
															<tr>
																<th><span>#</span></th>
																<th><span>nombres de stocke </span></th>
																<th><span>date de stockes </span></th>
                                                                <th><span>prix unitaire</span></th>
																<th><span>prix total </span></th>
                                                                <th><span>prix unitaire</span></th>
																<th><span>prix total </span></th>

															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Total and average</td>
																<td>1300</td>
																<td>1025</td>
																<td>14005</td>
																<td>95,3%</td>
                                                                <td>95,3%</td>
															</tr>
															<tr>
																<td>8-11-2016</td>
																<td>1300</td>
																<td>1025</td>
																<td>14005</td>
																<td>95,3%</td>
                                                                <td>1300</td>
																<td>1025</td>
																<td>14005</td>
																<td>95,3%</td>

														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- sessions-section end -->
								<div class="col-md-6 col-xl-4">
									<div class="card user-card">
										<div class="card-header">
											<h5>Profile</h5>
										</div>
										<div class="card-body  text-center">
											<div class="usre-image">
												<img src="../assets/images/widget/img-round1.jpg" class="img-radius wid-100 m-auto" alt="User-Profile-Image">
											</div>
											<h6 class="f-w-600 m-t-25 m-b-10">power-éleveur</h6>
											<p>Thies | Sampathe | Rue 26</p>
											<hr>
											<p class="m-t-15">Activité : élevages </p>
											<div class="bg-c-blue counter-block m-t-10 p-20">
												<div class="row">
													<div class="col-4">
														<i class="fas fa-calendar-check text-white f-20"></i>
														<h6 class="text-white mt-2 mb-0">1256</h6>
													</div>
													<div class="col-4">
														<i class="fas fa-user text-white f-20"></i>
														<h6 class="text-white mt-2 mb-0">8562</h6>
													</div>
													<div class="col-4">
														<i class="fas fa-folder-open text-white f-20"></i>
														<h6 class="text-white mt-2 mb-0">189</h6>
													</div>
												</div>
											</div>
											<p class="m-t-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
											<hr>
											<div class="row justify-content-center user-social-link">
												<div class="col-auto"><a href="#!"><i class="fab fa-facebook-f text-primary f-22"></i></a></div>
												<div class="col-auto"><a href="#!"><i class="fab fa-twitter text-c-info f-22"></i></a></div>
												<div class="col-auto"><a href="#!"><i class="fab fa-dribbble text-c-red f-22"></i></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- [ Main Content ] end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Required Js -->
	<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	{{-- <script src="{{asset('assets/js/pcoded.min.js')}}"></script> --}}

</body>

</html>
