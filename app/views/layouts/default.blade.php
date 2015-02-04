<!DOCTYPE html>
<html lang="en">

	<head>
		@include('includes.head')
	</head>

	<body>

		<!-- header -->
		<header class='row'>
			@include('includes.header')
		</header>
		
		<div id="main" class="row">

			<!-- main content -->
			<section id="content" class="col-md-8 col-md-offset-2 content">
				@yield('content')
			</section>

		</div>

		<!-- footer -->
		<footer class='row'>
			@include('includes.footer')
		</footer>
		
		@include('includes.javascript')
		@yield('js')

	</body>

</html>