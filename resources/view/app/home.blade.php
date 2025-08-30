@extends('app.layout.app')
@section('app_title')
    املاک خانه ما
@endsection
@section('main_content')


    @include('app.partials.introduce')

    @include('app.partials.search')

    @include('app.partials.experience')



    <!-- latest estate -->
    <section class="homec-properties homec-bg-cover pd-top-120 pd-btm-120" style="background-image: url('app_assets/img/bg-shape-four.svg');">
        <div class="homec-shape">
            <div class="homec-shape-single homec-shape-7"><img src="app_assets/img/anim-shape-4.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-8"><img src="app_assets/img/anim-shape-5.svg" alt="#" /></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="homec-section__head text-center section-white mg-btm-30">
                        <span class="homec-section__badge homec-section__badge--small homec-primary-color m-0" data-aos="fade-in" data-aos-delay="300">مشاهده تمام 329 ملک جدید</span>
                        <h2 class="homec-section__title" data-aos="fade-in" data-aos-delay="400">آخرین ملک ها</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php foreach ($latestAds as $ads){ ?>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="400">
                    <div class="homec-property">
                        <div class="homec-property__head">
                            <img src="<?= asset($ads->image) ?>" alt="#" />

                            <div class="homec-property__hsticky">
                                <a href="#" class="homec-heart">
                                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M10.5745 3.73257L11.1008 4.69447L11.6272 3.73258C11.9704 3.10535 12.5438 2.26267 13.3886 1.60933C14.2595 0.935774 15.2355 0.6 16.3044 0.6C19.29 0.6 21.6017 3.03446 21.6017 6.3966C21.6017 8.18186 20.8932 9.70959 19.5597 11.3187C18.211 12.9462 16.2694 14.6033 13.8617 16.6552L14.2508 17.1119L13.8617 16.6552L13.8611 16.6557C13.0479 17.3487 12.1237 18.1363 11.1625 18.9769L11.1623 18.977C11.1457 18.9916 11.1241 18.9999 11.1008 18.9999C11.0776 18.9999 11.056 18.9916 11.0394 18.9771L11.0391 18.9768C10.0784 18.1367 9.15452 17.3493 8.34203 16.6569L8.34054 16.6556L8.34053 16.6556C5.93251 14.6035 3.99081 12.9463 2.64202 11.3188C1.30844 9.70958 0.6 8.18186 0.6 6.3966C0.6 3.03446 2.91167 0.6 5.89732 0.6C6.96614 0.6 7.94219 0.935773 8.81311 1.60933C9.6579 2.26267 10.2313 3.10532 10.5745 3.73257Z"
                                                stroke-width="1.2"
                                        />
                                    </svg>
                                </a>
                                <a href="agent-detail.html" class="homec-property__asticky">
                                    <img src="app_assets/img/agent-1.jpg" alt="#" />
                                    <h4 class="homec-property__asticky--label"><?=  $ads->user()->first_name ?><span>مشاور</span></h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <div class="homec-property__price"><?= number_format($ads->amount) ?>  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge">برای <?= $ads->sellStatus() ?></span>
                            </div>
                            <h3 class="homec-property__title">
                                <a href="<?= route('ads',['id'=>$ads->id]) ?>"><?= $ads->title ?></a>
                            </h3>
                            <div class="homec-property__text">
                                <img src="app_assets/img/location-icon.svg" alt="#" />
                                <p><?= $ads->address ?></p>
                            </div>

                            <ul class="homec-property__list homec-border-top list-none">
                                <li><img src="app_assets/img/room-icon.svg" alt="#" />3 خواب</li>
                                <li><img src="app_assets/img/bath-icon.svg" alt="#" />2 حمام</li>
                                <li><img src="app_assets/img/size-icon.svg" alt="#" />120 متری</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>




    <!-- best estate -->
    <section class="homec-properties homec-bg-cover pd-top-120 pd-btm-120" style="background-image: url('app_assets/img/bg-shape-four.svg');">
        <div class="homec-shape">
            <div class="homec-shape-single homec-shape-7"><img src="app_assets/img/anim-shape-4.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-8"><img src="app_assets/img/anim-shape-5.svg" alt="#" /></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="homec-section__head text-center section-white mg-btm-30">
                        <span class="homec-section__badge homec-section__badge--small homec-primary-color m-0" data-aos="fade-in" data-aos-delay="300">مشاهده تمام 268 از بهترین ملک ها</span>
                        <h2 class="homec-section__title" data-aos="fade-in" data-aos-delay="400">بهترین ملک ها</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php foreach ($bestAds as $ads){ ?>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="400">
                    <div class="homec-property">
                        <div class="homec-property__head">
                            <img src="<?= asset($ads->image)?>" alt="#" />

                            <div class="homec-property__hsticky">
                                <a href="#" class="homec-heart">
                                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M10.5745 3.73257L11.1008 4.69447L11.6272 3.73258C11.9704 3.10535 12.5438 2.26267 13.3886 1.60933C14.2595 0.935774 15.2355 0.6 16.3044 0.6C19.29 0.6 21.6017 3.03446 21.6017 6.3966C21.6017 8.18186 20.8932 9.70959 19.5597 11.3187C18.211 12.9462 16.2694 14.6033 13.8617 16.6552L14.2508 17.1119L13.8617 16.6552L13.8611 16.6557C13.0479 17.3487 12.1237 18.1363 11.1625 18.9769L11.1623 18.977C11.1457 18.9916 11.1241 18.9999 11.1008 18.9999C11.0776 18.9999 11.056 18.9916 11.0394 18.9771L11.0391 18.9768C10.0784 18.1367 9.15452 17.3493 8.34203 16.6569L8.34054 16.6556L8.34053 16.6556C5.93251 14.6035 3.99081 12.9463 2.64202 11.3188C1.30844 9.70958 0.6 8.18186 0.6 6.3966C0.6 3.03446 2.91167 0.6 5.89732 0.6C6.96614 0.6 7.94219 0.935773 8.81311 1.60933C9.6579 2.26267 10.2313 3.10532 10.5745 3.73257Z"
                                                stroke-width="1.2"
                                        />
                                    </svg>
                                </a>
                                <a href="agent-detail.html" class="homec-property__asticky">
                                    <img src="<?= asset('app_assets/img/agent-1.jpg') ?>" alt="#" />
                                    <h4 class="homec-property__asticky--label"><?=  $ads->user()->first_name ?><span>مشاور</span></h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <div class="homec-property__price"><?= number_format($ads->amount) ?>  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge"> برای <?= $ads->sellStatus() ?> </span>
                            </div>
                            <h3 class="homec-property__title">
                                <a href="<?= route('ads',['id'=>$ads->id]) ?>"><?= $ads->title ?></a>
                            </h3>
                            <div class="homec-property__text">
                                <img src="<?= asset('app_assets/img/location-icon.svg') ?>" alt="#" />
                                <p>تهران ، زعفرانیه ، خیابان مهر</p>
                            </div>

                            <ul class="homec-property__list homec-border-top list-none">
                                <li><img src="app_assets/img/room-icon.svg" alt="#" />3 خواب</li>
                                <li><img src="app_assets/img/bath-icon.svg" alt="#" />2 حمام</li>
                                <li><img src="app_assets/img/size-icon.svg" alt="#" />120 متری</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center mg-top-40" data-aos="fade-in" data-aos-delay="300">
                    <a href="property-grid.html" class="homec-btn"><span>مشاهده تمام ملک ها</span></a>
                </div>
            </div>
        </div>
    </section>


    @include('app.partials.why_us')


    @include('app.partials.consultants')


    @include('app.partials.questions')


    @include('app.partials.mobile_app')

     <!-- latest news / posts -->
    @include('app.partials.last_posts')

    @include('app.partials.customer_statistics')

@endsection