<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Tech Blog - Stylish Magazine Blog Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="icon" href="{{ asset('/') }}front-end/favicon.ico" type="image/x-icon" />

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{ asset('/') }}front-end/css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{ asset('/') }}front-end/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('/') }}front-end/style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="{{ asset('/') }}front-end/css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="{{ asset('/') }}front-end/css/version/tech.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<div id="wrapper">
    <header class="tech-header header">
        <div class="container-fluid">
            @include('front-end.header.header')
        </div><!-- end container-fluid -->
    </header><!-- end market-header -->

   @yield('body')

    @include('front-end.footer.footer')
    <!-- end footer -->

    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

<!-- Core JavaScript
================================================== -->
<script src="{{ asset('/') }}front-end/js/jquery.min.js"></script>
<script src="{{ asset('/') }}front-end/js/tether.min.js"></script>
<script src="{{ asset('/') }}front-end/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}front-end/js/custom.js"></script>

</body>
</html>