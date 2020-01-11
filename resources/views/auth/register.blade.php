<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Almazer.id | Registration Page</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="{{ url('/home') }}">Almazer</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>


        <form method="post" action="{{ url('/register') }}">

            {!! csrf_field() !!}

           <div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    @if ($errors->has('email'))
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
        @endif
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Vin Field -->
<div class="form-group col-sm-12">
    @if ($errors->has('vin'))
            <div class="invalid-feedback">{{ $errors->first('vin') }}</div>
        @endif
    {!! Form::label('vin', 'Vin (nomor rangka):') !!}
    {!! Form::text('vin', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-12">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    {!! Form::date('date_of_birth', null, ['class' => 'form-control','id'=>'date_of_birth']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#date_of_birth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Mobile Phone Field -->
<div class="form-group col-sm-12">
    @if ($errors->has('mobile_phone'))
            <div class="invalid-feedback">{{ $errors->first('mobile_phone') }}</div>
        @endif
    {!! Form::label('mobile_phone', 'Mobile Phone:') !!}
    {!! Form::text('mobile_phone', null, ['class' => 'form-control','required']) !!}
</div>

<!-- License Plate Field -->
<div class="form-group col-sm-12">
    {!! Form::label('license_plate', 'License Plate:') !!}
    {!! Form::text('license_plate', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Size Field -->
<div class="form-group col-sm-12">
    {!! Form::label('size', 'T-Shirt or Polo Shirt Size:') !!}
    {!! Form::select('size', array('S' => 'S', 'M'=> 'M','L' => 'L','XL' => 'XL','XXL' => 'XXL' ), 'M',['class' => 'form-control','required']); !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Password Field -->
<div class="form-group col-sm-12">
    @if ($errors->has('password'))
            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
        @endif
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','required']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('password_confirmation', 'Confirm password:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control','required']) !!}
</div>



            <div class="row">
                <!-- <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div> -->
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
<style type="text/css">
        .invalid-feedback{
            color: red;
        }
    </style>
</body>
<footer>
        <style type="text/css">
            .footer {
                position: fixed; 
                bottom: 0;
                left: 0;
                right: 0;
                height: 50px;
                text-align: center;
                background-color: black;
                color: white;
                padding-top: 15px;
            }
        </style>
        <div class="footer"> <strong>Copyright © <?php echo date("Y"); ?> <a href="#">Almazer</a></strong>. Powered by <a target="_blank" href="https://eloquentdev.com/">EloquentDev</a> </div>

    </footer>
</html>
