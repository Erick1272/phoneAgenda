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

    <title>Edit</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/public/css/stylesheet.css" rel="stylesheet">
</head>
<body>

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

<div id="container" class="container"></div>

<h2>Edit</h2>

<form id="form" name="form" class="form-horizontal" method="post" action='/public/update?id={{ $_GET['id']}}' onSubmit="return validateForm();">

    <table style="width: 100%" class="table table-responsive">
        <tr>
            <td>
                <div>
                    <label for="Name">Name</label>
                    <input class="form-control" type="text" name="Name" id="Name" value="<?PHP $user = \App\Persona::find($_GET['id']);echo $user->Name; ?>"/>
                </div>
            </td>
            <td>
                <div>
                    <label for="LastName">Last name</label>
                    <input class="form-control" type="text" name="LastName" id="LastName" value="<?PHP  $user = \App\Persona::find($_GET['id']);echo $user->LastName; ?>"/>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div>
                    <label for="Address">Address</label>
                    <input class="form-control" type="text" name="Address" id="Address" value="<?PHP  $user = \App\Persona::find($_GET['id']);echo $user->Address; ?>"/>
                </div>
            </td>
            <td>
                <div>
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="<?PHP $user = \App\Persona::find($_GET['id']);echo $user->email; ?>"/>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div>

                    <label for="phoneNumber">Phone Number</label>
                    <input class="form-control" type="text" name="phoneNumber" id="phoneNumber" value="<?PHP  $user = \App\Persona::find($_GET['id']);echo $user->phoneNumber;?>"/>
                </div>
            </td>
            <td>
                <div>
                    <label for="Type">Other</label>
                    <input class="form-control" type="text" name="Type" id="Type" value="<?PHP $user = \App\Persona::find($_GET['id']);echo $user->Type; ?>"/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="3" id="button"><input class="btn btn-primary" type="submit" value="Done"></td>
        </tr>

    </table>
</form>

</body>
</html>