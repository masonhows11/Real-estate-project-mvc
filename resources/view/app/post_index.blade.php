@extends( 'app.layout.app')
@section('app_title')
    پست ها
@endsection
@section('main_content')

    <section class="breadcrumbs__content" style="background-image: url(<?= asset('app_assets/img/bread-overlay.jpg') ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb__menu list-none">
                            <li><a href="<?= route('home.index') ?>">صفحه اصلی</a></li>
                            <li class="active"><a href="<?= route('all_post') ?>">وبلاگ</a></li>
                        </ul>
                        <h2 class="breadcrumb__title m-0">وبلاگ</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection