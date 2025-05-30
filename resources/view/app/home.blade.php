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
                                <div class="homec-property__price"><?= $ads->amount ?>  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge">برای <?= $ads->sellStatus() ?></span>
                            </div>
                            <h3 class="homec-property__title"><a href="property-single.html">فضای اداری شمال غربی</a></h3>
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
                                    <img src="app_assets/img/agent-1.jpg" alt="#" />
                                    <h4 class="homec-property__asticky--label"><?=  $ads->user()->first_name ?><span>مشاور</span></h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <div class="homec-property__price"><?= number_format($ads->amount) ?>  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge"> برای <?= $ads->sellStatus() ?> </span>
                            </div>
                            <h3 class="homec-property__title"><a href="property-single.html">فضای اداری شمال غربی</a></h3>
                            <div class="homec-property__text">
                                <img src="app_assets/img/location-icon.svg" alt="#" />
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



    <section id="blog" class="blog-area homec-bg-cover section-padding" style="background-image: url('app_assets/img/bg-shape-two.html');">
        <div class="blog-bg-pattern">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                        <div class="homec-section__head text-center mg-btm-30">
                            <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0" data-aos="fade-in" data-aos-delay="300">آخرین وبلاگ </span>
                            <h2 class="homec-section__title" data-aos="fade-in" data-aos-delay="400">آخرین اخبار ما</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php foreach ($posts as $post){ ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="homec-blog">
                            <div class="homec-blog__head">
                                <div class="homec-overlay homec-blog__overlay"></div>
                                <a href="blog-single.html"><img src="<?= asset($post->image) ?>" alt="#" /></a>

                                <div class="homec-blog__content">
                                    <ul class="homec-blog__meta list-none">
                                        <li>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.8182 12.3637H8.36367V13.8182H9.8182V12.3637Z" />
                                                <path d="M9.8182 9.81816H8.36367V11.2727H9.8182V9.81816Z" />
                                                <path d="M7.63637 7.27266H6.18184V8.72719H7.63637V7.27266Z" />
                                                <path d="M7.63637 9.81816H6.18184V11.2727H7.63637V9.81816Z" />
                                                <path d="M11.9999 9.81816H10.5454V11.2727H11.9999V9.81816Z" />
                                                <path d="M14.1818 9.81816H12.7272V11.2727H14.1818V9.81816Z" />
                                                <path d="M14.1818 7.27266H12.7272V8.72719H14.1818V7.27266Z" />
                                                <path d="M11.9999 7.27266H10.5454V8.72719H11.9999V7.27266Z" />
                                                <path d="M9.8182 7.27266H8.36367V8.72719H9.8182V7.27266Z" />
                                                <path d="M3.2727 9.81816H1.81816V11.2727H3.2727V9.81816Z" />
                                                <path d="M3.2727 12.3637H1.81816V13.8182H3.2727V12.3637Z" />
                                                <path
                                                        d="M14.5455 1.45453H13.0909V0.363625C13.0909 0.162812 12.9281 0 12.7273 0C12.5264 0 12.3637 0.162812 12.3637 0.363625V1.45453H3.63637V0.363625C3.63637 0.162812 3.47356 0 3.27272 0C3.07187 0 2.90909 0.162812 2.90909 0.363625V1.45453H1.45453C0.651219 1.45453 0 2.10578 0 2.90909V14.5455C0 15.3488 0.651219 16 1.45453 16H14.5454C15.3488 16 16 15.3488 16 14.5455V2.90909C16 2.10578 15.3488 1.45453 14.5455 1.45453ZM15.2727 14.5455C15.2727 14.9471 14.9471 15.2727 14.5454 15.2727H1.45453C1.05287 15.2727 0.72725 14.9471 0.72725 14.5455V5.81819H15.2727V14.5455ZM15.2727 5.09091H0.727281V2.90909C0.727281 2.50744 1.05291 2.18181 1.45456 2.18181H2.90909V3.27272C2.90909 3.47356 3.07191 3.63634 3.27272 3.63634C3.47356 3.63634 3.63634 3.47353 3.63634 3.27272V2.18181H12.3636V3.27272C12.3636 3.47356 12.5264 3.63634 12.7273 3.63634C12.9281 3.63634 13.0909 3.47353 13.0909 3.27272V2.18181H14.5454C14.9471 2.18181 15.2727 2.50744 15.2727 2.90909L15.2727 5.09091Z"
                                                />
                                                <path d="M3.2727 7.27266H1.81816V8.72719H3.2727V7.27266Z" />
                                                <path d="M7.63637 12.3637H6.18184V13.8182H7.63637V12.3637Z" />
                                                <path d="M5.45453 12.3637H4V13.8182H5.45453V12.3637Z" />
                                                <path d="M5.45453 7.27266H4V8.72719H5.45453V7.27266Z" />
                                                <path d="M5.45453 9.81816H4V11.2727H5.45453V9.81816Z" />
                                            </svg>
                                            <?= $post->created_at ?>
                                        </li>
                                        <li class="active">
                                            <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M7.60687 8.64356C8.67386 8.64356 9.59767 8.26087 10.3527 7.50584C11.1075 6.75093 11.4903 5.82724 11.4903 4.76013C11.4903 3.69339 11.1076 2.76958 10.3526 2.01443C9.59755 1.25964 8.67374 0.876953 7.60687 0.876953C6.53976 0.876953 5.61608 1.25964 4.86117 2.01455C4.10626 2.76946 3.72345 3.69327 3.72345 4.76013C3.72345 5.82724 4.10626 6.75105 4.86117 7.50596C5.61633 8.26075 6.54013 8.64356 7.60687 8.64356ZM5.52936 2.68262C6.10861 2.10336 6.78812 1.82179 7.60687 1.82179C8.42551 1.82179 9.10514 2.10336 9.68451 2.68262C10.2638 3.26199 10.5455 3.94162 10.5455 4.76013C10.5455 5.57889 10.2638 6.25839 9.68451 6.83777C9.10514 7.41715 8.42551 7.69872 7.60687 7.69872C6.78837 7.69872 6.10886 7.41702 5.52936 6.83777C4.94998 6.25852 4.66829 5.57889 4.66829 4.76013C4.66829 3.94162 4.94998 3.26199 5.52936 2.68262Z"
                                                />
                                                <path
                                                        d="M14.4018 13.275C14.3801 12.9609 14.336 12.6182 14.2712 12.2563C14.2057 11.8917 14.1215 11.547 14.0206 11.232C13.9163 10.9064 13.7747 10.5848 13.5994 10.2767C13.4177 9.95684 13.2042 9.67835 12.9646 9.44918C12.714 9.20944 12.4072 9.01668 12.0525 8.87608C11.6989 8.73622 11.3071 8.66536 10.888 8.66536C10.7235 8.66536 10.5643 8.73289 10.2569 8.93303C10.0677 9.05641 9.84639 9.1991 9.59939 9.35692C9.38818 9.4915 9.10206 9.61758 8.74865 9.73174C8.40386 9.84331 8.05377 9.89989 7.70811 9.89989C7.3627 9.89989 7.01261 9.84331 6.66757 9.73174C6.31453 9.61771 6.02829 9.49162 5.81745 9.35705C5.57278 9.2007 5.35136 9.05801 5.15935 8.93291C4.85219 8.73277 4.69301 8.66524 4.52843 8.66524C4.10921 8.66524 3.71755 8.73622 3.36414 8.8762C3.00962 9.01656 2.70271 9.20931 2.4519 9.4493C2.21227 9.6786 1.99873 9.95697 1.81716 10.2767C1.64212 10.5848 1.50041 10.9062 1.3961 11.2321C1.29536 11.5471 1.21109 11.8917 1.14565 12.2563C1.0807 12.6177 1.03679 12.9605 1.01502 13.2754C0.993613 13.5833 0.982788 13.9037 0.982788 14.2275C0.982788 15.0691 1.25033 15.7505 1.77792 16.253C2.29899 16.7488 2.98834 17.0003 3.8269 17.0003H11.5903C12.4286 17.0003 13.118 16.7488 13.6392 16.253C14.1669 15.7509 14.4344 15.0693 14.4344 14.2274C14.4343 13.9025 14.4233 13.5821 14.4018 13.275ZM12.9877 15.5684C12.6434 15.8961 12.1863 16.0554 11.5902 16.0554H3.8269C3.23067 16.0554 2.77357 15.8961 2.42939 15.5686C2.09172 15.2471 1.92763 14.8084 1.92763 14.2275C1.92763 13.9254 1.93759 13.6271 1.95752 13.3407C1.97695 13.0598 2.01669 12.7511 2.07561 12.4232C2.13379 12.0993 2.20784 11.7954 2.29592 11.5202C2.38043 11.2563 2.49569 10.995 2.63863 10.7434C2.77504 10.5035 2.932 10.2977 3.1052 10.1319C3.26721 9.97677 3.4714 9.84983 3.71201 9.75462C3.93454 9.66654 4.18461 9.61832 4.4561 9.61106C4.48919 9.62865 4.54811 9.66223 4.64356 9.72448C4.8378 9.85106 5.06168 9.99547 5.30917 10.1535C5.58816 10.3314 5.94759 10.4921 6.37702 10.6307C6.81604 10.7726 7.2638 10.8447 7.70824 10.8447C8.15267 10.8447 8.60055 10.7726 9.03933 10.6308C9.46912 10.4919 9.82843 10.3314 10.1078 10.1533C10.3611 9.99141 10.5787 9.85118 10.7729 9.72448C10.8684 9.66236 10.9273 9.62865 10.9604 9.61106C11.232 9.61832 11.4821 9.66654 11.7047 9.75462C11.9452 9.84983 12.1494 9.9769 12.3114 10.1319C12.4846 10.2976 12.6416 10.5034 12.778 10.7435C12.921 10.995 13.0364 11.2564 13.1208 11.5201C13.209 11.7956 13.2832 12.0994 13.3412 12.4231C13.4 12.7516 13.4399 13.0604 13.4593 13.3408C13.4794 13.6261 13.4895 13.9245 13.4896 14.2275C13.4895 14.8085 13.3254 15.2471 12.9877 15.5684Z"
                                                />
                                            </svg>
                                            <a href="#">توسط <?= $post->user()->first_name ?></a>
                                        </li>
                                    </ul>
                                    <h3 class="homec-blog__title"><a href="blog-single.html"> <?= echoHtml($post->body) ?> </a></h3>
                                    <div class="home-blog__button homec-border-top">
                                        <a href="blog-single.html" class="homec-blog__btn">
                                            ادامه مطلب
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 8L16 12M16 12L12 16M16 12H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9 18.2454C10.3696 19.3433 12.1081 20 14 20C18.4183 20 22 16.4183 22 12C22 7.58172 18.4183 4 14 4C12.1081 4 10.3696 4.65672 9 5.75462" stroke-width="1.5" stroke-linecap="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
@endsection