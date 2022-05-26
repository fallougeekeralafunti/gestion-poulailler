
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
                            <div class="row">
                                <div class="col-xl-12">
                                  <div class="card">

                                      <div class="card-header">
                                          <h5>Ajout de gerants </h5>
                                          {{-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> --}}
                                      </div>
                                      <div class="card-body table-border-style">
                                        <div class="card-body">
                                            <form action="{{route('Materiel.update',$materiel->id)}}" method="POST">
                                                @csrf
                                                @method('put')
                                            <div class="row g-3">
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">Nom</label>
                                                  <input type="text" name="nom" value="{{$materiel->nom}}" class="form-control" placeholder="Nom" aria-label="First name">
                                                </div>
                                                <div class="col">
                                                    <label for="inputEmail4"  class="form-label">prix</label>
                                                  <input type="number" name="prix" value="{{$materiel->prix}}" class="form-control" placeholder="prix" aria-label="Last name">
                                                </div>
                                            </div>
                                            <div class="row g-3 mt-3">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">poulailler</label>
                                                        <input type="text" name="poulailler" value="{{$materiel->poulailler_id}}" class="form-control" placeholder="poulailler" aria-label="Last name"> 
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-12 mt-5">
                                                <input type="submit" class="btn btn-primary" value="Modifie ;ateriel">
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



	<!-- Required Js -->
	<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/pcoded.min.js')}}"></script>

</body>

</html>
