<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="">
        <meta charset="utf-8"/>
        <title>{{$title}}</title>
        <meta name="description"
              content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number ofdw settings, additional services and widgets."/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <link href="{{asset('/hoangtruong1808/filter-policy/css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/hoangtruong1808/filter-policy/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('/hoangtruong1808/filter-policy/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <script src="{{asset('/hoangtruong1808/filter-policy/js/plugins.bundle.js')}}"></script>
        <script src="{{asset('/hoangtruong1808/filter-policy/js/datatables/datatables.bundle.js')}}"></script>
        <script src="{{asset('/hoangtruong1808/filter-policy/js/datatables/custom/statistics.js')}}"></script>
    </head>
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            @yield('content')
        </div>
    </body>
</html>

