<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>to do task</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css')  }}">
</head>
<body>
	<div id="app">
		<navigationbar></navigationbar>

		<!-- <task></task> -->
		<router-view></router-view>
	</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
