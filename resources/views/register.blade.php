<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>

				<?php echo  Form::open(array('url' => 'register')); ?>
				<div class="controls">
				<?php echo  Form::text('name','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Please Enter your Name')); ?>
				
				</div>
				<div class="controls">
				<?php echo  Form::text('remail','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Please Enter your Email')); ?>
				
				</div>
				<div class="controls">
				<?php echo  Form::password('rpassword',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) ;?>
			
				<p class="errors"><input type="hidden" name="_token" value="{{ csrf_token() }}"></p>
				</div>
				<p><?php echo  Form::submit('Register', array('class'=>'send-btn')) ; ?></p>
					<?php echo  Form::close(); ?>
				
				
				 <a class="btn btn-primary" href="/">Login</a>
				<a class="btn btn-primary" href="{{ route('social.login', ['facebook']) }}">Facebook</a>
				<a class="btn btn-primary" href="{{ route('social.login', ['google']) }}">Google</a>
            </div>
        </div>
    </body>
</html>
