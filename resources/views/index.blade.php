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
	
	@include('partials.footer')
	
	<script src="{{ asset('assets/vendors/jquery/jquery-1.10.2.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/mobiscroll/js/mobiscroll.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>