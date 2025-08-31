@extends('app.layout.app')
@section('app_title')

@endsection
@section('main_content')

    <section class="breadcrumbs__content" style="background-image: url(<?= asset('app_assets/img/bread-overlay.jpg') ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb__menu list-none">
                            <li><a href="<?=  route('home.index') ?>">صفحه اصلی</a></li>
                            <li class="active"><a href="<?= route('ads',[$ads->id]) ?>">جزئیات ملک</a></li>
                        </ul>
                        <h2 class="breadcrumb__title m-0"><?= $ads->title ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pd-top-80 pd-btm-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="homec-property-slides">
                        <div class="homec-property-main">

                            @include('app.property_partials.slider')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pd-top-0 homec-bg-third-color pd-btm-80 homec-bg-cover"
        style="background-image: url(<?= asset('app_assets/img/property-single-bg.svg') ?>);">
        <div class="container">
            <div class="row">


                @include('app.property_partials.right_side')


                @include('app.property_partials.left_side')


            </div>
        </div>
    </section>

@endsection
