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
	<script>

    mobiscroll.setOptions({
        locale: mobiscroll.localeEn,
        theme: 'ios',
        themeVariant: 'light'
    });
    
    $(function () {
        $('#tanggal').mobiscroll().datepicker({
            controls: ['calendar'],
            display: 'inline',
            showOuterDays: false,
            dateFormat: 'DDDD, D MMMM YYYY'
        });
    });


    // REMOVE TRIAL ^_^
    var x = setInterval(function() {
	    $(".mbsc-calendar-cell").children().children().each(function() {
		  	if($(this).html()=="TRIAL"){
		  		$(this).remove();
		  	}  	
		});
	}, 500);

	function setDay() {
		var tgl = $("#tanggal").val().replace(", "," ").split(" ");
		$("#dday").html(tgl[0])
		$("#ddate").html(tgl[2]+", "+tgl[1]+" "+tgl[3])
	}
	    
		 
</script>
</body>

</html>