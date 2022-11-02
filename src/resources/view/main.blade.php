<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="">
        <meta charset="utf-8"/>
        <title>{{$title}}</title>
        <meta name="description"
              content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number ofdw settings, additional services and widgets."/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <link href="{{asset('/admins/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/admins/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('/admins/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <script src="{{asset('/admins/assets/plugins/global/plugins.bundle.js')}}"></script>
        <script src="{{asset('/admins/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script src="{{asset('/admins/assets/js/pages/crud/datatables/custom/statistics.js')}}"></script>
    </head>
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            @yield('content')
        </div>
    </body>
</html>

