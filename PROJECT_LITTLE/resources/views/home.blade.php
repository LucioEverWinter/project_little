<!DOCTYPE html>
<html lang="en">
<head>
  <title>project little</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="stylesheet1.css">
  <link rel="stylesheet" href="event.css">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>


<body>
	<div class="mainBG">

  		<div class="groupbg">
        	<img src="/images/bg.png" class="imagebg" >
  		</div>
  		@include('layouts.nav')
      
      <div class="">
        @yield('body')
      </div>

  </div>

</body>

</html>