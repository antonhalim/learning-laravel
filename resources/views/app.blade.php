<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<ul class="nav navbar-nav">
					<li><a href="./">Home</a></li>
					<li><a href="./about">About</a></li>
					<li><a href="./contact">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>
  <div class="container">
    @yield('content')
    @yield('footer')

  </div>
  </body>
</html>
