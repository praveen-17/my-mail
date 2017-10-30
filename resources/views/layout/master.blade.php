<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="icon" type="text/css" href="{{ asset("images/favicon.ico") }}">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000" />

        <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap-4.0.0-beta.2-dist/bootstrap.min.css") }}">
        <link rel="stylesheet" type="text/css" href="{{ asset("css/mail.css") }}">

        <script type="text/javascript" src="{{ asset("js/jquery-3.2.1.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/popper.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/bootstrap-4.0.0-beta.2-dist/bootstrap.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/mail.js") }}"></script>

        @yield('scripts')
	</head>
	<body>
		<div class="tab bg-dark">
			<button class="tablinks active" data-toggle="#inbox">Inbox</button>
			<button class="tablinks" data-toggle="#sent">Sent</button>
			<button class="tablinks" data-toggle="#draft">Draft</button>
		</div>

		<div class="tab-content active" id="inbox">
			<h1>Inbox</h1>
		</div>
		<div class="tab-content" id="sent">
			<h1>Sent</h1>
		</div>
		<div class="tab-content" id="draft">
			<h1>Draft</h1>
		</div>
		<div class="container-fluid">
			@yield('content')
		</div>
	</body>
</html>