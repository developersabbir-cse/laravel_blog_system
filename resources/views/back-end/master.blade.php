<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset('/') }}back-end/favicon.ico" rel="icon" />
    <link href="{{ asset('/') }}back-end/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}back-end/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}back-end/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}back-end/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}back-end/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}back-end/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}back-end/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}back-end/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}back-end/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

</head>
<body class="skin-blue">
<div class="wrapper">

    @include('back-end.header.header')
    @include('back-end.sidebar.sidebar')
    <div class="content-wrapper">
        @yield('body')
    </div>
    @include('back-end.footer.footer')
</div>

<script src="{{ asset('/') }}back-end/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="{{ asset('/') }}back-end/http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{ asset('/') }}back-end/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('/') }}back-end/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/knob/jquery.knob.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src='{{ asset('/') }}back-end/plugins/fastclick/fastclick.min.js'></script>
<script src="{{ asset('/') }}back-end/dist/js/app.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/dist/js/pages/dashboard.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/dist/js/demo.js" type="text/javascript"></script>
<script src="{{ asset('/') }}back-end/plugins/ckeditor/ckeditor.js"></script>
<script>
    $('.delete').click(function () {
        var id=$(this).attr('id');
        event.preventDefault();
        var check=confirm('Are You Sure To Delete ?');
        if(check){
            document.getElementById('del'+id).submit();
        }
    })
</script>
{{--<script>--}}
{{--    CKEDITOR.replace( 'blog_long_description' );--}}
{{--</script>--}}


</body>
</html>