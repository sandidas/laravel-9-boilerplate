<!DOCTYPE html>
<!--
Author: SANDIPAN DAS
Product Name: LARAVEL 9 BOILERPLATE - Bootstrap 5, HTML, VueJS, Laravel Admin Dashboard Theme
Website: http://www.sandipandas.dev
Contact: hello@sandipandas.net
Follow: www.twitter.com/sandipandas_net
Dribbble: www.dribbble.com/sandipandas
Like: www.facebook.com/sandipandas.net
-->
<html lang="en">
<!--begin::Head-->

<head>

    {{-- SEO START --}}
    <title>@yield('title')</title>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}


    <!-- AI SEO  -->
    {{-- GOOGLE MARKUP --}}
    <meta charset="utf-8" />
    <meta name="description" content="@yield('metadescription')" />
    <meta name="keywords" content="@yield('metakeyword')" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="John Doe">


    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />

    {{-- SEO FACEBOOK MARKUP --}}
    <meta property="og:url"
        content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="When Great Minds Don’t Think Alike" />
    <meta property="og:description" content="How much does culture influence creative thinking?" />
    <meta property="og:image"
        content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
    {{-- TWITTER MARKUP --}}
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@nytimesbits" />
    <meta name="twitter:creator" content="@nickbilton" />



    {{-- <base href=""> --}}
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

    {{-- SEO END --}}
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!--end::Head-->
    {{-- </base> --}}
    @yield('style')
</head>
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on"
    data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    @yield('header')
    @yield('leftsidebar')

    {{-- {{-- <!--{{<!==layout-partial:partials/theme-mode/_init.html-->}}--&gt; 
			<!--{{<!==layout-partial:layout/partials/_page-loader.html-->}}--&gt; 
			<!--{{<!==layout-partial:layout/_default.html-->}}--&gt; --}}
    @yield('body')
    @yield('footer')


    {{-- <!--{{<!==layout-partial:partials/_scrolltop.html-->}}--&gt; 
			<!--begin::Modals-->
			<!--{{<!==layout-partial:partials/modals/_upgrade-plan.html-->}}--&gt; 
			<!--{{<!==layout-partial:partials/modals/create-app/_main.html-->}}--&gt; 
			<!--{{<!==layout-partial:partials/modals/_new-target.html-->}}--&gt; 
			<!--{{<!==layout-partial:partials/modals/_view-users.html-->}}--&gt; 
			<!--{{<!==layout-partial:partials/modals/users-search/_main.html-->}}--&gt; 
			<!--{{<!==layout-partial:partials/modals/_invite-friends.html-->}}--&gt; 
			<!--end::Modals--> --}}


    @yield('script')
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="{{ asset('/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="{{ asset('/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/intro.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
