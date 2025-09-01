<!DOCTYPE html>
<html class="no-js" lang="fr" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @include('app.layout.styles')
   <title> @yield('app_title')</title>
</head>


<body>
<!-- <div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>-->
@include('app.layout.navbar')
@yield('main_content')
@include('app.layout.footer')
@include('app.layout.scripts')

<!-- <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-right"></i>برو بالا</a> -->

</body>

</html>

