<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <title>PHP Agenda</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/public/css/stylesheet.css" rel="stylesheet">

    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/public/css/normalize.css">
    <link rel="stylesheet" href="/public/css/skeleton.css">
</head>

<body  style="overflow-y:auto">


<style scoped>.form-control{
        width: 70%;
    }</style>

<!-- Fixed navbar -->
<nav id="nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="UserName" class="navbar-brand">PHP Agenda</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul id="font" class="nav navbar-nav">
                <!--<li class="dropdown">
                    <a id="Dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: whitesmoke">Proceso de pago <span class="caret"></span></a>
                    <ul style="color: #337AB7" class="dropdown-menu">
                        <li><a href="#" style="color: whitesmoke">Entrevista</a></li>
                        <li><a href="#" style="color: whitesmoke">Evaluacion</a></li>
                        <li><a href="#" style="color: whitesmoke">Terapia</a></li>
                        <!--    <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li> -->
                <!--   </ul>
               </li> -->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div id="container" class="container">

    <h2>Form</h2>


    <button onclick="window.location = '/public/add'" class="btn btn-primary" type="button" value="">ADD</button>

    <table class="table table-responsive table-hover">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Other</th>
        </tr>
        </thead>
        <tbody>
        @foreach($all_personas as $personas)
            <tr>
                <td>{{ $personas->Name }}</td>
                <td>{{ $personas->LastName }}</td>
                <td>{{ $personas->Address }}</td>
                <td>{{ $personas->email }}</td>
                <td>{{ $personas->phoneNumber }}</td>
                <td>{{ $personas->Type }}</td>

                <td><button id="BRegistrar" class="btn btn-primary" type="button" onclick="window.location = '/public/edit?id={{ $personas->id}}'">Edit</button></td>
                <td><button id="BReporte" class="btn btn-primary" type="button" onclick="window.location = '/public/delete?id={{ $personas->id}}'">Delete</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!--Database implementation down here...-->

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>



</body>
</html>