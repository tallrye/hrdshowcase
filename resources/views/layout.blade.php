<!DOCTYPE html>
<html>
	<head>
		<title>HRD Antwerp</title>
		<meta charset="UTF-8">
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="author" content="Piyetra Creative" />	
		<meta name="copyright" content="HRD Antwerp" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" type="image/png" href="{{ url('favicon.ico') }}"/>
		<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
		<link rel="stylesheet" href="{{ url('assets/css/generate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/sweetalert.css') }}" />
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	@yield('styles')

	
</head>
<body>
	@yield('content')
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
	<script type="text/javascript" src="{{ url('js/sweetalert.min.js') }}"></script>
	<script>
	    @if(Session::has('success'))
	        sweetAlert("İşlem Başarılı", "Link başarıyla oluşturuldu", "success");
	    @endif
	    @if(Session::has('errormessage'))
	        sweetAlert("Hata", "Sistem varolan bir linki atamaya çalıştı. Lütfen tekrar deneyin.", "error");
	    @endif
	</script>
	@yield('scripts')
</body>
</html>