<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	<div class="card" style="width:38rem">
		<span class="border border-warning">
		  <img class="card-img-top" src="~/belajar_laravel/resources/views/gagah.jpeg"
			alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title">Cara Membuat Controller pada Laravel 8</h5>
			<p class="card-text">$ php artisan make:controller<br><br>
				$ vi DosenController.php<br><br>
				public function index(){<br>
					&nbsp&nbsp&nbsp&nbspreturn view('pelajaran_controller');<br>
				}<br><br>
				$ vi pelajaran_controller.blade.php html<br><br>
				$ vi routes/web.php<br><br>
				Route::get('pelajaran_controller','DosenController@index');
			</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</span>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>