<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		
		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->
		

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		
	</head>
	<body>
	    <div class="container">
		    <div class="row">
			    <div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <a class="navbar-brand" href="#">Navbar</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
						  <li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Dropdown
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							  <a class="dropdown-item" href="#">Action</a>
							  <a class="dropdown-item" href="#">Another action</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#">Something else here</a>
							</div>
						  </li>
						  <li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						  </li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
						  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					  </div>
					 
				 
				</nav>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
		    <div class="row">
			    <div class="col-2">
		<!-- Sidebar -->
		<nav id="sidebar">
			

			<ul class="list-unstyled components">
				<p>Dummy Heading</p>
				<li class="active">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li>
							<a href="#">Home 1</a>
						</li>
						<li>
							<a href="#">Home 2</a>
						</li>
						<li>
							<a href="#">Home 3</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">About</a>
				</li>
				<li>
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
					<ul class="collapse list-unstyled" id="pageSubmenu">
						<li>
							<a href="#">Page 1</a>
						</li>
						<li>
							<a href="#">Page 2</a>
						</li>
						<li>
							<a href="#">Page 3</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Portfolio</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
			</ul>

		</nav>
		</div>
    <!-- Page Content -->
	<div class="col-10">
		<div id="content">

		   
				<div class="container">

				   
					@yield('admin')
				</div>
				
			
		</div>
	</div>
	</div>
</div>
		
	
		
			
					
			 
	 
	<script src="js/mycustom.js"></script>
	
            
	   
	 
	</body>
</html>