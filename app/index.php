<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OKweather!</title>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
  </head>
  <body>

	<form method="post" action="getters/get-city.php" id="city">
		<input name="city" type="text" />
		<button>Buscar</button>
	</form>

	<div id="box-city"></div>


  	<script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
