@extends('app.layout.app')
@section('app_title')
    آگهی ها
@endsection
@section('main_content')

    <section class="breadcrumbs__content" style="background-image: url(<?= asset('app_assets/img/bread-overlay.jpg') ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb__title m-0">املاک</h2>
                        <ul class="breadcrumb__menu list-none">
                            <li><a href="<?= route('home.index') ?>">صفحه اصلی</a></li>
                            <li class="active"><a href="<?= route('ads_list') ?>">املاک</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="homec-propertys pd-top-80 pd-btm-80">
        <div class="container">

            @include('app.adslist_partials.search')


            <div class="row">
                <div class="col-lg-4 col-12 mg-top-30">

                    @include('app.adslist_partials.filters')

                    @include('app.adslist_partials.consultants')

                </div>

                <div class="col-lg-8 col-12">
                    @include('app.adslist_partials.list')
                </div>
            </div>
        </div>
    </section>


@endsection