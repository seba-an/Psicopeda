<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CPconstruyamos</title>
				<link rel="stylesheet" href="{{asset('plugins/Bootstrap/css/bootstrap.css') }}">
				<link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css') }}">

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

    </head>
		<body>
			<!-- bootstrap !-->
			<script src="{{ asset('plugins/Jquery/jquery-3.2.1.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>


	 		<!-- bootstrap !-->

			</script>

			<header>
				@include('partials.header')
			</header>

			<section>
				@include('partials.section')
			</section>

			<footer>
				@include('partials.footer')
			</footer>

		</body>
</html>
