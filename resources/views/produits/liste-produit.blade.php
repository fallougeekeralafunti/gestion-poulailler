
<!DOCTYPE html>
<html lang="en">

<head>

	<title>produit</title>

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
								<div class="col-md-12 col-xl-4">
									<div class="card card-social">
										<div class="card-block border-bottom">
											<div class="row align-items-center justify-content-center">
												<div class="col text-right">
													<h3>25 Sacs</h3>

													<h5 class="text-c-blue mb-0"><span class="text-muted">Aliment de Croissance</span></h5>
                                                    <h6 class="text-c-blue  m-b-10"><span class="text-muted m-r-5">Dur??e:</span>15 jours</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="card card-social">
										<div class="card-block border-bottom">
											<div class="row align-items-center justify-content-center">
												<div class="col text-right">
													<h3>45 25 Sacs</h3>
													<h5 class="text-c-info mb-0"><span class="text-muted">Aliment de Croissance</span></h5>
                                                    <h6 class="text-c-blue  m-b-10"><span class="text-muted m-r-5">Dur??e:</span>15 jours</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xl-4">
									<div class="card card-social">
										<div class="card-block border-bottom">
											<div class="row align-items-center justify-content-center">
												<div class="col text-right">
													<h3>20 25 Sacs</h3>
													<h5 class="text-c-red mb-0"> <span class="text-muted">Aliment de finission</span></h5>
                                                    <h6 class="text-c-blue  m-b-10"><span class="text-muted m-r-5">Dur??e:</span>15 jours</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- sessions-section start -->
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
                                                            <th>Nom produit</th>
                                                            <th>prix produit</th>
                                                            <th>quantit produit</th>
                                                            <th>type</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($produit as $produit)
                                                        <tr>
                                                            <td>#</td>
                                                            <td>{{$produit->nom}}</td>
                                                            <td>{{$produit->prix}}</td>
                                                            <td>{{$produit->quantite}}</td>
                                                            <td>{{$produit->type}}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                <a href="{{route('Produit.edit',$produit->id)}}" class="btn btn-primary">Modifier</a>
                                                                <form action="{{route('Produit.destroy',$produit->id)}}" method="POST">
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
                             
                                <!-- [ stiped-table ] end -->
                                <div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<h5>Ajout Materiel </h5>
											{{-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> --}}
										</div>
										<div class="card-body table-border-style">
											<div class="card-body">
												<form {{-- action="{{route('materiel.store')}}" --}} method="POST">
													@csrf
													<div class="row g-3">
														<div class="col">
															<label for="inputEmail4" class="form-label">Nom</label>
															<input type="text" name="nom" class="form-control" placeholder="Nom produit" aria-label="First name">
														</div>
														<div class="col">
															<label for="prix" class="form-label">Prix</label>
															<input type="number" name="prix" class="form-control" placeholder="prix produit" aria-label="Prix">
														</div>

													</div>
                                                    <div class="row g-3 mt-3">
														<div class="col">
															<label for="inputEmail4" class="form-label">Quantit??</label>
															<input type="text" name="quantite" class="form-control" placeholder="quantite" aria-label="quantite">
														</div>
														<div class="col">
															<label for="prix" class="form-label">Types</label>
                                                            <select class="form-control" name="type" id="">
                                                                <option value="alimentaire">alimentaire</option>
                                                                <option value="pharmecitique">Pharmecitique</option>
                                                            </select>
														</div>

													</div>
                                                    <div class="row g-3 mt-3">
														<div class="col">
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
														<input type="submit" class="btn btn-primary" value="Ajouter materiel">
													</div>
												</form>
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
	<!-- [ Main Content ] end -->


	<!-- Required Js -->
	<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	{{-- <script src="{{asset('assets/js/pcoded.min.js')}}"></script> --}}

</body>

</html>
