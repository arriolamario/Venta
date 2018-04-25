<!DOCTYPE html>
<html>
  <head>
    <title>Venta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
							{!! Form::open(['action' => ['LoginController@login']]) !!}
								{!! Form::model($user) !!}
							<div class="form-group row">
								{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre Usuario']) !!}
							</div>
							<div class="form-group row">
								{!! Form::password('clave', ['class' => 'form-control', 'placeholder' => 'Clave']) !!}
							</div>
							<div class="form-group row">
								{!! Form::submit('Iniciar Sesion', ['class' => 'btn btn-primary']) !!}
							</div>
							{!! Form::close() !!}

							<div>asdasd {{ $user->nombre }}</div>
							<div>asdas {{ $user->clave }}</div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('https://code.jquery.com/jquery.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
  </body>
</html>