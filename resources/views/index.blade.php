<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.head')
</head>

<body style="background-color:#F8F8F8">
	@include('partials.navbar')
	<main class="py-5">
		@include('konsultasi')	
	</main>

	<footer>
		<div class="container row" style="height: 52px;">
			<p>© 2022 Naufal Ulinnuha</p>
		</div>		
	</footer>

	<script src="assets/vendors/jquery/jquery-1.10.2.js"></script>
	<script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/mobiscroll/js/mobiscroll.jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>