
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
                                <!-- [ stiped-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">

                                           <h5>nom poulailler : {{--  --}}</h5>
                                            <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombres de poules</th>
                                                            <th>prix</th>
                                                            <th>date sortie</th>
                                                            <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($stock_poulets as $stock_poulet)
                                                        <tr>
                                                            <td>{{$stock_poulet->id}}</td>
                                                            <td>{{$stock_poulet->nombre_bStock}}</td>
                                                            <td>{{$stock_poulet->solde}}</td>
                                                            <td>{{$stock_poulet->date_sortie}}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                <a href="{{route('Stock_poulet.edit',$stock_poulet->id)}}" class="btn btn-primary">Modifier</a>
                                                                <form action="{{route('Stock_poulet.destroy',$stock_poulet->id)}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                                </form>
                                                               </div>
                                                            </td>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                           {{-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> --}}
                                        </div>

                                    </div>
                                </div>
                                <!-- [ stiped-table ] end -->
                                 <!-- qjouter end -->
                                    <div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<h5>Ajout </h5>
											{{-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> --}}
										</div>
										<div class="card-body table-border-style">
											<div class="card-body">
												<form {{-- action="{{route('Stock_poulet.store')}}" --}} method="POST">
													@csrf
													<div class="row g-3">
														<div class="col-lg-6">
															<label for="inputEmail4" class="form-label">Nombres de poules</label>
															<input type="number" name="nombre_bStock" class="form-control" placeholder="Nombre de poules" aria-label="First name">
														</div>
														<div class="col-lg-6">
															<label for="prix" class="form-label">Prix</label>
															<input type="number" name="prix" class="form-control" placeholder="prix" aria-label="Last name">
														</div>
                                                        <div class="col-lg-6 mt-3">
															<label for="date" class="form-label">date de sortie</label>
															<input type="datetime-local" name="date" class="form-control" placeholder="date de sortie" aria-label="Last name">
														</div>
														<div class="col-lg-6 mt-3">
															<div class="form-group">
																<label for="exampleFormControlSelect1">poulailler</label>
																<select class="form-control" id="exampleFormControlSelect1" name='poulailler_id'>

                                                                  @foreach ($poulailler as $poulailler)
																	    <option value="{{$poulailler->id}}">{{ $poulailler->nom }}</option>
																    @endforeach

																</select>
															</div>
														</div>
													</div>
													<div class="col-12 mt-5">
														<input type="submit" class="btn btn-primary" value="Ajouter stock">
													</div>
												</form>
											</div>
										</div>
									</div>
                              	</div>
                              <!-- [ stiped-table ] end -->
							</div>

							<!-- [ Main Content ] end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Main Content ] end -->

	<!-- Warning Section start -->
	<!-- Older IE warning message -->
	<!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="../assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="../assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="../assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="../assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="../assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
	<!-- Warning Section Ends -->

	<!-- Required Js -->
	<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/pcoded.min.js')}}"></script>

</body>

</html>
