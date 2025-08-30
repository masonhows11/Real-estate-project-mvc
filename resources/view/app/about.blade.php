@extends('app.layout.app')
@section('app_title')
    درباره ما
@endsection
@section('main_content')
    <section class="breadcrumbs__content" style="background-image: url(<?= asset('app_assets/img/bread-overlay.jpg') ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb__menu list-none">
                            <li><a href="<?= route('home.home') ?>">صفحه اصلی</a></li>
                            <li class="active"><a href="<?= route('about_us') ?>">درباره ما</a></li>
                        </ul>
                        <h2 class="breadcrumb__title m-0">درباره ما</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homec-about homec-bg-third-color pd-top-90 pd-btm-120">
        <div class="homec-shape">
            <div class="homec-shape-single homec-shape-1"><img src="<?= asset('app_assets/img/anim-shape-1.svg') ?>" alt="#" /></div>
            <div class="homec-shape-single homec-shape-2"><img src="<?= asset('app_assets/img/anim-shape-2.svg') ?>" alt="#" /></div>
            <div class="homec-shape-single homec-shape-3"><img src="<?= asset('app_assets/img/anim-shape-3.svg') ?>" alt="#" /></div>
            <div class="homec-shape-single homec-shape-4"><img src="<?= asset('app_assets/img/anim-shape-1.svg') ?>" alt="#" /></div>
            <div class="homec-shape-single homec-shape-5"><img src="<?= asset('app_assets/img/anim-shape-2.svg') ?>" alt="#" /></div>
            <div class="homec-shape-single homec-shape-6"><img src="<?= asset('app_assets/img/anim-shape-3.svg') ?>" alt="#" /></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1 col-12 mg-top-30" data-aos="fade-left" data-aos-delay="400">
                    <div class="homec-image-group homec-image-group--v2">
                        <div class="homec-image-group__main">
                            <img src="<?= asset('app_assets/img/about-3.jpg') ?>" alt="#" />
                            <div class="homec-experiences">
                                <h4 class="homec-experiences__title">12 سال <span>تجربه ما</span></h4>
                            </div>
                        </div>
                        <div class="homec-ceo-quote">
                            <div class="homec-ceo-quote__img">
                                <div class="homec-overlay"></div>
                                <img src="<?= asset('app_assets/img/ceo-img.png') ?>" alt="#" />
                            </div>
                            <h4 class="homec-ceo-quote__title">وید دی وارن<span>مدیرعامل و موسس هوم کو</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-about-content homec-about-content--v2">
                        <div class="homec-section__head">
                            <div class="homec-section__shape">
                                <span class="homec-section__badge homec-section__badge--shape"
                                      style="background-image: url('<?= asset('app_assets/img/section-shape.svg') ?>');">درباره هوم کو</span>
                            </div>
                            <h2 class="homec-section__title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h2>
                        </div>
                        <div class="homec-about-content__inner mg-top-20">
                            <p class="homec-about-content__text">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                            </p>
                            <div class="homec-focus-content homec-focus-content--v2 homec-border mg-top-20">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان</p>
                            </div>
                            <div class="homec-dflex-space">
                                <div class="homec-funfact__single homec-funfact__single--v2">
                                    <div class="homec-funfact__icon">
                                        <img src="<?= asset('app_assets/img/count-icon1.svg') ?>" alt="#" />
                                    </div>
                                    <h3 class="homec-funfact__number"><span class="counter">90</span>k+ اجاره کنندگان</h3>
                                    <p class="homec-funfact__text">به خدمات و مراقبت ما ایمان داشته باشید</p>
                                </div>
                                <div class="homec-funfact__single homec-funfact__single--v2">
                                    <div class="homec-funfact__icon">
                                        <img src="<?= asset('app_assets/img/count-icon2.svg') ?>" alt="#" />
                                    </div>
                                    <h3 class="homec-funfact__number"><span class="counter">120</span>k+ اجاره کنندگان</h3>
                                    <p class="homec-funfact__text">خانه آماده برای سکونت</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection