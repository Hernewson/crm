<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="GCN Admin DashBoard" />
    <meta name="author" content="GCN Admin DashBoard" />
    <title>GCN Admin DashBoard </title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css" />
    <!-- icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/adminAssets/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('public/adminAssets/assets/plugins/iconic/css/material-design-iconic-font.min.css')}}">
    <!-- bootstrap -->
    <link href="{{ asset('public/adminAssets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css')}}"/>
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('public/adminAssets/assets/css/pages/extra_pages.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('public/adminAssets/assets/img/gcn.png')}}" />
</head>

<body>
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="form-404">
					<span class="login100-form-logo">
						<img alt="" src="{{ asset('public/adminAssets/assets/img/gcnl.png')}}" width="100%" height="100%">
					</span>
                <span class="form404-title p-b-34 p-t-27">
						Error 404
					</span>
                <p class="content-404">The page you are looking for does't exist or an other error occurred.</p>
                <div class="container-login100-form-btn">
                    <a href="{{route('admin.dashboard')}}" class="login100-form-btn">

                        Go to home page

                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- start js include path -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- bootstrap -->
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/pages/extra-pages/pages.js"></script>
<!-- end js include path -->
</body>

</html>

