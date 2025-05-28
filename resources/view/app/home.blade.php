@extends('app.layout.app')
@section('app_title')
    املاک خانه ما
@endsection
@section('main_content')
    <section id="hero" class="homec-hero homec-hero__v2 p-relative" style="background-image: url('assets/img/map.svg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="homec-hero__inner homec-hero__inner--v2">
                        <div class="homec-hero__content homec-hero__content--v2">
                            <h1 class="homec-hero__title">ملک خود را <span class="homec-hero__title--focus" style="background-image: url('assets/img/shape-2.svg');">با مشاوران</span> دریافت کنید</h1>
                            <ul class="homec-iconic-list homec-iconic-list__v2 homec-iconic-list__white list-none mg-top-30">
                                <li><i class="fa-solid fa-check"></i>لورم ایپسوم متن ساختگی با تولید سادگی</li>
                                <li><i class="fa-solid fa-check"></i>فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف</li>
                                <li><i class="fa-solid fa-check"></i>نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص</li>
                            </ul>
                            <a href="property-grid.html" class="homec-btn homec-btn__second"><span>مشاهده تمام املاک</span></a>
                        </div>

                        <div class="homec-slider-property-slider">
                            <div class="swiper mySwiper homec-slider-pcard loading">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="property-single.html" class="homec-property homec-property__card">
                                            <div class="homec-property__head">
                                                <div class="homec-overlay"></div>
                                                <img src="assets/img/property-featured.jpg" alt="#" />
                                            </div>

                                            <div class="homec-property__body">
                                                <div class="homec-property__body--inside">
                                                    <div class="homec-property__price">3,976 تومان<span>/ماهانه</span></div>
                                                    <h3 class="homec-property__title">خانه مدرن با استخر</h3>
                                                    <div class="homec-property__text">
                                                        <img src="assets/img/location-icon2.svg" alt="#" />
                                                        <p>تهران ، زعفرانیه ، خیابان مهر</p>
                                                    </div>

                                                    <ul class="homec-property__list homec-border-top list-none">
                                                        <li><img src="assets/img/room-icon2.svg" alt="#" />3 خواب</li>
                                                        <li><img src="assets/img/bath-icon2.svg" alt="#" />2 حمام</li>
                                                        <li><img src="assets/img/size-icon2.svg" alt="#" />5x9 m2</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="property-single.html" class="homec-property homec-property__card">
                                            <div class="homec-property__head">
                                                <div class="homec-overlay"></div>
                                                <img src="assets/img/property-featured2.jpg" alt="#" />
                                            </div>

                                            <div class="homec-property__body">
                                                <div class="homec-property__body--inside">
                                                    <div class="homec-property__price">3,976 تومان<span>/ماهانه</span></div>
                                                    <h3 class="homec-property__title">آپارتمان الماس منگنز</h3>
                                                    <div class="homec-property__text">
                                                        <img src="assets/img/location-icon2.svg" alt="#" />
                                                        <p>تهران ، زعفرانیه ، خیابان مهر</p>
                                                    </div>

                                                    <ul class="homec-property__list homec-border-top list-none">
                                                        <li><img src="assets/img/room-icon2.svg" alt="#" />3 خواب</li>
                                                        <li><img src="assets/img/bath-icon2.svg" alt="#" />2 حمام</li>
                                                        <li><img src="assets/img/size-icon2.svg" alt="#" />5x9 m2</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="property-single.html" class="homec-property homec-property__card">
                                            <div class="homec-property__head">
                                                <div class="homec-overlay"></div>
                                                <img src="assets/img/property-featured2.jpg" alt="#" />
                                            </div>

                                            <div class="homec-property__body">
                                                <div class="homec-property__body--inside">
                                                    <div class="homec-property__price">3,976 تومان<span>/ماهانه</span></div>
                                                    <h3 class="homec-property__title">فضای اداری شمال غربی</h3>
                                                    <div class="homec-property__text">
                                                        <img src="assets/img/location-icon2.svg" alt="#" />
                                                        <p>تهران ، زعفرانیه ، خیابان مهر</p>
                                                    </div>

                                                    <ul class="homec-property__list homec-border-top list-none">
                                                        <li><img src="assets/img/room-icon2.svg" alt="#" />3 خواب</li>
                                                        <li><img src="assets/img/bath-icon2.svg" alt="#" />2 حمام</li>
                                                        <li><img src="assets/img/size-icon2.svg" alt="#" />5x9 m2</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-pagination swiper-pagination__v2 swiper-pagination__featured"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pd-top-120 pd-btm-120">
        <div class="container homec-listing__container">
            <div class="row">
                <div class="col-12">
                    <div class="homec-section__head text-center mg-btm-60">
                        <span class="homec-section__badge homec-primary-color homec-section__badge--small m-0" data-aos="fade-in" data-aos-delay="300">مشاهده تمام 329 ملک جدید</span>
                        <h2 class="homec-section__title" data-aos="fade-in" data-aos-delay="400">یک محله یا شهر را جستجو کنید</h2>
                    </div>

                    <div class="homec-search-form mg-top-10" data-aos="fade-up" data-aos-delay="500">
                        <form class="homec-search-form__form homec-search-form__form--city" action="https://websmithyui.com/homeco-demo/property-grid.html">
                            <div class="homec-search-form__group">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_275_829" style="mask-type: luminance;" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <path d="M0 2.9405e-05H24V24H0V2.9405e-05Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_275_829)">
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12 24C12.2351 24 12.4546 23.8825 12.585 23.6869C13.1198 22.8847 13.7306 22.0293 14.3771 21.124C14.5713 20.852 14.7687 20.5756 14.9682 20.2947C15.8268 19.086 16.717 17.8062 17.5208 16.4992C19.1133 13.9099 20.4375 11.1064 20.4375 8.43752C20.4375 3.78447 16.653 2.9405e-05 12 2.9405e-05C7.34694 2.9405e-05 3.5625 3.78447 3.5625 8.43752C3.5625 11.1064 4.88667 13.9099 6.47921 16.4992C7.28303 17.8062 8.17317 19.086 9.03176 20.2947C9.23131 20.5756 9.42873 20.852 9.62293 21.124C10.2694 22.0293 10.8802 22.8847 11.415 23.6869C11.5454 23.8825 11.7649 24 12 24ZM7.67704 15.7625C6.10551 13.2073 4.96875 10.6905 4.96875 8.43752C4.96875 4.56111 8.12359 1.40628 12 1.40628C15.8764 1.40628 19.0312 4.56111 19.0312 8.43752C19.0312 10.6905 17.8945 13.2073 16.3229 15.7625C15.5447 17.0278 14.6771 18.2763 13.8218 19.4803C13.6277 19.7535 13.4339 20.0249 13.2418 20.2939C12.8133 20.894 12.3936 21.4818 12 22.0486C11.6064 21.4818 11.1867 20.894 10.7582 20.2939C10.5661 20.0249 10.3723 19.7534 10.1782 19.4803C9.32291 18.2763 8.45524 17.0278 7.67704 15.7625Z"
                                                fill="#7E8BA0"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M7.78125 8.4375C7.78125 10.7642 9.67325 12.6562 12 12.6562C14.3267 12.6562 16.2187 10.7642 16.2187 8.4375C16.2187 6.11076 14.3267 4.21876 12 4.21876C9.67325 4.21876 7.78125 6.11076 7.78125 8.4375ZM12 11.25C10.4499 11.25 9.1875 9.9876 9.1875 8.4375C9.1875 6.88741 10.4499 5.62501 12 5.62501C13.5501 5.62501 14.8125 6.88741 14.8125 8.4375C14.8125 9.9876 13.5501 11.25 12 11.25Z"
                                                fill="#7E8BA0"
                                        />
                                    </g>
                                </svg>

                                <div class="form-group">
                                    <select>
                                        <option data-display="Apartment">مکان را انتخاب کنید</option>
                                        <option value="1">تهران</option>
                                        <option value="2">کرج</option>
                                        <option value="3">تبریز</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="homec-btn">
                                    <span class="homec-btn__inside">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M8.45185 16.8948C10.3289 16.8949 12.1522 16.2686 13.633 15.1152L19.2197 20.7019C19.637 21.105 20.3021 21.0934 20.7051 20.6761C21.0983 20.269 21.0983 19.6236 20.7051 19.2165L15.1184 13.6298C17.9805 9.9456 17.314 4.63881 13.6298 1.77676C9.94555 -1.08529 4.63881 -0.418815 1.77676 3.26541C-1.08529 6.94964 -0.418815 12.2564 3.26541 15.1185C4.74865 16.2707 6.57361 16.8958 8.45185 16.8948ZM3.96301 3.95978C6.44215 1.48059 10.4616 1.48054 12.9408 3.95969C15.42 6.43883 15.4201 10.4583 12.9409 12.9375C10.4618 15.4167 6.44229 15.4167 3.9631 12.9376C3.96305 12.9376 3.96305 12.9376 3.96301 12.9375C1.48386 10.4764 1.46926 6.47159 3.93034 3.99245C3.94121 3.98153 3.95209 3.97065 3.96301 3.95978Z"
                                            ></path>
                                        </svg>
                                        <span>جستجو</span>
                                    </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="homec-listing mg-top-40">
                        <div class="homec-listing__single">
                            <div class="homec-listing__inner">
                                <a href="property-grid.html">
                                    <img src="assets/img/listing-img1.jpg" alt="#" />
                                    <div class="homec-overlay homec-listing__overlay"></div>
                                    <h4 class="homec-listing__title"><span>4+ ملک</span>تهران</h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-listing__single">
                            <div class="homec-listing__inner">
                                <a href="property-grid.html">
                                    <img src="assets/img/listing-img2.jpg" alt="#" />
                                    <div class="homec-overlay homec-listing__overlay"></div>
                                    <h4 class="homec-listing__title"><span>4+ ملک</span>کرج</h4>
                                </a>
                            </div>
                            <div class="homec-listing__inner">
                                <a href="property-grid.html">
                                    <img src="assets/img/listing-img3.jpg" alt="#" />
                                    <div class="homec-overlay homec-listing__overlay"></div>
                                    <h4 class="homec-listing__title"><span>4+ ملک</span>تبریز</h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-listing__single">
                            <div class="homec-listing__inner">
                                <a href="property-grid.html">
                                    <img src="assets/img/listing-img4.jpg" alt="#" />
                                    <div class="homec-overlay homec-listing__overlay"></div>
                                    <h4 class="homec-listing__title"><span>4+ ملک</span>اصفهان</h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-listing__single">
                            <div class="homec-listing__inner">
                                <a href="property-grid.html">
                                    <img src="assets/img/listing-img5.jpg" alt="#" />
                                    <div class="homec-overlay homec-listing__overlay"></div>
                                    <h4 class="homec-listing__title"><span>4+ ملک</span>مشهد</h4>
                                </a>
                            </div>
                            <div class="homec-listing__inner">
                                <a href="property-grid.html">
                                    <img src="assets/img/listing-img6.jpg" alt="#" />
                                    <div class="homec-overlay homec-listing__overlay"></div>
                                    <h4 class="homec-listing__title"><span>4+ ملک</span>سمنان</h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-listing__single">
                            <div class="homec-listing__inner">
                                <a href="property-grid.html">
                                    <img src="assets/img/listing-img7.jpg" alt="#" />
                                    <div class="homec-overlay homec-listing__overlay"></div>
                                    <h4 class="homec-listing__title"><span>4+ ملک</span>شیراز</h4>
                                </a>
                            </div>
                            <div class="homec-listing__inner">
                                <a href="property-grid.html">
                                    <img src="assets/img/listing-img8.jpg" alt="#" />
                                    <div class="homec-overlay homec-listing__overlay"></div>
                                    <h4 class="homec-listing__title"><span>4+ ملک</span>کیش</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center mg-top-40" data-aos="fade-in" data-aos-delay="300">
                    <a href="property-grid.html" class="homec-btn"><span>مشاهده همه</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="homec-about homec-bg-third-color pd-top-90 pd-btm-120">
        <div class="homec-shape">
            <div class="homec-shape-single homec-shape-1"><img src="assets/img/anim-shape-1.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-2"><img src="assets/img/anim-shape-2.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-3"><img src="assets/img/anim-shape-3.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-4"><img src="assets/img/anim-shape-1.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-5"><img src="assets/img/anim-shape-2.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-6"><img src="assets/img/anim-shape-3.svg" alt="#" /></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1 col-12 mg-top-30" data-aos="fade-left" data-aos-delay="400">
                    <div class="homec-image-group homec-image-group--v2">
                        <div class="homec-image-group__main">
                            <img src="assets/img/about-3.jpg" alt="#" />
                            <div class="homec-experiences">
                                <h4 class="homec-experiences__title">12 سال <span>تجربه ما</span></h4>
                            </div>
                        </div>
                        <div class="homec-ceo-quote">
                            <div class="homec-ceo-quote__img">
                                <div class="homec-overlay"></div>
                                <img src="assets/img/ceo-img.png" alt="#" />
                            </div>
                            <h4 class="homec-ceo-quote__title">وید دی وارن<span>مدیرعامل و موسس هوم کو</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mg-top-30">
                    <div class="homec-about-content homec-about-content--v2">
                        <div class="homec-section__head">
                            <div class="homec-section__shape">
                                <span class="homec-section__badge homec-section__badge--shape" style="background-image: url('assets/img/section-shape.svg');">درباره هوم کو</span>
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
                                        <img src="assets/img/count-icon1.svg" alt="#" />
                                    </div>
                                    <h3 class="homec-funfact__number"><span class="counter">90</span>k+ اجاره کنندگان</h3>
                                    <p class="homec-funfact__text">به خدمات و مراقبت ما ایمان داشته باشید</p>
                                </div>
                                <div class="homec-funfact__single homec-funfact__single--v2">
                                    <div class="homec-funfact__icon">
                                        <img src="assets/img/count-icon2.svg" alt="#" />
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

    <section class="homec-properties homec-bg-cover pd-top-120 pd-btm-120" style="background-image: url('assets/img/bg-shape-four.svg');">
        <div class="homec-shape">
            <div class="homec-shape-single homec-shape-7"><img src="assets/img/anim-shape-4.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-8"><img src="assets/img/anim-shape-5.svg" alt="#" /></div>
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
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="400">
                    <div class="homec-property">
                        <div class="homec-property__head">
                            <img src="assets/img/property-img11.png" alt="#" />

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
                                    <img src="assets/img/agent-1.jpg" alt="#" />
                                    <h4 class="homec-property__asticky--label">وید وایرن<span>مشاور</span></h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <div class="homec-property__price">3,976  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge">برای اجاره</span>
                            </div>
                            <h3 class="homec-property__title"><a href="property-single.html">فضای اداری شمال غربی</a></h3>
                            <div class="homec-property__text">
                                <img src="assets/img/location-icon.svg" alt="#" />
                                <p>تهران ، زعفرانیه ، خیابان مهر</p>
                            </div>

                            <ul class="homec-property__list homec-border-top list-none">
                                <li><img src="assets/img/room-icon.svg" alt="#" />3 خواب</li>
                                <li><img src="assets/img/bath-icon.svg" alt="#" />2 حمام</li>
                                <li><img src="assets/img/size-icon.svg" alt="#" />120 متری</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="600">
                    <div class="homec-property">
                        <div class="homec-property__head">
                            <img src="assets/img/property-img12.png" alt="#" />

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
                                    <img src="assets/img/agent-2.jpg" alt="#" />
                                    <h4 class="homec-property__asticky--label">وید وایرن<span>مشاور</span></h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <div class="homec-property__price">3,976  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge">برای اجاره</span>
                            </div>
                            <h3 class="homec-property__title"><a href="property-single.html">نمای دریاچه حومه شهر...</a></h3>
                            <div class="homec-property__text">
                                <img src="assets/img/location-icon.svg" alt="#" />
                                <p>تهران ، زعفرانیه ، خیابان مهر</p>
                            </div>

                            <ul class="homec-property__list homec-border-top list-none">
                                <li><img src="assets/img/room-icon.svg" alt="#" />3 خواب</li>
                                <li><img src="assets/img/bath-icon.svg" alt="#" />2 حمام</li>
                                <li><img src="assets/img/size-icon.svg" alt="#" />120 متری</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="800">
                    <div class="homec-property">
                        <div class="homec-property__head">
                            <img src="assets/img/property-img13.png" alt="#" />

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
                                    <img src="assets/img/agent-3.jpg" alt="#" />
                                    <h4 class="homec-property__asticky--label">وید وایرن<span>مشاور</span></h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <div class="homec-property__price">3,976  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge">برای اجاره</span>
                            </div>
                            <h3 class="homec-property__title"><a href="property-single.html">مرکز خرید سنتر</a></h3>
                            <div class="homec-property__text">
                                <img src="assets/img/location-icon.svg" alt="#" />
                                <p>تهران ، زعفرانیه ، خیابان مهر</p>
                            </div>

                            <ul class="homec-property__list homec-border-top list-none">
                                <li><img src="assets/img/room-icon.svg" alt="#" />3 خواب</li>
                                <li><img src="assets/img/bath-icon.svg" alt="#" />2 حمام</li>
                                <li><img src="assets/img/size-icon.svg" alt="#" />120 متری</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="400">
                    <div class="homec-property">
                        <div class="homec-property__head">
                            <img src="assets/img/property-img14.png" alt="#" />

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
                                    <img src="assets/img/agent-4.jpg" alt="#" />
                                    <h4 class="homec-property__asticky--label">وید وایرن<span>مشاور</span></h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <div class="homec-property__price">3,976  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge">برای اجاره</span>
                            </div>
                            <h3 class="homec-property__title"><a href="property-single.html">خانه ویلایی سرسبز</a></h3>
                            <div class="homec-property__text">
                                <img src="assets/img/location-icon.svg" alt="#" />
                                <p>تهران ، زعفرانیه ، خیابان مهر</p>
                            </div>

                            <ul class="homec-property__list homec-border-top list-none">
                                <li><img src="assets/img/room-icon.svg" alt="#" />3 خواب</li>
                                <li><img src="assets/img/bath-icon.svg" alt="#" />2 حمام</li>
                                <li><img src="assets/img/size-icon.svg" alt="#" />120 متری</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="600">
                    <div class="homec-property">
                        <div class="homec-property__head">
                            <img src="assets/img/property-img15.png" alt="#" />

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
                                    <img src="assets/img/agent-5.jpg" alt="#" />
                                    <h4 class="homec-property__asticky--label">وید وایرن<span>مشاور</span></h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <div class="homec-property__price">3,976  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge">برای اجاره</span>
                            </div>
                            <h3 class="homec-property__title"><a href="property-single.html">آپارتمان الماس مانکو</a></h3>
                            <div class="homec-property__text">
                                <img src="assets/img/location-icon.svg" alt="#" />
                                <p>تهران ، زعفرانیه ، خیابان مهر</p>
                            </div>

                            <ul class="homec-property__list homec-border-top list-none">
                                <li><img src="assets/img/room-icon.svg" alt="#" />3 خواب</li>
                                <li><img src="assets/img/bath-icon.svg" alt="#" />2 حمام</li>
                                <li><img src="assets/img/size-icon.svg" alt="#" />120 متری</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="800">
                    <div class="homec-property">
                        <div class="homec-property__head">
                            <img src="assets/img/property-img16.png" alt="#" />

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
                                    <img src="assets/img/agent-6.jpg" alt="#" />
                                    <h4 class="homec-property__asticky--label">وید وایرن<span>مشاور</span></h4>
                                </a>
                            </div>
                        </div>

                        <div class="homec-property__body">
                            <div class="homec-property__topbar">
                                <div class="homec-property__price">3,976  تومان<span>/ماهانه</span></div>
                                <span class="homec-property__salebadge">برای اجاره</span>
                            </div>
                            <h3 class="homec-property__title"><a href="property-single.html">ویلای حومه شهر</a></h3>
                            <div class="homec-property__text">
                                <img src="assets/img/location-icon.svg" alt="#" />
                                <p>تهران ، زعفرانیه ، خیابان مهر</p>
                            </div>

                            <ul class="homec-property__list homec-border-top list-none">
                                <li><img src="assets/img/room-icon.svg" alt="#" />3 خواب</li>
                                <li><img src="assets/img/bath-icon.svg" alt="#" />2 حمام</li>
                                <li><img src="assets/img/size-icon.svg" alt="#" />120 متری</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center mg-top-40" data-aos="fade-in" data-aos-delay="300">
                    <a href="property-grid.html" class="homec-btn"><span>مشاهده تمام ملک ها</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="homec-bg-primary-color pd-top-110 pd-btm-110">
        <div class="homec-bg homec-bg__opacity" style="background-image: url(assets/img/features-list-bg.svg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12 mg-btm-40">
                    <div class="homec-section__head section-white text-center">
                        <p class="text-white" data-aos="fade-in" data-aos-delay="300">4 مرحله ثبت ملک</p>
                        <h2 class="homec-section__title" data-aos="fade-in" data-aos-delay="400">چرا ما را انتخاب کنید</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="homec-features-list">
                        <div class="homec-features-list__single" data-aos="fade-in" data-aos-delay="400">
                            <div class="homec-features-list__head">
                                <div class="homec-features-list__first">
                                    <div class="homec-features-list__icon">
                                        <img src="assets/img/hand-icon.svg" alt="#" />
                                        <h4 class="homec-features-list__number">1</h4>
                                    </div>
                                </div>
                                <div class="homec-features-list__arrow homec-features-list__arrow--one">
                                    <img src="assets/img/arrow-icon.svg" alt="#" />
                                </div>
                            </div>
                            <div class="homec-features-list__body">
                                <h4 class="homec-features-list__title">مورد اعتماد</h4>
                                <p class="homec-features-list__text">به خدمات و مراقبت ما ایمان داشته باشید</p>
                            </div>
                        </div>

                        <div class="homec-features-list__single" data-aos="fade-in" data-aos-delay="600">
                            <div class="homec-features-list__head">
                                <div class="homec-features-list__first">
                                    <div class="homec-features-list__icon">
                                        <img src="assets/img/support-icon.svg" alt="#" />
                                    </div>
                                    <h4 class="homec-features-list__number">2</h4>
                                </div>
                                <div class="homec-features-list__arrow homec-features-list__arrow--two">
                                    <img src="assets/img/arrow-icon.svg" alt="#" />
                                </div>
                            </div>
                            <div class="homec-features-list__body">
                                <h4 class="homec-features-list__title">پشتیبانی 24 ساعته</h4>
                                <p class="homec-features-list__text">به خدمات و مراقبت ما ایمان داشته باشید</p>
                            </div>
                        </div>

                        <div class="homec-features-list__single" data-aos="fade-in" data-aos-delay="800">
                            <div class="homec-features-list__head">
                                <div class="homec-features-list__first">
                                    <div class="homec-features-list__icon">
                                        <img src="assets/img/finance-icon.svg" alt="#" />
                                    </div>
                                    <h4 class="homec-features-list__number">3</h4>
                                </div>
                                <div class="homec-features-list__arrow homec-features-list__arrow--three">
                                    <img src="assets/img/arrow-icon.svg" alt="#" />
                                </div>
                            </div>
                            <div class="homec-features-list__body">
                                <h4 class="homec-features-list__title">تامین مالی آسان</h4>
                                <p class="homec-features-list__text">به خدمات و مراقبت ما ایمان داشته باشید</p>
                            </div>
                        </div>

                        <div class="homec-features-list__single" data-aos="fade-in" data-aos-delay="1000">
                            <div class="homec-features-list__head">
                                <div class="homec-features-list__first">
                                    <div class="homec-features-list__icon">
                                        <img src="assets/img/wide-house-icon.svg" alt="#" />
                                    </div>
                                    <h4 class="homec-features-list__number">4</h4>
                                </div>
                            </div>
                            <div class="homec-features-list__body">
                                <h4 class="homec-features-list__title">خانه وسیع</h4>
                                <p class="homec-features-list__text">به خدمات و مراقبت ما ایمان داشته باشید</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homec-about homec-bg-third-color pd-top-120 pd-btm-120">
        <div class="homec-shape">
            <div class="homec-shape-single homec-shape-1"><img src="assets/img/anim-shape-1.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-2"><img src="assets/img/anim-shape-2.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-3"><img src="assets/img/anim-shape-3.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-4"><img src="assets/img/anim-shape-1.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-5"><img src="assets/img/anim-shape-2.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-6"><img src="assets/img/anim-shape-3.svg" alt="#" /></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
                    <div class="homec-section__head text-center mg-btm-30">
                        <span class="homec-section__badge homec-section__badge--small homec-primary-color m-0" data-aos="fade-in" data-aos-delay="300">مشاهده همه 234 مشاور</span>
                        <h2 class="homec-section__title" data-aos="fade-in" data-aos-delay="400">با مشاوران ما آشنا شوید</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="400">
                    <div class="homec-agent homec-agent__v2">
                        <div class="homec-agent__head">
                            <img src="assets/img/agent-9.jpg" alt="#" />
                        </div>

                        <div class="homec-agent__body">
                            <a class="homec-agent__body--btn" href="agent-detail.html">مشاهده جزئیات</a>
                            <ul class="homec-agent__social list-none">
                                <li>
                                    <a href="#">
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 15.0004H0V4.66711H4V15.0004ZM0.666626 14.3337H3.33337V5.33374H0.666626V14.3337Z" />
                                            <path
                                                    d="M15.334 15.0002H11.334V9.33362C11.334 8.78137 10.8862 8.33362 10.334 8.33362C9.78162 8.33362 9.33399 8.78137 9.33399 9.33362V15.0002H5.33398V4.66699H9.33399V5.33777C9.93775 4.90125 10.6639 4.6665 11.4089 4.66699C13.5714 4.66699 15.334 6.42114 15.334 8.57947V15.0002ZM12.0006 14.3336H14.6672V8.57947C14.6627 6.78381 13.2046 5.3313 11.4089 5.33362C10.5881 5.33362 9.81726 5.67944 9.24231 6.30444L8.66724 6.93359V5.33362H6.00061V14.3336H8.66724V9.33362C8.66724 8.41309 9.41345 7.66699 10.334 7.66699C11.2544 7.66699 12.0006 8.41309 12.0006 9.33362V14.3336Z"
                                            />
                                            <path
                                                    d="M2 4C0.895386 4 0 3.10461 0 2C0 0.895508 0.895386 0 2 0C3.10461 0 4 0.895508 4 2C3.99768 3.10364 3.10364 3.9978 2 4ZM2 0.666748C1.26367 0.666748 0.666626 1.26367 0.666626 2C0.666626 2.73645 1.26367 3.33337 2 3.33337C2.73633 3.33337 3.33337 2.73645 3.33337 2C3.33337 1.26367 2.73633 0.666748 2 0.666748Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M10.888 0H4.11202C1.84465 0 0 1.84465 0 4.11205V10.888C0 13.1554 1.84465 15 4.11202 15H10.888C13.1554 15 15 13.1554 15 10.888V4.11205C15 1.84465 13.1554 0 10.888 0ZM14.1142 10.888C14.1142 12.6669 12.6669 14.1142 10.888 14.1142H4.11202C2.33309 14.1142 0.88582 12.6669 0.88582 10.888V4.11205C0.88582 2.33309 2.33309 0.88582 4.11202 0.88582H10.888C12.6669 0.88582 14.1142 2.33309 14.1142 4.11205V10.888Z"
                                            />
                                            <path
                                                    d="M7.50103 3.38684C5.23246 3.38684 3.38684 5.23246 3.38684 7.50103C3.38684 9.7696 5.23243 11.6152 7.50103 11.6152C9.7696 11.6152 11.6152 9.76958 11.6152 7.501C11.6152 5.23243 9.7696 3.38684 7.50103 3.38684ZM7.50103 10.7294C5.72089 10.7294 4.27263 9.28114 4.27263 7.501C4.27263 5.72086 5.72089 4.2726 7.50103 4.2726C9.2812 4.2726 10.7295 5.72089 10.7295 7.50103C10.7295 9.28117 9.2812 10.7294 7.50103 10.7294Z"
                                            />
                                            <path
                                                    d="M11.8605 1.88965C11.1712 1.88965 10.6105 2.45042 10.6105 3.13966C10.6105 3.8289 11.1712 4.38964 11.8605 4.38964C12.5497 4.38964 13.1104 3.82887 13.1104 3.13963C13.1104 2.45039 12.5497 1.88965 11.8605 1.88965ZM11.8605 3.50379C11.6597 3.50379 11.4963 3.34043 11.4963 3.13963C11.4963 2.93883 11.6597 2.77547 11.8605 2.77547C12.0613 2.77547 12.2246 2.93886 12.2246 3.13963C12.2246 3.3404 12.0613 3.50379 11.8605 3.50379Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M11.8617 9.30523C11.5542 8.98499 11.1832 8.81378 10.79 8.81378C10.4001 8.81378 10.0259 8.98182 9.70568 9.30206L8.70376 10.3008C8.62132 10.2564 8.53889 10.2152 8.45962 10.174C8.34548 10.1169 8.23768 10.063 8.14573 10.0059C7.20722 9.40986 6.35432 8.63305 5.5363 7.62796C5.13997 7.127 4.87363 6.70531 4.68022 6.27727C4.94022 6.03947 5.18118 5.79216 5.41581 5.55437C5.50459 5.46559 5.59337 5.37364 5.68215 5.28486C6.34798 4.61903 6.34798 3.75661 5.68215 3.09078L4.81656 2.2252C4.71827 2.12691 4.61681 2.02545 4.52169 1.92399C4.33145 1.72741 4.1317 1.52449 3.92561 1.33425C3.61806 1.02987 3.25027 0.868164 2.86345 0.868164C2.47663 0.868164 2.1025 1.02987 1.78543 1.33425C1.78226 1.33742 1.78226 1.33742 1.77909 1.34059L0.701075 2.42812C0.295233 2.83396 0.0637769 3.32858 0.0130467 3.90246C-0.0630486 4.82829 0.209626 5.6907 0.418888 6.25508C0.932531 7.64064 1.69983 8.92475 2.84443 10.3008C4.23316 11.9591 5.90409 13.2685 7.81281 14.1912C8.54206 14.5368 9.51545 14.9458 10.603 15.0155C10.6696 15.0187 10.7393 15.0219 10.8027 15.0219C11.5351 15.0219 12.1502 14.7587 12.6322 14.2356C12.6354 14.2292 12.6417 14.2261 12.6449 14.2197C12.8097 14.02 13 13.8392 13.1997 13.6458C13.3361 13.5158 13.4756 13.3795 13.6119 13.2368C13.9258 12.9102 14.0907 12.5298 14.0907 12.1398C14.0907 11.7466 13.9226 11.3693 13.6024 11.0522L11.8617 9.30523ZM12.9968 12.6439C12.9936 12.6471 12.9936 12.6439 12.9968 12.6439C12.8731 12.7771 12.7463 12.8976 12.61 13.0307C12.4039 13.2273 12.1946 13.4334 11.9981 13.6649C11.6778 14.0073 11.3005 14.169 10.8059 14.169C10.7583 14.169 10.7076 14.169 10.66 14.1658C9.71837 14.1056 8.84327 13.7378 8.18695 13.4239C6.39237 12.5551 4.81656 11.3218 3.50709 9.75863C2.4259 8.4555 1.703 7.25066 1.22423 5.95704C0.929361 5.16755 0.821559 4.55244 0.869119 3.97222C0.900825 3.60125 1.0435 3.2937 1.30667 3.03054L2.38785 1.94935C2.54321 1.8035 2.70809 1.72424 2.86979 1.72424C3.06954 1.72424 3.23124 1.84472 3.3327 1.94618C3.33587 1.94935 3.33904 1.95252 3.34222 1.95569C3.53562 2.13642 3.71952 2.32349 3.91293 2.52324C4.01122 2.6247 4.11268 2.72616 4.21414 2.83079L5.07972 3.69637C5.41581 4.03246 5.41581 4.34318 5.07972 4.67927C4.98778 4.77122 4.899 4.86317 4.80705 4.95194C4.54072 5.22462 4.28707 5.47827 4.01122 5.72558C4.00488 5.73192 3.99854 5.73509 3.99537 5.74143C3.72269 6.01411 3.77342 6.28044 3.83049 6.46117C3.83366 6.47068 3.83683 6.48019 3.84001 6.4897C4.06512 7.03505 4.38218 7.5487 4.86412 8.16063L4.86729 8.1638C5.74239 9.24182 6.66504 10.082 7.68282 10.7257C7.81281 10.8081 7.94598 10.8747 8.07281 10.9381C8.18695 10.9952 8.29475 11.0491 8.3867 11.1062C8.39938 11.1125 8.41206 11.122 8.42475 11.1283C8.53255 11.1822 8.63401 11.2076 8.73864 11.2076C9.0018 11.2076 9.16667 11.0427 9.22058 10.9888L10.3049 9.90448C10.4127 9.79668 10.5839 9.66668 10.7837 9.66668C10.9803 9.66668 11.142 9.79034 11.2403 9.89814C11.2434 9.90131 11.2434 9.90131 11.2466 9.90448L12.9936 11.6515C13.3202 11.9749 13.3202 12.3078 12.9968 12.6439Z"
                                            />
                                            <path
                                                    d="M8.10819 3.57275C8.93889 3.71226 9.69351 4.10542 10.2959 4.70784C10.8983 5.31026 11.2883 6.06487 11.431 6.89558C11.4659 7.10484 11.6466 7.25069 11.8527 7.25069C11.8781 7.25069 11.9003 7.24752 11.9256 7.24435C12.1603 7.2063 12.3156 6.98436 12.2776 6.74973C12.1064 5.74464 11.6308 4.82832 10.9047 4.10225C10.1786 3.37617 9.2623 2.90058 8.25721 2.72936C8.02258 2.69132 7.80381 2.84668 7.76259 3.07813C7.72137 3.30959 7.87356 3.53471 8.10819 3.57275Z"
                                            />
                                            <path
                                                    d="M14.9934 6.62681C14.7113 4.97174 13.9313 3.46569 12.7328 2.26719C11.5343 1.06869 10.0282 0.288712 8.37315 0.00652564C8.1417 -0.0346926 7.92292 0.123839 7.8817 0.355296C7.84366 0.589923 7.99902 0.808697 8.23364 0.849915C9.71116 1.1004 11.0587 1.80111 12.1304 2.86961C13.202 3.94129 13.8996 5.28881 14.1501 6.76632C14.1849 6.97559 14.3657 7.12143 14.5717 7.12143C14.5971 7.12143 14.6193 7.11826 14.6447 7.11509C14.8761 7.08022 15.0347 6.85827 14.9934 6.62681Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M17.9205 2.68028C17.8141 2.50717 17.6193 2.40904 17.4166 2.42662L16.5191 2.50481L17.377 0.775362C17.4792 0.569381 17.4388 0.321212 17.2767 0.158192C17.1145 -0.00482808 16.8665 -0.0463829 16.6601 0.0547268L14.3894 1.16676C12.9866 0.426154 11.2339 0.645987 10.0279 1.74459C9.0214 2.66147 8.49233 4.07148 8.59098 5.4776C5.96026 5.21392 3.73346 3.70814 2.41671 1.27511C2.32935 1.11371 2.16556 1.00813 1.9825 0.99516C1.79909 0.982398 1.62239 1.06368 1.51319 1.21123C0.696511 2.31451 0.639207 3.82722 1.27944 5.07172C1.10295 5.02714 0.915149 4.96681 0.706882 4.89724C0.528464 4.83758 0.331764 4.87579 0.188572 4.99785C0.0453801 5.11992 -0.023456 5.30804 0.00716515 5.4937C0.260502 7.02961 1.15615 8.21002 2.57098 8.90872C2.38676 8.97288 2.19878 9.02498 2.00763 9.06481C1.81772 9.1044 1.66394 9.24334 1.60541 9.4283C1.54687 9.61322 1.59265 9.81537 1.72519 9.95701C2.74405 11.0461 4.21584 11.5821 5.26125 11.8392C4.07261 12.7701 2.78951 12.9259 0.925028 12.8618C0.709203 12.8553 0.510358 12.9769 0.41962 13.1725C0.328916 13.3682 0.364108 13.5992 0.509058 13.759C1.28629 14.6157 4.118 15.5817 7.09476 15.6541C7.2125 15.657 7.33259 15.6585 7.45522 15.6585C9.5453 15.6585 12.3076 15.2105 14.2903 13.2277C15.791 11.7271 16.7297 9.99945 17.0802 8.09306C17.3632 6.55331 17.1843 5.32031 17.0984 4.72771C17.092 4.68415 17.0853 4.63792 17.0798 4.59749L17.9194 3.24432C18.0265 3.07171 18.0269 2.85339 17.9205 2.68028ZM16.0359 4.88184C16.1952 5.97956 16.6798 9.31998 13.5312 12.4686C11.7009 14.2988 9.03511 14.6275 7.12085 14.581C5.48745 14.5412 4.02642 14.2288 2.96751 13.8726C3.39743 13.8198 3.78057 13.7385 4.14222 13.6261C5.13922 13.3162 5.9815 12.7586 6.79284 11.8712C6.92808 11.7233 6.96964 11.5125 6.9007 11.3243C6.83176 11.1362 6.66371 11.0021 6.46493 10.9766C5.95309 10.911 4.41514 10.6521 3.20407 9.81674C3.55307 9.674 3.88966 9.49537 4.21106 9.28219C4.38737 9.16518 4.47856 8.95558 4.44383 8.74686C4.40913 8.53817 4.25511 8.36924 4.05043 8.3156C3.0592 8.05572 1.86289 7.47423 1.31126 6.17615C1.66352 6.23789 2.04655 6.25283 2.45507 6.16125C2.64442 6.11885 2.79616 5.97752 2.85184 5.79161C2.90757 5.60571 2.85863 5.40419 2.72384 5.26462C2.03745 4.55369 1.78077 3.52916 2.00099 2.65247C2.72219 3.70649 3.63587 4.59356 4.68268 5.2494C6.02182 6.0884 7.58481 6.55208 9.20274 6.59016C9.36737 6.59364 9.5253 6.52178 9.63013 6.39423C9.7349 6.26672 9.77519 6.09807 9.73936 5.93695C9.461 4.68556 9.85802 3.35152 10.7508 2.53824C11.6769 1.69467 13.0455 1.5667 14.079 2.22725C14.2368 2.32811 14.4359 2.3394 14.6041 2.25699L15.713 1.7139L15.1326 2.88394C15.0464 3.05778 15.0607 3.26464 15.17 3.42492C15.2794 3.5852 15.4664 3.67418 15.66 3.6572L16.442 3.5891L16.0818 4.16971C15.9609 4.36458 15.9859 4.53748 16.0359 4.88184Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="homec-agent__title">
                                <a href="agent-detail.html">وید دی وارن<span>مشاور املاک</span></a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="500">
                    <div class="homec-agent homec-agent__v2">
                        <div class="homec-agent__head">
                            <img src="assets/img/agent-10.jpg" alt="#" />
                        </div>

                        <div class="homec-agent__body">
                            <a class="homec-agent__body--btn" href="agent-detail.html">مشاهده جزئیات</a>
                            <ul class="homec-agent__social list-none">
                                <li>
                                    <a href="#">
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 15.0004H0V4.66711H4V15.0004ZM0.666626 14.3337H3.33337V5.33374H0.666626V14.3337Z" />
                                            <path
                                                    d="M15.334 15.0002H11.334V9.33362C11.334 8.78137 10.8862 8.33362 10.334 8.33362C9.78162 8.33362 9.33399 8.78137 9.33399 9.33362V15.0002H5.33398V4.66699H9.33399V5.33777C9.93775 4.90125 10.6639 4.6665 11.4089 4.66699C13.5714 4.66699 15.334 6.42114 15.334 8.57947V15.0002ZM12.0006 14.3336H14.6672V8.57947C14.6627 6.78381 13.2046 5.3313 11.4089 5.33362C10.5881 5.33362 9.81726 5.67944 9.24231 6.30444L8.66724 6.93359V5.33362H6.00061V14.3336H8.66724V9.33362C8.66724 8.41309 9.41345 7.66699 10.334 7.66699C11.2544 7.66699 12.0006 8.41309 12.0006 9.33362V14.3336Z"
                                            />
                                            <path
                                                    d="M2 4C0.895386 4 0 3.10461 0 2C0 0.895508 0.895386 0 2 0C3.10461 0 4 0.895508 4 2C3.99768 3.10364 3.10364 3.9978 2 4ZM2 0.666748C1.26367 0.666748 0.666626 1.26367 0.666626 2C0.666626 2.73645 1.26367 3.33337 2 3.33337C2.73633 3.33337 3.33337 2.73645 3.33337 2C3.33337 1.26367 2.73633 0.666748 2 0.666748Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M10.888 0H4.11202C1.84465 0 0 1.84465 0 4.11205V10.888C0 13.1554 1.84465 15 4.11202 15H10.888C13.1554 15 15 13.1554 15 10.888V4.11205C15 1.84465 13.1554 0 10.888 0ZM14.1142 10.888C14.1142 12.6669 12.6669 14.1142 10.888 14.1142H4.11202C2.33309 14.1142 0.88582 12.6669 0.88582 10.888V4.11205C0.88582 2.33309 2.33309 0.88582 4.11202 0.88582H10.888C12.6669 0.88582 14.1142 2.33309 14.1142 4.11205V10.888Z"
                                            />
                                            <path
                                                    d="M7.50103 3.38684C5.23246 3.38684 3.38684 5.23246 3.38684 7.50103C3.38684 9.7696 5.23243 11.6152 7.50103 11.6152C9.7696 11.6152 11.6152 9.76958 11.6152 7.501C11.6152 5.23243 9.7696 3.38684 7.50103 3.38684ZM7.50103 10.7294C5.72089 10.7294 4.27263 9.28114 4.27263 7.501C4.27263 5.72086 5.72089 4.2726 7.50103 4.2726C9.2812 4.2726 10.7295 5.72089 10.7295 7.50103C10.7295 9.28117 9.2812 10.7294 7.50103 10.7294Z"
                                            />
                                            <path
                                                    d="M11.8605 1.88965C11.1712 1.88965 10.6105 2.45042 10.6105 3.13966C10.6105 3.8289 11.1712 4.38964 11.8605 4.38964C12.5497 4.38964 13.1104 3.82887 13.1104 3.13963C13.1104 2.45039 12.5497 1.88965 11.8605 1.88965ZM11.8605 3.50379C11.6597 3.50379 11.4963 3.34043 11.4963 3.13963C11.4963 2.93883 11.6597 2.77547 11.8605 2.77547C12.0613 2.77547 12.2246 2.93886 12.2246 3.13963C12.2246 3.3404 12.0613 3.50379 11.8605 3.50379Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M11.8617 9.30523C11.5542 8.98499 11.1832 8.81378 10.79 8.81378C10.4001 8.81378 10.0259 8.98182 9.70568 9.30206L8.70376 10.3008C8.62132 10.2564 8.53889 10.2152 8.45962 10.174C8.34548 10.1169 8.23768 10.063 8.14573 10.0059C7.20722 9.40986 6.35432 8.63305 5.5363 7.62796C5.13997 7.127 4.87363 6.70531 4.68022 6.27727C4.94022 6.03947 5.18118 5.79216 5.41581 5.55437C5.50459 5.46559 5.59337 5.37364 5.68215 5.28486C6.34798 4.61903 6.34798 3.75661 5.68215 3.09078L4.81656 2.2252C4.71827 2.12691 4.61681 2.02545 4.52169 1.92399C4.33145 1.72741 4.1317 1.52449 3.92561 1.33425C3.61806 1.02987 3.25027 0.868164 2.86345 0.868164C2.47663 0.868164 2.1025 1.02987 1.78543 1.33425C1.78226 1.33742 1.78226 1.33742 1.77909 1.34059L0.701075 2.42812C0.295233 2.83396 0.0637769 3.32858 0.0130467 3.90246C-0.0630486 4.82829 0.209626 5.6907 0.418888 6.25508C0.932531 7.64064 1.69983 8.92475 2.84443 10.3008C4.23316 11.9591 5.90409 13.2685 7.81281 14.1912C8.54206 14.5368 9.51545 14.9458 10.603 15.0155C10.6696 15.0187 10.7393 15.0219 10.8027 15.0219C11.5351 15.0219 12.1502 14.7587 12.6322 14.2356C12.6354 14.2292 12.6417 14.2261 12.6449 14.2197C12.8097 14.02 13 13.8392 13.1997 13.6458C13.3361 13.5158 13.4756 13.3795 13.6119 13.2368C13.9258 12.9102 14.0907 12.5298 14.0907 12.1398C14.0907 11.7466 13.9226 11.3693 13.6024 11.0522L11.8617 9.30523ZM12.9968 12.6439C12.9936 12.6471 12.9936 12.6439 12.9968 12.6439C12.8731 12.7771 12.7463 12.8976 12.61 13.0307C12.4039 13.2273 12.1946 13.4334 11.9981 13.6649C11.6778 14.0073 11.3005 14.169 10.8059 14.169C10.7583 14.169 10.7076 14.169 10.66 14.1658C9.71837 14.1056 8.84327 13.7378 8.18695 13.4239C6.39237 12.5551 4.81656 11.3218 3.50709 9.75863C2.4259 8.4555 1.703 7.25066 1.22423 5.95704C0.929361 5.16755 0.821559 4.55244 0.869119 3.97222C0.900825 3.60125 1.0435 3.2937 1.30667 3.03054L2.38785 1.94935C2.54321 1.8035 2.70809 1.72424 2.86979 1.72424C3.06954 1.72424 3.23124 1.84472 3.3327 1.94618C3.33587 1.94935 3.33904 1.95252 3.34222 1.95569C3.53562 2.13642 3.71952 2.32349 3.91293 2.52324C4.01122 2.6247 4.11268 2.72616 4.21414 2.83079L5.07972 3.69637C5.41581 4.03246 5.41581 4.34318 5.07972 4.67927C4.98778 4.77122 4.899 4.86317 4.80705 4.95194C4.54072 5.22462 4.28707 5.47827 4.01122 5.72558C4.00488 5.73192 3.99854 5.73509 3.99537 5.74143C3.72269 6.01411 3.77342 6.28044 3.83049 6.46117C3.83366 6.47068 3.83683 6.48019 3.84001 6.4897C4.06512 7.03505 4.38218 7.5487 4.86412 8.16063L4.86729 8.1638C5.74239 9.24182 6.66504 10.082 7.68282 10.7257C7.81281 10.8081 7.94598 10.8747 8.07281 10.9381C8.18695 10.9952 8.29475 11.0491 8.3867 11.1062C8.39938 11.1125 8.41206 11.122 8.42475 11.1283C8.53255 11.1822 8.63401 11.2076 8.73864 11.2076C9.0018 11.2076 9.16667 11.0427 9.22058 10.9888L10.3049 9.90448C10.4127 9.79668 10.5839 9.66668 10.7837 9.66668C10.9803 9.66668 11.142 9.79034 11.2403 9.89814C11.2434 9.90131 11.2434 9.90131 11.2466 9.90448L12.9936 11.6515C13.3202 11.9749 13.3202 12.3078 12.9968 12.6439Z"
                                            />
                                            <path
                                                    d="M8.10819 3.57275C8.93889 3.71226 9.69351 4.10542 10.2959 4.70784C10.8983 5.31026 11.2883 6.06487 11.431 6.89558C11.4659 7.10484 11.6466 7.25069 11.8527 7.25069C11.8781 7.25069 11.9003 7.24752 11.9256 7.24435C12.1603 7.2063 12.3156 6.98436 12.2776 6.74973C12.1064 5.74464 11.6308 4.82832 10.9047 4.10225C10.1786 3.37617 9.2623 2.90058 8.25721 2.72936C8.02258 2.69132 7.80381 2.84668 7.76259 3.07813C7.72137 3.30959 7.87356 3.53471 8.10819 3.57275Z"
                                            />
                                            <path
                                                    d="M14.9934 6.62681C14.7113 4.97174 13.9313 3.46569 12.7328 2.26719C11.5343 1.06869 10.0282 0.288712 8.37315 0.00652564C8.1417 -0.0346926 7.92292 0.123839 7.8817 0.355296C7.84366 0.589923 7.99902 0.808697 8.23364 0.849915C9.71116 1.1004 11.0587 1.80111 12.1304 2.86961C13.202 3.94129 13.8996 5.28881 14.1501 6.76632C14.1849 6.97559 14.3657 7.12143 14.5717 7.12143C14.5971 7.12143 14.6193 7.11826 14.6447 7.11509C14.8761 7.08022 15.0347 6.85827 14.9934 6.62681Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M17.9205 2.68028C17.8141 2.50717 17.6193 2.40904 17.4166 2.42662L16.5191 2.50481L17.377 0.775362C17.4792 0.569381 17.4388 0.321212 17.2767 0.158192C17.1145 -0.00482808 16.8665 -0.0463829 16.6601 0.0547268L14.3894 1.16676C12.9866 0.426154 11.2339 0.645987 10.0279 1.74459C9.0214 2.66147 8.49233 4.07148 8.59098 5.4776C5.96026 5.21392 3.73346 3.70814 2.41671 1.27511C2.32935 1.11371 2.16556 1.00813 1.9825 0.99516C1.79909 0.982398 1.62239 1.06368 1.51319 1.21123C0.696511 2.31451 0.639207 3.82722 1.27944 5.07172C1.10295 5.02714 0.915149 4.96681 0.706882 4.89724C0.528464 4.83758 0.331764 4.87579 0.188572 4.99785C0.0453801 5.11992 -0.023456 5.30804 0.00716515 5.4937C0.260502 7.02961 1.15615 8.21002 2.57098 8.90872C2.38676 8.97288 2.19878 9.02498 2.00763 9.06481C1.81772 9.1044 1.66394 9.24334 1.60541 9.4283C1.54687 9.61322 1.59265 9.81537 1.72519 9.95701C2.74405 11.0461 4.21584 11.5821 5.26125 11.8392C4.07261 12.7701 2.78951 12.9259 0.925028 12.8618C0.709203 12.8553 0.510358 12.9769 0.41962 13.1725C0.328916 13.3682 0.364108 13.5992 0.509058 13.759C1.28629 14.6157 4.118 15.5817 7.09476 15.6541C7.2125 15.657 7.33259 15.6585 7.45522 15.6585C9.5453 15.6585 12.3076 15.2105 14.2903 13.2277C15.791 11.7271 16.7297 9.99945 17.0802 8.09306C17.3632 6.55331 17.1843 5.32031 17.0984 4.72771C17.092 4.68415 17.0853 4.63792 17.0798 4.59749L17.9194 3.24432C18.0265 3.07171 18.0269 2.85339 17.9205 2.68028ZM16.0359 4.88184C16.1952 5.97956 16.6798 9.31998 13.5312 12.4686C11.7009 14.2988 9.03511 14.6275 7.12085 14.581C5.48745 14.5412 4.02642 14.2288 2.96751 13.8726C3.39743 13.8198 3.78057 13.7385 4.14222 13.6261C5.13922 13.3162 5.9815 12.7586 6.79284 11.8712C6.92808 11.7233 6.96964 11.5125 6.9007 11.3243C6.83176 11.1362 6.66371 11.0021 6.46493 10.9766C5.95309 10.911 4.41514 10.6521 3.20407 9.81674C3.55307 9.674 3.88966 9.49537 4.21106 9.28219C4.38737 9.16518 4.47856 8.95558 4.44383 8.74686C4.40913 8.53817 4.25511 8.36924 4.05043 8.3156C3.0592 8.05572 1.86289 7.47423 1.31126 6.17615C1.66352 6.23789 2.04655 6.25283 2.45507 6.16125C2.64442 6.11885 2.79616 5.97752 2.85184 5.79161C2.90757 5.60571 2.85863 5.40419 2.72384 5.26462C2.03745 4.55369 1.78077 3.52916 2.00099 2.65247C2.72219 3.70649 3.63587 4.59356 4.68268 5.2494C6.02182 6.0884 7.58481 6.55208 9.20274 6.59016C9.36737 6.59364 9.5253 6.52178 9.63013 6.39423C9.7349 6.26672 9.77519 6.09807 9.73936 5.93695C9.461 4.68556 9.85802 3.35152 10.7508 2.53824C11.6769 1.69467 13.0455 1.5667 14.079 2.22725C14.2368 2.32811 14.4359 2.3394 14.6041 2.25699L15.713 1.7139L15.1326 2.88394C15.0464 3.05778 15.0607 3.26464 15.17 3.42492C15.2794 3.5852 15.4664 3.67418 15.66 3.6572L16.442 3.5891L16.0818 4.16971C15.9609 4.36458 15.9859 4.53748 16.0359 4.88184Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="homec-agent__title">
                                <a href="agent-detail.html">کاترین مورفی<span>مشاور املاک</span></a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="600">
                    <div class="homec-agent homec-agent__v2">
                        <div class="homec-agent__head">
                            <img src="assets/img/agent-11.jpg" alt="#" />
                        </div>

                        <div class="homec-agent__body">
                            <a class="homec-agent__body--btn" href="agent-detail.html">مشاهده جزئیات</a>
                            <ul class="homec-agent__social list-none">
                                <li>
                                    <a href="#">
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 15.0004H0V4.66711H4V15.0004ZM0.666626 14.3337H3.33337V5.33374H0.666626V14.3337Z" />
                                            <path
                                                    d="M15.334 15.0002H11.334V9.33362C11.334 8.78137 10.8862 8.33362 10.334 8.33362C9.78162 8.33362 9.33399 8.78137 9.33399 9.33362V15.0002H5.33398V4.66699H9.33399V5.33777C9.93775 4.90125 10.6639 4.6665 11.4089 4.66699C13.5714 4.66699 15.334 6.42114 15.334 8.57947V15.0002ZM12.0006 14.3336H14.6672V8.57947C14.6627 6.78381 13.2046 5.3313 11.4089 5.33362C10.5881 5.33362 9.81726 5.67944 9.24231 6.30444L8.66724 6.93359V5.33362H6.00061V14.3336H8.66724V9.33362C8.66724 8.41309 9.41345 7.66699 10.334 7.66699C11.2544 7.66699 12.0006 8.41309 12.0006 9.33362V14.3336Z"
                                            />
                                            <path
                                                    d="M2 4C0.895386 4 0 3.10461 0 2C0 0.895508 0.895386 0 2 0C3.10461 0 4 0.895508 4 2C3.99768 3.10364 3.10364 3.9978 2 4ZM2 0.666748C1.26367 0.666748 0.666626 1.26367 0.666626 2C0.666626 2.73645 1.26367 3.33337 2 3.33337C2.73633 3.33337 3.33337 2.73645 3.33337 2C3.33337 1.26367 2.73633 0.666748 2 0.666748Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M10.888 0H4.11202C1.84465 0 0 1.84465 0 4.11205V10.888C0 13.1554 1.84465 15 4.11202 15H10.888C13.1554 15 15 13.1554 15 10.888V4.11205C15 1.84465 13.1554 0 10.888 0ZM14.1142 10.888C14.1142 12.6669 12.6669 14.1142 10.888 14.1142H4.11202C2.33309 14.1142 0.88582 12.6669 0.88582 10.888V4.11205C0.88582 2.33309 2.33309 0.88582 4.11202 0.88582H10.888C12.6669 0.88582 14.1142 2.33309 14.1142 4.11205V10.888Z"
                                            />
                                            <path
                                                    d="M7.50103 3.38684C5.23246 3.38684 3.38684 5.23246 3.38684 7.50103C3.38684 9.7696 5.23243 11.6152 7.50103 11.6152C9.7696 11.6152 11.6152 9.76958 11.6152 7.501C11.6152 5.23243 9.7696 3.38684 7.50103 3.38684ZM7.50103 10.7294C5.72089 10.7294 4.27263 9.28114 4.27263 7.501C4.27263 5.72086 5.72089 4.2726 7.50103 4.2726C9.2812 4.2726 10.7295 5.72089 10.7295 7.50103C10.7295 9.28117 9.2812 10.7294 7.50103 10.7294Z"
                                            />
                                            <path
                                                    d="M11.8605 1.88965C11.1712 1.88965 10.6105 2.45042 10.6105 3.13966C10.6105 3.8289 11.1712 4.38964 11.8605 4.38964C12.5497 4.38964 13.1104 3.82887 13.1104 3.13963C13.1104 2.45039 12.5497 1.88965 11.8605 1.88965ZM11.8605 3.50379C11.6597 3.50379 11.4963 3.34043 11.4963 3.13963C11.4963 2.93883 11.6597 2.77547 11.8605 2.77547C12.0613 2.77547 12.2246 2.93886 12.2246 3.13963C12.2246 3.3404 12.0613 3.50379 11.8605 3.50379Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M11.8617 9.30523C11.5542 8.98499 11.1832 8.81378 10.79 8.81378C10.4001 8.81378 10.0259 8.98182 9.70568 9.30206L8.70376 10.3008C8.62132 10.2564 8.53889 10.2152 8.45962 10.174C8.34548 10.1169 8.23768 10.063 8.14573 10.0059C7.20722 9.40986 6.35432 8.63305 5.5363 7.62796C5.13997 7.127 4.87363 6.70531 4.68022 6.27727C4.94022 6.03947 5.18118 5.79216 5.41581 5.55437C5.50459 5.46559 5.59337 5.37364 5.68215 5.28486C6.34798 4.61903 6.34798 3.75661 5.68215 3.09078L4.81656 2.2252C4.71827 2.12691 4.61681 2.02545 4.52169 1.92399C4.33145 1.72741 4.1317 1.52449 3.92561 1.33425C3.61806 1.02987 3.25027 0.868164 2.86345 0.868164C2.47663 0.868164 2.1025 1.02987 1.78543 1.33425C1.78226 1.33742 1.78226 1.33742 1.77909 1.34059L0.701075 2.42812C0.295233 2.83396 0.0637769 3.32858 0.0130467 3.90246C-0.0630486 4.82829 0.209626 5.6907 0.418888 6.25508C0.932531 7.64064 1.69983 8.92475 2.84443 10.3008C4.23316 11.9591 5.90409 13.2685 7.81281 14.1912C8.54206 14.5368 9.51545 14.9458 10.603 15.0155C10.6696 15.0187 10.7393 15.0219 10.8027 15.0219C11.5351 15.0219 12.1502 14.7587 12.6322 14.2356C12.6354 14.2292 12.6417 14.2261 12.6449 14.2197C12.8097 14.02 13 13.8392 13.1997 13.6458C13.3361 13.5158 13.4756 13.3795 13.6119 13.2368C13.9258 12.9102 14.0907 12.5298 14.0907 12.1398C14.0907 11.7466 13.9226 11.3693 13.6024 11.0522L11.8617 9.30523ZM12.9968 12.6439C12.9936 12.6471 12.9936 12.6439 12.9968 12.6439C12.8731 12.7771 12.7463 12.8976 12.61 13.0307C12.4039 13.2273 12.1946 13.4334 11.9981 13.6649C11.6778 14.0073 11.3005 14.169 10.8059 14.169C10.7583 14.169 10.7076 14.169 10.66 14.1658C9.71837 14.1056 8.84327 13.7378 8.18695 13.4239C6.39237 12.5551 4.81656 11.3218 3.50709 9.75863C2.4259 8.4555 1.703 7.25066 1.22423 5.95704C0.929361 5.16755 0.821559 4.55244 0.869119 3.97222C0.900825 3.60125 1.0435 3.2937 1.30667 3.03054L2.38785 1.94935C2.54321 1.8035 2.70809 1.72424 2.86979 1.72424C3.06954 1.72424 3.23124 1.84472 3.3327 1.94618C3.33587 1.94935 3.33904 1.95252 3.34222 1.95569C3.53562 2.13642 3.71952 2.32349 3.91293 2.52324C4.01122 2.6247 4.11268 2.72616 4.21414 2.83079L5.07972 3.69637C5.41581 4.03246 5.41581 4.34318 5.07972 4.67927C4.98778 4.77122 4.899 4.86317 4.80705 4.95194C4.54072 5.22462 4.28707 5.47827 4.01122 5.72558C4.00488 5.73192 3.99854 5.73509 3.99537 5.74143C3.72269 6.01411 3.77342 6.28044 3.83049 6.46117C3.83366 6.47068 3.83683 6.48019 3.84001 6.4897C4.06512 7.03505 4.38218 7.5487 4.86412 8.16063L4.86729 8.1638C5.74239 9.24182 6.66504 10.082 7.68282 10.7257C7.81281 10.8081 7.94598 10.8747 8.07281 10.9381C8.18695 10.9952 8.29475 11.0491 8.3867 11.1062C8.39938 11.1125 8.41206 11.122 8.42475 11.1283C8.53255 11.1822 8.63401 11.2076 8.73864 11.2076C9.0018 11.2076 9.16667 11.0427 9.22058 10.9888L10.3049 9.90448C10.4127 9.79668 10.5839 9.66668 10.7837 9.66668C10.9803 9.66668 11.142 9.79034 11.2403 9.89814C11.2434 9.90131 11.2434 9.90131 11.2466 9.90448L12.9936 11.6515C13.3202 11.9749 13.3202 12.3078 12.9968 12.6439Z"
                                            />
                                            <path
                                                    d="M8.10819 3.57275C8.93889 3.71226 9.69351 4.10542 10.2959 4.70784C10.8983 5.31026 11.2883 6.06487 11.431 6.89558C11.4659 7.10484 11.6466 7.25069 11.8527 7.25069C11.8781 7.25069 11.9003 7.24752 11.9256 7.24435C12.1603 7.2063 12.3156 6.98436 12.2776 6.74973C12.1064 5.74464 11.6308 4.82832 10.9047 4.10225C10.1786 3.37617 9.2623 2.90058 8.25721 2.72936C8.02258 2.69132 7.80381 2.84668 7.76259 3.07813C7.72137 3.30959 7.87356 3.53471 8.10819 3.57275Z"
                                            />
                                            <path
                                                    d="M14.9934 6.62681C14.7113 4.97174 13.9313 3.46569 12.7328 2.26719C11.5343 1.06869 10.0282 0.288712 8.37315 0.00652564C8.1417 -0.0346926 7.92292 0.123839 7.8817 0.355296C7.84366 0.589923 7.99902 0.808697 8.23364 0.849915C9.71116 1.1004 11.0587 1.80111 12.1304 2.86961C13.202 3.94129 13.8996 5.28881 14.1501 6.76632C14.1849 6.97559 14.3657 7.12143 14.5717 7.12143C14.5971 7.12143 14.6193 7.11826 14.6447 7.11509C14.8761 7.08022 15.0347 6.85827 14.9934 6.62681Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M17.9205 2.68028C17.8141 2.50717 17.6193 2.40904 17.4166 2.42662L16.5191 2.50481L17.377 0.775362C17.4792 0.569381 17.4388 0.321212 17.2767 0.158192C17.1145 -0.00482808 16.8665 -0.0463829 16.6601 0.0547268L14.3894 1.16676C12.9866 0.426154 11.2339 0.645987 10.0279 1.74459C9.0214 2.66147 8.49233 4.07148 8.59098 5.4776C5.96026 5.21392 3.73346 3.70814 2.41671 1.27511C2.32935 1.11371 2.16556 1.00813 1.9825 0.99516C1.79909 0.982398 1.62239 1.06368 1.51319 1.21123C0.696511 2.31451 0.639207 3.82722 1.27944 5.07172C1.10295 5.02714 0.915149 4.96681 0.706882 4.89724C0.528464 4.83758 0.331764 4.87579 0.188572 4.99785C0.0453801 5.11992 -0.023456 5.30804 0.00716515 5.4937C0.260502 7.02961 1.15615 8.21002 2.57098 8.90872C2.38676 8.97288 2.19878 9.02498 2.00763 9.06481C1.81772 9.1044 1.66394 9.24334 1.60541 9.4283C1.54687 9.61322 1.59265 9.81537 1.72519 9.95701C2.74405 11.0461 4.21584 11.5821 5.26125 11.8392C4.07261 12.7701 2.78951 12.9259 0.925028 12.8618C0.709203 12.8553 0.510358 12.9769 0.41962 13.1725C0.328916 13.3682 0.364108 13.5992 0.509058 13.759C1.28629 14.6157 4.118 15.5817 7.09476 15.6541C7.2125 15.657 7.33259 15.6585 7.45522 15.6585C9.5453 15.6585 12.3076 15.2105 14.2903 13.2277C15.791 11.7271 16.7297 9.99945 17.0802 8.09306C17.3632 6.55331 17.1843 5.32031 17.0984 4.72771C17.092 4.68415 17.0853 4.63792 17.0798 4.59749L17.9194 3.24432C18.0265 3.07171 18.0269 2.85339 17.9205 2.68028ZM16.0359 4.88184C16.1952 5.97956 16.6798 9.31998 13.5312 12.4686C11.7009 14.2988 9.03511 14.6275 7.12085 14.581C5.48745 14.5412 4.02642 14.2288 2.96751 13.8726C3.39743 13.8198 3.78057 13.7385 4.14222 13.6261C5.13922 13.3162 5.9815 12.7586 6.79284 11.8712C6.92808 11.7233 6.96964 11.5125 6.9007 11.3243C6.83176 11.1362 6.66371 11.0021 6.46493 10.9766C5.95309 10.911 4.41514 10.6521 3.20407 9.81674C3.55307 9.674 3.88966 9.49537 4.21106 9.28219C4.38737 9.16518 4.47856 8.95558 4.44383 8.74686C4.40913 8.53817 4.25511 8.36924 4.05043 8.3156C3.0592 8.05572 1.86289 7.47423 1.31126 6.17615C1.66352 6.23789 2.04655 6.25283 2.45507 6.16125C2.64442 6.11885 2.79616 5.97752 2.85184 5.79161C2.90757 5.60571 2.85863 5.40419 2.72384 5.26462C2.03745 4.55369 1.78077 3.52916 2.00099 2.65247C2.72219 3.70649 3.63587 4.59356 4.68268 5.2494C6.02182 6.0884 7.58481 6.55208 9.20274 6.59016C9.36737 6.59364 9.5253 6.52178 9.63013 6.39423C9.7349 6.26672 9.77519 6.09807 9.73936 5.93695C9.461 4.68556 9.85802 3.35152 10.7508 2.53824C11.6769 1.69467 13.0455 1.5667 14.079 2.22725C14.2368 2.32811 14.4359 2.3394 14.6041 2.25699L15.713 1.7139L15.1326 2.88394C15.0464 3.05778 15.0607 3.26464 15.17 3.42492C15.2794 3.5852 15.4664 3.67418 15.66 3.6572L16.442 3.5891L16.0818 4.16971C15.9609 4.36458 15.9859 4.53748 16.0359 4.88184Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="homec-agent__title">
                                <a href="agent-detail.html">کودی فیشر<span>مشاور املاک</span></a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="700">
                    <div class="homec-agent homec-agent__v2">
                        <div class="homec-agent__head">
                            <img src="assets/img/agent-12.jpg" alt="#" />
                        </div>

                        <div class="homec-agent__body">
                            <a class="homec-agent__body--btn" href="agent-detail.html">مشاهده جزئیات</a>
                            <ul class="homec-agent__social list-none">
                                <li>
                                    <a href="#">
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 15.0004H0V4.66711H4V15.0004ZM0.666626 14.3337H3.33337V5.33374H0.666626V14.3337Z" />
                                            <path
                                                    d="M15.334 15.0002H11.334V9.33362C11.334 8.78137 10.8862 8.33362 10.334 8.33362C9.78162 8.33362 9.33399 8.78137 9.33399 9.33362V15.0002H5.33398V4.66699H9.33399V5.33777C9.93775 4.90125 10.6639 4.6665 11.4089 4.66699C13.5714 4.66699 15.334 6.42114 15.334 8.57947V15.0002ZM12.0006 14.3336H14.6672V8.57947C14.6627 6.78381 13.2046 5.3313 11.4089 5.33362C10.5881 5.33362 9.81726 5.67944 9.24231 6.30444L8.66724 6.93359V5.33362H6.00061V14.3336H8.66724V9.33362C8.66724 8.41309 9.41345 7.66699 10.334 7.66699C11.2544 7.66699 12.0006 8.41309 12.0006 9.33362V14.3336Z"
                                            />
                                            <path
                                                    d="M2 4C0.895386 4 0 3.10461 0 2C0 0.895508 0.895386 0 2 0C3.10461 0 4 0.895508 4 2C3.99768 3.10364 3.10364 3.9978 2 4ZM2 0.666748C1.26367 0.666748 0.666626 1.26367 0.666626 2C0.666626 2.73645 1.26367 3.33337 2 3.33337C2.73633 3.33337 3.33337 2.73645 3.33337 2C3.33337 1.26367 2.73633 0.666748 2 0.666748Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M10.888 0H4.11202C1.84465 0 0 1.84465 0 4.11205V10.888C0 13.1554 1.84465 15 4.11202 15H10.888C13.1554 15 15 13.1554 15 10.888V4.11205C15 1.84465 13.1554 0 10.888 0ZM14.1142 10.888C14.1142 12.6669 12.6669 14.1142 10.888 14.1142H4.11202C2.33309 14.1142 0.88582 12.6669 0.88582 10.888V4.11205C0.88582 2.33309 2.33309 0.88582 4.11202 0.88582H10.888C12.6669 0.88582 14.1142 2.33309 14.1142 4.11205V10.888Z"
                                            />
                                            <path
                                                    d="M7.50103 3.38684C5.23246 3.38684 3.38684 5.23246 3.38684 7.50103C3.38684 9.7696 5.23243 11.6152 7.50103 11.6152C9.7696 11.6152 11.6152 9.76958 11.6152 7.501C11.6152 5.23243 9.7696 3.38684 7.50103 3.38684ZM7.50103 10.7294C5.72089 10.7294 4.27263 9.28114 4.27263 7.501C4.27263 5.72086 5.72089 4.2726 7.50103 4.2726C9.2812 4.2726 10.7295 5.72089 10.7295 7.50103C10.7295 9.28117 9.2812 10.7294 7.50103 10.7294Z"
                                            />
                                            <path
                                                    d="M11.8605 1.88965C11.1712 1.88965 10.6105 2.45042 10.6105 3.13966C10.6105 3.8289 11.1712 4.38964 11.8605 4.38964C12.5497 4.38964 13.1104 3.82887 13.1104 3.13963C13.1104 2.45039 12.5497 1.88965 11.8605 1.88965ZM11.8605 3.50379C11.6597 3.50379 11.4963 3.34043 11.4963 3.13963C11.4963 2.93883 11.6597 2.77547 11.8605 2.77547C12.0613 2.77547 12.2246 2.93886 12.2246 3.13963C12.2246 3.3404 12.0613 3.50379 11.8605 3.50379Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M11.8617 9.30523C11.5542 8.98499 11.1832 8.81378 10.79 8.81378C10.4001 8.81378 10.0259 8.98182 9.70568 9.30206L8.70376 10.3008C8.62132 10.2564 8.53889 10.2152 8.45962 10.174C8.34548 10.1169 8.23768 10.063 8.14573 10.0059C7.20722 9.40986 6.35432 8.63305 5.5363 7.62796C5.13997 7.127 4.87363 6.70531 4.68022 6.27727C4.94022 6.03947 5.18118 5.79216 5.41581 5.55437C5.50459 5.46559 5.59337 5.37364 5.68215 5.28486C6.34798 4.61903 6.34798 3.75661 5.68215 3.09078L4.81656 2.2252C4.71827 2.12691 4.61681 2.02545 4.52169 1.92399C4.33145 1.72741 4.1317 1.52449 3.92561 1.33425C3.61806 1.02987 3.25027 0.868164 2.86345 0.868164C2.47663 0.868164 2.1025 1.02987 1.78543 1.33425C1.78226 1.33742 1.78226 1.33742 1.77909 1.34059L0.701075 2.42812C0.295233 2.83396 0.0637769 3.32858 0.0130467 3.90246C-0.0630486 4.82829 0.209626 5.6907 0.418888 6.25508C0.932531 7.64064 1.69983 8.92475 2.84443 10.3008C4.23316 11.9591 5.90409 13.2685 7.81281 14.1912C8.54206 14.5368 9.51545 14.9458 10.603 15.0155C10.6696 15.0187 10.7393 15.0219 10.8027 15.0219C11.5351 15.0219 12.1502 14.7587 12.6322 14.2356C12.6354 14.2292 12.6417 14.2261 12.6449 14.2197C12.8097 14.02 13 13.8392 13.1997 13.6458C13.3361 13.5158 13.4756 13.3795 13.6119 13.2368C13.9258 12.9102 14.0907 12.5298 14.0907 12.1398C14.0907 11.7466 13.9226 11.3693 13.6024 11.0522L11.8617 9.30523ZM12.9968 12.6439C12.9936 12.6471 12.9936 12.6439 12.9968 12.6439C12.8731 12.7771 12.7463 12.8976 12.61 13.0307C12.4039 13.2273 12.1946 13.4334 11.9981 13.6649C11.6778 14.0073 11.3005 14.169 10.8059 14.169C10.7583 14.169 10.7076 14.169 10.66 14.1658C9.71837 14.1056 8.84327 13.7378 8.18695 13.4239C6.39237 12.5551 4.81656 11.3218 3.50709 9.75863C2.4259 8.4555 1.703 7.25066 1.22423 5.95704C0.929361 5.16755 0.821559 4.55244 0.869119 3.97222C0.900825 3.60125 1.0435 3.2937 1.30667 3.03054L2.38785 1.94935C2.54321 1.8035 2.70809 1.72424 2.86979 1.72424C3.06954 1.72424 3.23124 1.84472 3.3327 1.94618C3.33587 1.94935 3.33904 1.95252 3.34222 1.95569C3.53562 2.13642 3.71952 2.32349 3.91293 2.52324C4.01122 2.6247 4.11268 2.72616 4.21414 2.83079L5.07972 3.69637C5.41581 4.03246 5.41581 4.34318 5.07972 4.67927C4.98778 4.77122 4.899 4.86317 4.80705 4.95194C4.54072 5.22462 4.28707 5.47827 4.01122 5.72558C4.00488 5.73192 3.99854 5.73509 3.99537 5.74143C3.72269 6.01411 3.77342 6.28044 3.83049 6.46117C3.83366 6.47068 3.83683 6.48019 3.84001 6.4897C4.06512 7.03505 4.38218 7.5487 4.86412 8.16063L4.86729 8.1638C5.74239 9.24182 6.66504 10.082 7.68282 10.7257C7.81281 10.8081 7.94598 10.8747 8.07281 10.9381C8.18695 10.9952 8.29475 11.0491 8.3867 11.1062C8.39938 11.1125 8.41206 11.122 8.42475 11.1283C8.53255 11.1822 8.63401 11.2076 8.73864 11.2076C9.0018 11.2076 9.16667 11.0427 9.22058 10.9888L10.3049 9.90448C10.4127 9.79668 10.5839 9.66668 10.7837 9.66668C10.9803 9.66668 11.142 9.79034 11.2403 9.89814C11.2434 9.90131 11.2434 9.90131 11.2466 9.90448L12.9936 11.6515C13.3202 11.9749 13.3202 12.3078 12.9968 12.6439Z"
                                            />
                                            <path
                                                    d="M8.10819 3.57275C8.93889 3.71226 9.69351 4.10542 10.2959 4.70784C10.8983 5.31026 11.2883 6.06487 11.431 6.89558C11.4659 7.10484 11.6466 7.25069 11.8527 7.25069C11.8781 7.25069 11.9003 7.24752 11.9256 7.24435C12.1603 7.2063 12.3156 6.98436 12.2776 6.74973C12.1064 5.74464 11.6308 4.82832 10.9047 4.10225C10.1786 3.37617 9.2623 2.90058 8.25721 2.72936C8.02258 2.69132 7.80381 2.84668 7.76259 3.07813C7.72137 3.30959 7.87356 3.53471 8.10819 3.57275Z"
                                            />
                                            <path
                                                    d="M14.9934 6.62681C14.7113 4.97174 13.9313 3.46569 12.7328 2.26719C11.5343 1.06869 10.0282 0.288712 8.37315 0.00652564C8.1417 -0.0346926 7.92292 0.123839 7.8817 0.355296C7.84366 0.589923 7.99902 0.808697 8.23364 0.849915C9.71116 1.1004 11.0587 1.80111 12.1304 2.86961C13.202 3.94129 13.8996 5.28881 14.1501 6.76632C14.1849 6.97559 14.3657 7.12143 14.5717 7.12143C14.5971 7.12143 14.6193 7.11826 14.6447 7.11509C14.8761 7.08022 15.0347 6.85827 14.9934 6.62681Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M17.9205 2.68028C17.8141 2.50717 17.6193 2.40904 17.4166 2.42662L16.5191 2.50481L17.377 0.775362C17.4792 0.569381 17.4388 0.321212 17.2767 0.158192C17.1145 -0.00482808 16.8665 -0.0463829 16.6601 0.0547268L14.3894 1.16676C12.9866 0.426154 11.2339 0.645987 10.0279 1.74459C9.0214 2.66147 8.49233 4.07148 8.59098 5.4776C5.96026 5.21392 3.73346 3.70814 2.41671 1.27511C2.32935 1.11371 2.16556 1.00813 1.9825 0.99516C1.79909 0.982398 1.62239 1.06368 1.51319 1.21123C0.696511 2.31451 0.639207 3.82722 1.27944 5.07172C1.10295 5.02714 0.915149 4.96681 0.706882 4.89724C0.528464 4.83758 0.331764 4.87579 0.188572 4.99785C0.0453801 5.11992 -0.023456 5.30804 0.00716515 5.4937C0.260502 7.02961 1.15615 8.21002 2.57098 8.90872C2.38676 8.97288 2.19878 9.02498 2.00763 9.06481C1.81772 9.1044 1.66394 9.24334 1.60541 9.4283C1.54687 9.61322 1.59265 9.81537 1.72519 9.95701C2.74405 11.0461 4.21584 11.5821 5.26125 11.8392C4.07261 12.7701 2.78951 12.9259 0.925028 12.8618C0.709203 12.8553 0.510358 12.9769 0.41962 13.1725C0.328916 13.3682 0.364108 13.5992 0.509058 13.759C1.28629 14.6157 4.118 15.5817 7.09476 15.6541C7.2125 15.657 7.33259 15.6585 7.45522 15.6585C9.5453 15.6585 12.3076 15.2105 14.2903 13.2277C15.791 11.7271 16.7297 9.99945 17.0802 8.09306C17.3632 6.55331 17.1843 5.32031 17.0984 4.72771C17.092 4.68415 17.0853 4.63792 17.0798 4.59749L17.9194 3.24432C18.0265 3.07171 18.0269 2.85339 17.9205 2.68028ZM16.0359 4.88184C16.1952 5.97956 16.6798 9.31998 13.5312 12.4686C11.7009 14.2988 9.03511 14.6275 7.12085 14.581C5.48745 14.5412 4.02642 14.2288 2.96751 13.8726C3.39743 13.8198 3.78057 13.7385 4.14222 13.6261C5.13922 13.3162 5.9815 12.7586 6.79284 11.8712C6.92808 11.7233 6.96964 11.5125 6.9007 11.3243C6.83176 11.1362 6.66371 11.0021 6.46493 10.9766C5.95309 10.911 4.41514 10.6521 3.20407 9.81674C3.55307 9.674 3.88966 9.49537 4.21106 9.28219C4.38737 9.16518 4.47856 8.95558 4.44383 8.74686C4.40913 8.53817 4.25511 8.36924 4.05043 8.3156C3.0592 8.05572 1.86289 7.47423 1.31126 6.17615C1.66352 6.23789 2.04655 6.25283 2.45507 6.16125C2.64442 6.11885 2.79616 5.97752 2.85184 5.79161C2.90757 5.60571 2.85863 5.40419 2.72384 5.26462C2.03745 4.55369 1.78077 3.52916 2.00099 2.65247C2.72219 3.70649 3.63587 4.59356 4.68268 5.2494C6.02182 6.0884 7.58481 6.55208 9.20274 6.59016C9.36737 6.59364 9.5253 6.52178 9.63013 6.39423C9.7349 6.26672 9.77519 6.09807 9.73936 5.93695C9.461 4.68556 9.85802 3.35152 10.7508 2.53824C11.6769 1.69467 13.0455 1.5667 14.079 2.22725C14.2368 2.32811 14.4359 2.3394 14.6041 2.25699L15.713 1.7139L15.1326 2.88394C15.0464 3.05778 15.0607 3.26464 15.17 3.42492C15.2794 3.5852 15.4664 3.67418 15.66 3.6572L16.442 3.5891L16.0818 4.16971C15.9609 4.36458 15.9859 4.53748 16.0359 4.88184Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="homec-agent__title">
                                <a href="agent-detail.html">آرلین مک کوی<span>مشاور املاک</span></a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="800">
                    <div class="homec-agent homec-agent__v2">
                        <div class="homec-agent__head">
                            <img src="assets/img/agent-13.jpg" alt="#" />
                        </div>

                        <div class="homec-agent__body">
                            <a class="homec-agent__body--btn" href="agent-detail.html">مشاهده جزئیات</a>
                            <ul class="homec-agent__social list-none">
                                <li>
                                    <a href="#">
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 15.0004H0V4.66711H4V15.0004ZM0.666626 14.3337H3.33337V5.33374H0.666626V14.3337Z" />
                                            <path
                                                    d="M15.334 15.0002H11.334V9.33362C11.334 8.78137 10.8862 8.33362 10.334 8.33362C9.78162 8.33362 9.33399 8.78137 9.33399 9.33362V15.0002H5.33398V4.66699H9.33399V5.33777C9.93775 4.90125 10.6639 4.6665 11.4089 4.66699C13.5714 4.66699 15.334 6.42114 15.334 8.57947V15.0002ZM12.0006 14.3336H14.6672V8.57947C14.6627 6.78381 13.2046 5.3313 11.4089 5.33362C10.5881 5.33362 9.81726 5.67944 9.24231 6.30444L8.66724 6.93359V5.33362H6.00061V14.3336H8.66724V9.33362C8.66724 8.41309 9.41345 7.66699 10.334 7.66699C11.2544 7.66699 12.0006 8.41309 12.0006 9.33362V14.3336Z"
                                            />
                                            <path
                                                    d="M2 4C0.895386 4 0 3.10461 0 2C0 0.895508 0.895386 0 2 0C3.10461 0 4 0.895508 4 2C3.99768 3.10364 3.10364 3.9978 2 4ZM2 0.666748C1.26367 0.666748 0.666626 1.26367 0.666626 2C0.666626 2.73645 1.26367 3.33337 2 3.33337C2.73633 3.33337 3.33337 2.73645 3.33337 2C3.33337 1.26367 2.73633 0.666748 2 0.666748Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M10.888 0H4.11202C1.84465 0 0 1.84465 0 4.11205V10.888C0 13.1554 1.84465 15 4.11202 15H10.888C13.1554 15 15 13.1554 15 10.888V4.11205C15 1.84465 13.1554 0 10.888 0ZM14.1142 10.888C14.1142 12.6669 12.6669 14.1142 10.888 14.1142H4.11202C2.33309 14.1142 0.88582 12.6669 0.88582 10.888V4.11205C0.88582 2.33309 2.33309 0.88582 4.11202 0.88582H10.888C12.6669 0.88582 14.1142 2.33309 14.1142 4.11205V10.888Z"
                                            />
                                            <path
                                                    d="M7.50103 3.38684C5.23246 3.38684 3.38684 5.23246 3.38684 7.50103C3.38684 9.7696 5.23243 11.6152 7.50103 11.6152C9.7696 11.6152 11.6152 9.76958 11.6152 7.501C11.6152 5.23243 9.7696 3.38684 7.50103 3.38684ZM7.50103 10.7294C5.72089 10.7294 4.27263 9.28114 4.27263 7.501C4.27263 5.72086 5.72089 4.2726 7.50103 4.2726C9.2812 4.2726 10.7295 5.72089 10.7295 7.50103C10.7295 9.28117 9.2812 10.7294 7.50103 10.7294Z"
                                            />
                                            <path
                                                    d="M11.8605 1.88965C11.1712 1.88965 10.6105 2.45042 10.6105 3.13966C10.6105 3.8289 11.1712 4.38964 11.8605 4.38964C12.5497 4.38964 13.1104 3.82887 13.1104 3.13963C13.1104 2.45039 12.5497 1.88965 11.8605 1.88965ZM11.8605 3.50379C11.6597 3.50379 11.4963 3.34043 11.4963 3.13963C11.4963 2.93883 11.6597 2.77547 11.8605 2.77547C12.0613 2.77547 12.2246 2.93886 12.2246 3.13963C12.2246 3.3404 12.0613 3.50379 11.8605 3.50379Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M11.8617 9.30523C11.5542 8.98499 11.1832 8.81378 10.79 8.81378C10.4001 8.81378 10.0259 8.98182 9.70568 9.30206L8.70376 10.3008C8.62132 10.2564 8.53889 10.2152 8.45962 10.174C8.34548 10.1169 8.23768 10.063 8.14573 10.0059C7.20722 9.40986 6.35432 8.63305 5.5363 7.62796C5.13997 7.127 4.87363 6.70531 4.68022 6.27727C4.94022 6.03947 5.18118 5.79216 5.41581 5.55437C5.50459 5.46559 5.59337 5.37364 5.68215 5.28486C6.34798 4.61903 6.34798 3.75661 5.68215 3.09078L4.81656 2.2252C4.71827 2.12691 4.61681 2.02545 4.52169 1.92399C4.33145 1.72741 4.1317 1.52449 3.92561 1.33425C3.61806 1.02987 3.25027 0.868164 2.86345 0.868164C2.47663 0.868164 2.1025 1.02987 1.78543 1.33425C1.78226 1.33742 1.78226 1.33742 1.77909 1.34059L0.701075 2.42812C0.295233 2.83396 0.0637769 3.32858 0.0130467 3.90246C-0.0630486 4.82829 0.209626 5.6907 0.418888 6.25508C0.932531 7.64064 1.69983 8.92475 2.84443 10.3008C4.23316 11.9591 5.90409 13.2685 7.81281 14.1912C8.54206 14.5368 9.51545 14.9458 10.603 15.0155C10.6696 15.0187 10.7393 15.0219 10.8027 15.0219C11.5351 15.0219 12.1502 14.7587 12.6322 14.2356C12.6354 14.2292 12.6417 14.2261 12.6449 14.2197C12.8097 14.02 13 13.8392 13.1997 13.6458C13.3361 13.5158 13.4756 13.3795 13.6119 13.2368C13.9258 12.9102 14.0907 12.5298 14.0907 12.1398C14.0907 11.7466 13.9226 11.3693 13.6024 11.0522L11.8617 9.30523ZM12.9968 12.6439C12.9936 12.6471 12.9936 12.6439 12.9968 12.6439C12.8731 12.7771 12.7463 12.8976 12.61 13.0307C12.4039 13.2273 12.1946 13.4334 11.9981 13.6649C11.6778 14.0073 11.3005 14.169 10.8059 14.169C10.7583 14.169 10.7076 14.169 10.66 14.1658C9.71837 14.1056 8.84327 13.7378 8.18695 13.4239C6.39237 12.5551 4.81656 11.3218 3.50709 9.75863C2.4259 8.4555 1.703 7.25066 1.22423 5.95704C0.929361 5.16755 0.821559 4.55244 0.869119 3.97222C0.900825 3.60125 1.0435 3.2937 1.30667 3.03054L2.38785 1.94935C2.54321 1.8035 2.70809 1.72424 2.86979 1.72424C3.06954 1.72424 3.23124 1.84472 3.3327 1.94618C3.33587 1.94935 3.33904 1.95252 3.34222 1.95569C3.53562 2.13642 3.71952 2.32349 3.91293 2.52324C4.01122 2.6247 4.11268 2.72616 4.21414 2.83079L5.07972 3.69637C5.41581 4.03246 5.41581 4.34318 5.07972 4.67927C4.98778 4.77122 4.899 4.86317 4.80705 4.95194C4.54072 5.22462 4.28707 5.47827 4.01122 5.72558C4.00488 5.73192 3.99854 5.73509 3.99537 5.74143C3.72269 6.01411 3.77342 6.28044 3.83049 6.46117C3.83366 6.47068 3.83683 6.48019 3.84001 6.4897C4.06512 7.03505 4.38218 7.5487 4.86412 8.16063L4.86729 8.1638C5.74239 9.24182 6.66504 10.082 7.68282 10.7257C7.81281 10.8081 7.94598 10.8747 8.07281 10.9381C8.18695 10.9952 8.29475 11.0491 8.3867 11.1062C8.39938 11.1125 8.41206 11.122 8.42475 11.1283C8.53255 11.1822 8.63401 11.2076 8.73864 11.2076C9.0018 11.2076 9.16667 11.0427 9.22058 10.9888L10.3049 9.90448C10.4127 9.79668 10.5839 9.66668 10.7837 9.66668C10.9803 9.66668 11.142 9.79034 11.2403 9.89814C11.2434 9.90131 11.2434 9.90131 11.2466 9.90448L12.9936 11.6515C13.3202 11.9749 13.3202 12.3078 12.9968 12.6439Z"
                                            />
                                            <path
                                                    d="M8.10819 3.57275C8.93889 3.71226 9.69351 4.10542 10.2959 4.70784C10.8983 5.31026 11.2883 6.06487 11.431 6.89558C11.4659 7.10484 11.6466 7.25069 11.8527 7.25069C11.8781 7.25069 11.9003 7.24752 11.9256 7.24435C12.1603 7.2063 12.3156 6.98436 12.2776 6.74973C12.1064 5.74464 11.6308 4.82832 10.9047 4.10225C10.1786 3.37617 9.2623 2.90058 8.25721 2.72936C8.02258 2.69132 7.80381 2.84668 7.76259 3.07813C7.72137 3.30959 7.87356 3.53471 8.10819 3.57275Z"
                                            />
                                            <path
                                                    d="M14.9934 6.62681C14.7113 4.97174 13.9313 3.46569 12.7328 2.26719C11.5343 1.06869 10.0282 0.288712 8.37315 0.00652564C8.1417 -0.0346926 7.92292 0.123839 7.8817 0.355296C7.84366 0.589923 7.99902 0.808697 8.23364 0.849915C9.71116 1.1004 11.0587 1.80111 12.1304 2.86961C13.202 3.94129 13.8996 5.28881 14.1501 6.76632C14.1849 6.97559 14.3657 7.12143 14.5717 7.12143C14.5971 7.12143 14.6193 7.11826 14.6447 7.11509C14.8761 7.08022 15.0347 6.85827 14.9934 6.62681Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M17.9205 2.68028C17.8141 2.50717 17.6193 2.40904 17.4166 2.42662L16.5191 2.50481L17.377 0.775362C17.4792 0.569381 17.4388 0.321212 17.2767 0.158192C17.1145 -0.00482808 16.8665 -0.0463829 16.6601 0.0547268L14.3894 1.16676C12.9866 0.426154 11.2339 0.645987 10.0279 1.74459C9.0214 2.66147 8.49233 4.07148 8.59098 5.4776C5.96026 5.21392 3.73346 3.70814 2.41671 1.27511C2.32935 1.11371 2.16556 1.00813 1.9825 0.99516C1.79909 0.982398 1.62239 1.06368 1.51319 1.21123C0.696511 2.31451 0.639207 3.82722 1.27944 5.07172C1.10295 5.02714 0.915149 4.96681 0.706882 4.89724C0.528464 4.83758 0.331764 4.87579 0.188572 4.99785C0.0453801 5.11992 -0.023456 5.30804 0.00716515 5.4937C0.260502 7.02961 1.15615 8.21002 2.57098 8.90872C2.38676 8.97288 2.19878 9.02498 2.00763 9.06481C1.81772 9.1044 1.66394 9.24334 1.60541 9.4283C1.54687 9.61322 1.59265 9.81537 1.72519 9.95701C2.74405 11.0461 4.21584 11.5821 5.26125 11.8392C4.07261 12.7701 2.78951 12.9259 0.925028 12.8618C0.709203 12.8553 0.510358 12.9769 0.41962 13.1725C0.328916 13.3682 0.364108 13.5992 0.509058 13.759C1.28629 14.6157 4.118 15.5817 7.09476 15.6541C7.2125 15.657 7.33259 15.6585 7.45522 15.6585C9.5453 15.6585 12.3076 15.2105 14.2903 13.2277C15.791 11.7271 16.7297 9.99945 17.0802 8.09306C17.3632 6.55331 17.1843 5.32031 17.0984 4.72771C17.092 4.68415 17.0853 4.63792 17.0798 4.59749L17.9194 3.24432C18.0265 3.07171 18.0269 2.85339 17.9205 2.68028ZM16.0359 4.88184C16.1952 5.97956 16.6798 9.31998 13.5312 12.4686C11.7009 14.2988 9.03511 14.6275 7.12085 14.581C5.48745 14.5412 4.02642 14.2288 2.96751 13.8726C3.39743 13.8198 3.78057 13.7385 4.14222 13.6261C5.13922 13.3162 5.9815 12.7586 6.79284 11.8712C6.92808 11.7233 6.96964 11.5125 6.9007 11.3243C6.83176 11.1362 6.66371 11.0021 6.46493 10.9766C5.95309 10.911 4.41514 10.6521 3.20407 9.81674C3.55307 9.674 3.88966 9.49537 4.21106 9.28219C4.38737 9.16518 4.47856 8.95558 4.44383 8.74686C4.40913 8.53817 4.25511 8.36924 4.05043 8.3156C3.0592 8.05572 1.86289 7.47423 1.31126 6.17615C1.66352 6.23789 2.04655 6.25283 2.45507 6.16125C2.64442 6.11885 2.79616 5.97752 2.85184 5.79161C2.90757 5.60571 2.85863 5.40419 2.72384 5.26462C2.03745 4.55369 1.78077 3.52916 2.00099 2.65247C2.72219 3.70649 3.63587 4.59356 4.68268 5.2494C6.02182 6.0884 7.58481 6.55208 9.20274 6.59016C9.36737 6.59364 9.5253 6.52178 9.63013 6.39423C9.7349 6.26672 9.77519 6.09807 9.73936 5.93695C9.461 4.68556 9.85802 3.35152 10.7508 2.53824C11.6769 1.69467 13.0455 1.5667 14.079 2.22725C14.2368 2.32811 14.4359 2.3394 14.6041 2.25699L15.713 1.7139L15.1326 2.88394C15.0464 3.05778 15.0607 3.26464 15.17 3.42492C15.2794 3.5852 15.4664 3.67418 15.66 3.6572L16.442 3.5891L16.0818 4.16971C15.9609 4.36458 15.9859 4.53748 16.0359 4.88184Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="homec-agent__title">
                                <a href="agent-detail.html">آرلین مک کوی<span>مشاور املاک</span></a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mg-top-30" data-aos="fade-in" data-aos-delay="900">
                    <div class="homec-agent homec-agent__v2">
                        <div class="homec-agent__head">
                            <img src="assets/img/agent-5.jpg" alt="#" />
                        </div>

                        <div class="homec-agent__body">
                            <a class="homec-agent__body--btn" href="agent-detail.html">مشاهده جزئیات</a>
                            <ul class="homec-agent__social list-none">
                                <li>
                                    <a href="#">
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 15.0004H0V4.66711H4V15.0004ZM0.666626 14.3337H3.33337V5.33374H0.666626V14.3337Z" />
                                            <path
                                                    d="M15.334 15.0002H11.334V9.33362C11.334 8.78137 10.8862 8.33362 10.334 8.33362C9.78162 8.33362 9.33399 8.78137 9.33399 9.33362V15.0002H5.33398V4.66699H9.33399V5.33777C9.93775 4.90125 10.6639 4.6665 11.4089 4.66699C13.5714 4.66699 15.334 6.42114 15.334 8.57947V15.0002ZM12.0006 14.3336H14.6672V8.57947C14.6627 6.78381 13.2046 5.3313 11.4089 5.33362C10.5881 5.33362 9.81726 5.67944 9.24231 6.30444L8.66724 6.93359V5.33362H6.00061V14.3336H8.66724V9.33362C8.66724 8.41309 9.41345 7.66699 10.334 7.66699C11.2544 7.66699 12.0006 8.41309 12.0006 9.33362V14.3336Z"
                                            />
                                            <path
                                                    d="M2 4C0.895386 4 0 3.10461 0 2C0 0.895508 0.895386 0 2 0C3.10461 0 4 0.895508 4 2C3.99768 3.10364 3.10364 3.9978 2 4ZM2 0.666748C1.26367 0.666748 0.666626 1.26367 0.666626 2C0.666626 2.73645 1.26367 3.33337 2 3.33337C2.73633 3.33337 3.33337 2.73645 3.33337 2C3.33337 1.26367 2.73633 0.666748 2 0.666748Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M10.888 0H4.11202C1.84465 0 0 1.84465 0 4.11205V10.888C0 13.1554 1.84465 15 4.11202 15H10.888C13.1554 15 15 13.1554 15 10.888V4.11205C15 1.84465 13.1554 0 10.888 0ZM14.1142 10.888C14.1142 12.6669 12.6669 14.1142 10.888 14.1142H4.11202C2.33309 14.1142 0.88582 12.6669 0.88582 10.888V4.11205C0.88582 2.33309 2.33309 0.88582 4.11202 0.88582H10.888C12.6669 0.88582 14.1142 2.33309 14.1142 4.11205V10.888Z"
                                            />
                                            <path
                                                    d="M7.50103 3.38684C5.23246 3.38684 3.38684 5.23246 3.38684 7.50103C3.38684 9.7696 5.23243 11.6152 7.50103 11.6152C9.7696 11.6152 11.6152 9.76958 11.6152 7.501C11.6152 5.23243 9.7696 3.38684 7.50103 3.38684ZM7.50103 10.7294C5.72089 10.7294 4.27263 9.28114 4.27263 7.501C4.27263 5.72086 5.72089 4.2726 7.50103 4.2726C9.2812 4.2726 10.7295 5.72089 10.7295 7.50103C10.7295 9.28117 9.2812 10.7294 7.50103 10.7294Z"
                                            />
                                            <path
                                                    d="M11.8605 1.88965C11.1712 1.88965 10.6105 2.45042 10.6105 3.13966C10.6105 3.8289 11.1712 4.38964 11.8605 4.38964C12.5497 4.38964 13.1104 3.82887 13.1104 3.13963C13.1104 2.45039 12.5497 1.88965 11.8605 1.88965ZM11.8605 3.50379C11.6597 3.50379 11.4963 3.34043 11.4963 3.13963C11.4963 2.93883 11.6597 2.77547 11.8605 2.77547C12.0613 2.77547 12.2246 2.93886 12.2246 3.13963C12.2246 3.3404 12.0613 3.50379 11.8605 3.50379Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M11.8617 9.30523C11.5542 8.98499 11.1832 8.81378 10.79 8.81378C10.4001 8.81378 10.0259 8.98182 9.70568 9.30206L8.70376 10.3008C8.62132 10.2564 8.53889 10.2152 8.45962 10.174C8.34548 10.1169 8.23768 10.063 8.14573 10.0059C7.20722 9.40986 6.35432 8.63305 5.5363 7.62796C5.13997 7.127 4.87363 6.70531 4.68022 6.27727C4.94022 6.03947 5.18118 5.79216 5.41581 5.55437C5.50459 5.46559 5.59337 5.37364 5.68215 5.28486C6.34798 4.61903 6.34798 3.75661 5.68215 3.09078L4.81656 2.2252C4.71827 2.12691 4.61681 2.02545 4.52169 1.92399C4.33145 1.72741 4.1317 1.52449 3.92561 1.33425C3.61806 1.02987 3.25027 0.868164 2.86345 0.868164C2.47663 0.868164 2.1025 1.02987 1.78543 1.33425C1.78226 1.33742 1.78226 1.33742 1.77909 1.34059L0.701075 2.42812C0.295233 2.83396 0.0637769 3.32858 0.0130467 3.90246C-0.0630486 4.82829 0.209626 5.6907 0.418888 6.25508C0.932531 7.64064 1.69983 8.92475 2.84443 10.3008C4.23316 11.9591 5.90409 13.2685 7.81281 14.1912C8.54206 14.5368 9.51545 14.9458 10.603 15.0155C10.6696 15.0187 10.7393 15.0219 10.8027 15.0219C11.5351 15.0219 12.1502 14.7587 12.6322 14.2356C12.6354 14.2292 12.6417 14.2261 12.6449 14.2197C12.8097 14.02 13 13.8392 13.1997 13.6458C13.3361 13.5158 13.4756 13.3795 13.6119 13.2368C13.9258 12.9102 14.0907 12.5298 14.0907 12.1398C14.0907 11.7466 13.9226 11.3693 13.6024 11.0522L11.8617 9.30523ZM12.9968 12.6439C12.9936 12.6471 12.9936 12.6439 12.9968 12.6439C12.8731 12.7771 12.7463 12.8976 12.61 13.0307C12.4039 13.2273 12.1946 13.4334 11.9981 13.6649C11.6778 14.0073 11.3005 14.169 10.8059 14.169C10.7583 14.169 10.7076 14.169 10.66 14.1658C9.71837 14.1056 8.84327 13.7378 8.18695 13.4239C6.39237 12.5551 4.81656 11.3218 3.50709 9.75863C2.4259 8.4555 1.703 7.25066 1.22423 5.95704C0.929361 5.16755 0.821559 4.55244 0.869119 3.97222C0.900825 3.60125 1.0435 3.2937 1.30667 3.03054L2.38785 1.94935C2.54321 1.8035 2.70809 1.72424 2.86979 1.72424C3.06954 1.72424 3.23124 1.84472 3.3327 1.94618C3.33587 1.94935 3.33904 1.95252 3.34222 1.95569C3.53562 2.13642 3.71952 2.32349 3.91293 2.52324C4.01122 2.6247 4.11268 2.72616 4.21414 2.83079L5.07972 3.69637C5.41581 4.03246 5.41581 4.34318 5.07972 4.67927C4.98778 4.77122 4.899 4.86317 4.80705 4.95194C4.54072 5.22462 4.28707 5.47827 4.01122 5.72558C4.00488 5.73192 3.99854 5.73509 3.99537 5.74143C3.72269 6.01411 3.77342 6.28044 3.83049 6.46117C3.83366 6.47068 3.83683 6.48019 3.84001 6.4897C4.06512 7.03505 4.38218 7.5487 4.86412 8.16063L4.86729 8.1638C5.74239 9.24182 6.66504 10.082 7.68282 10.7257C7.81281 10.8081 7.94598 10.8747 8.07281 10.9381C8.18695 10.9952 8.29475 11.0491 8.3867 11.1062C8.39938 11.1125 8.41206 11.122 8.42475 11.1283C8.53255 11.1822 8.63401 11.2076 8.73864 11.2076C9.0018 11.2076 9.16667 11.0427 9.22058 10.9888L10.3049 9.90448C10.4127 9.79668 10.5839 9.66668 10.7837 9.66668C10.9803 9.66668 11.142 9.79034 11.2403 9.89814C11.2434 9.90131 11.2434 9.90131 11.2466 9.90448L12.9936 11.6515C13.3202 11.9749 13.3202 12.3078 12.9968 12.6439Z"
                                            />
                                            <path
                                                    d="M8.10819 3.57275C8.93889 3.71226 9.69351 4.10542 10.2959 4.70784C10.8983 5.31026 11.2883 6.06487 11.431 6.89558C11.4659 7.10484 11.6466 7.25069 11.8527 7.25069C11.8781 7.25069 11.9003 7.24752 11.9256 7.24435C12.1603 7.2063 12.3156 6.98436 12.2776 6.74973C12.1064 5.74464 11.6308 4.82832 10.9047 4.10225C10.1786 3.37617 9.2623 2.90058 8.25721 2.72936C8.02258 2.69132 7.80381 2.84668 7.76259 3.07813C7.72137 3.30959 7.87356 3.53471 8.10819 3.57275Z"
                                            />
                                            <path
                                                    d="M14.9934 6.62681C14.7113 4.97174 13.9313 3.46569 12.7328 2.26719C11.5343 1.06869 10.0282 0.288712 8.37315 0.00652564C8.1417 -0.0346926 7.92292 0.123839 7.8817 0.355296C7.84366 0.589923 7.99902 0.808697 8.23364 0.849915C9.71116 1.1004 11.0587 1.80111 12.1304 2.86961C13.202 3.94129 13.8996 5.28881 14.1501 6.76632C14.1849 6.97559 14.3657 7.12143 14.5717 7.12143C14.5971 7.12143 14.6193 7.11826 14.6447 7.11509C14.8761 7.08022 15.0347 6.85827 14.9934 6.62681Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M17.9205 2.68028C17.8141 2.50717 17.6193 2.40904 17.4166 2.42662L16.5191 2.50481L17.377 0.775362C17.4792 0.569381 17.4388 0.321212 17.2767 0.158192C17.1145 -0.00482808 16.8665 -0.0463829 16.6601 0.0547268L14.3894 1.16676C12.9866 0.426154 11.2339 0.645987 10.0279 1.74459C9.0214 2.66147 8.49233 4.07148 8.59098 5.4776C5.96026 5.21392 3.73346 3.70814 2.41671 1.27511C2.32935 1.11371 2.16556 1.00813 1.9825 0.99516C1.79909 0.982398 1.62239 1.06368 1.51319 1.21123C0.696511 2.31451 0.639207 3.82722 1.27944 5.07172C1.10295 5.02714 0.915149 4.96681 0.706882 4.89724C0.528464 4.83758 0.331764 4.87579 0.188572 4.99785C0.0453801 5.11992 -0.023456 5.30804 0.00716515 5.4937C0.260502 7.02961 1.15615 8.21002 2.57098 8.90872C2.38676 8.97288 2.19878 9.02498 2.00763 9.06481C1.81772 9.1044 1.66394 9.24334 1.60541 9.4283C1.54687 9.61322 1.59265 9.81537 1.72519 9.95701C2.74405 11.0461 4.21584 11.5821 5.26125 11.8392C4.07261 12.7701 2.78951 12.9259 0.925028 12.8618C0.709203 12.8553 0.510358 12.9769 0.41962 13.1725C0.328916 13.3682 0.364108 13.5992 0.509058 13.759C1.28629 14.6157 4.118 15.5817 7.09476 15.6541C7.2125 15.657 7.33259 15.6585 7.45522 15.6585C9.5453 15.6585 12.3076 15.2105 14.2903 13.2277C15.791 11.7271 16.7297 9.99945 17.0802 8.09306C17.3632 6.55331 17.1843 5.32031 17.0984 4.72771C17.092 4.68415 17.0853 4.63792 17.0798 4.59749L17.9194 3.24432C18.0265 3.07171 18.0269 2.85339 17.9205 2.68028ZM16.0359 4.88184C16.1952 5.97956 16.6798 9.31998 13.5312 12.4686C11.7009 14.2988 9.03511 14.6275 7.12085 14.581C5.48745 14.5412 4.02642 14.2288 2.96751 13.8726C3.39743 13.8198 3.78057 13.7385 4.14222 13.6261C5.13922 13.3162 5.9815 12.7586 6.79284 11.8712C6.92808 11.7233 6.96964 11.5125 6.9007 11.3243C6.83176 11.1362 6.66371 11.0021 6.46493 10.9766C5.95309 10.911 4.41514 10.6521 3.20407 9.81674C3.55307 9.674 3.88966 9.49537 4.21106 9.28219C4.38737 9.16518 4.47856 8.95558 4.44383 8.74686C4.40913 8.53817 4.25511 8.36924 4.05043 8.3156C3.0592 8.05572 1.86289 7.47423 1.31126 6.17615C1.66352 6.23789 2.04655 6.25283 2.45507 6.16125C2.64442 6.11885 2.79616 5.97752 2.85184 5.79161C2.90757 5.60571 2.85863 5.40419 2.72384 5.26462C2.03745 4.55369 1.78077 3.52916 2.00099 2.65247C2.72219 3.70649 3.63587 4.59356 4.68268 5.2494C6.02182 6.0884 7.58481 6.55208 9.20274 6.59016C9.36737 6.59364 9.5253 6.52178 9.63013 6.39423C9.7349 6.26672 9.77519 6.09807 9.73936 5.93695C9.461 4.68556 9.85802 3.35152 10.7508 2.53824C11.6769 1.69467 13.0455 1.5667 14.079 2.22725C14.2368 2.32811 14.4359 2.3394 14.6041 2.25699L15.713 1.7139L15.1326 2.88394C15.0464 3.05778 15.0607 3.26464 15.17 3.42492C15.2794 3.5852 15.4664 3.67418 15.66 3.6572L16.442 3.5891L16.0818 4.16971C15.9609 4.36458 15.9859 4.53748 16.0359 4.88184Z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="homec-agent__title">
                                <a href="agent-detail.html">کاترین مورفی<span>مشاور املاک</span></a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homec-bg-cover pd-top-90 pd-btm-120" style="background-image: url('assets/img/bg-shape-five.svg');">
        <div class="container homec-container-medium">
            <div class="row homec-container-medium__row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 mg-top-30">
                    <div class="homec-section__head">
                        <div class="homec-section__shape">
                            <span class="homec-section__badge homec-section__badge--shape homec-section__badge--shape--v2" style="background-image: url('assets/img/shape-3.svg');">سوالات</span>
                        </div>
                        <h2 class="homec-section__title">اگر می خواهید سوالات متداول را بدانید</h2>
                    </div>
                    <div class="homec-accordion accordion accordion-flush" id="homec-accordion">
                        <div class="accordion-item homec-accordion__single mg-top-30">
                            <h2 class="accordion-header" id="homect-1">
                                <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse1">کار ما در شرکت چیست؟</button>
                            </h2>
                            <div id="ac-collapse1" class="accordion-collapse collapse" data-bs-parent="#homec-accordion">
                                <div class="accordion-body homec-accordion__body">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item homec-accordion__single active mg-top-30">
                            <h2 class="accordion-header" id="homect-3">
                                <button class="accordion-button homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse2">اگر شبکه های اجتماعی را حذف کنید چه اتفاقی می افتد؟</button>
                            </h2>
                            <div id="ac-collapse2" class="accordion-collapse collapse show" data-bs-parent="#homec-accordion">
                                <div class="accordion-body homec-accordion__body">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item homec-accordion__single mg-top-30">
                            <h2 class="accordion-header" id="homect-2">
                                <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse3" aria-expanded="false">
                                    شبکه های اجتماعی به زبان ساده چیست؟
                                </button>
                            </h2>
                            <div id="ac-collapse3" class="accordion-collapse collapse" data-bs-parent="#homec-accordion">
                                <div class="accordion-body homec-accordion__body">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item homec-accordion__single mg-top-30">
                            <h2 class="accordion-header" id="homect-4">
                                <button class="accordion-button collapsed homec-accordion__heading" type="button" data-bs-toggle="collapse" data-bs-target="#ac-collapse4">شبکه های اجتماعی به زبان ساده چیست؟</button>
                            </h2>
                            <div id="ac-collapse4" class="accordion-collapse collapse" data-bs-parent="#homec-accordion">
                                <div class="accordion-body homec-accordion__body">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mg-top-30">
                    <div class="homec-support-img">
                        <img src="assets/img/support-img.png" alt="#" />
                        <div class="homec-support-img__content">
                            <img src="assets/img/support-icon-white.svg" alt="#" />
                            <h4 class="homec-support-img__title">پشتیبانی 24 ساعته <span>سوالی دارید با ما تماس بگیرید؟</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="download-app homec-bg-cover homec-bg-primary-color pd-top-15 pd-btm-15" style="background-image: url('assets/img/download-vector.svg');">
        <div class="homec-shape">
            <div class="homec-shape-single homec-shape-11"><img src="assets/img/anim-shape-10.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-12"><img src="assets/img/anim-shape-10.svg" alt="#" /></div>
            <div class="homec-shape-single homec-shape-13"><img src="assets/img/anim-shape-10.svg" alt="#" /></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="download-app__middle">
                        <div class="download-app__content">
                            <div class="homec-section__head section-white mg-btm-30">
                                <h2 class="homec-section__title">برنامه موبایل ما را دانلود کنید</h2>
                                <p class="sec-head__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون</p>
                            </div>

                            <div class="download__app-button">
                                <a href="#" class="homec-btn homec-btn-primary-overlay homec-btn__download">
                                    <div class="homec-btn__inside">
                                        <i class="fa-brands fa-apple"></i>
                                        <div class="btn-content">
                                            <span>دانلود بر روی</span>
                                            <p>اپ استور</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="homec-btn homec-btn-primary-overlay homec-btn__download">
                                    <div class="homec-btn__inside">
                                        <i class="fa-brands fa-google-play"></i>
                                        <div class="btn-content">
                                            <span>دریافت از</span>
                                            <p>گوگل پلی</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="download-app__img">
                            <img src="assets/img/app-screen.png" alt="#" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="blog-area homec-bg-cover section-padding" style="background-image: url('assets/img/bg-shape-two.html');">
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
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="homec-blog">
                            <div class="homec-blog__head">
                                <div class="homec-overlay homec-blog__overlay"></div>
                                <a href="blog-single.html"><img src="assets/img/blog-1.jpg" alt="#" /></a>

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
                                            23 اسفند 1403
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
                                            <a href="#">توسط وید دی وارن</a>
                                        </li>
                                    </ul>
                                    <h3 class="homec-blog__title"><a href="blog-single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a></h3>
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
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="homec-blog">
                            <div class="homec-blog__head">
                                <div class="homec-overlay homec-blog__overlay"></div>
                                <a href="blog-single.html"><img src="assets/img/blog-2.jpg" alt="#" /></a>

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
                                            23 اسفند 1403
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
                                            <a href="#">توسط وید دی وارن</a>
                                        </li>
                                    </ul>
                                    <h3 class="homec-blog__title"><a href="blog-single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a></h3>
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
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="homec-blog">
                            <div class="homec-blog__head">
                                <div class="homec-overlay homec-blog__overlay"></div>
                                <a href="blog-single.html"><img src="assets/img/blog-3.jpg" alt="#" /></a>

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
                                            23 اسفند 1403
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
                                            <a href="#">توسط وید دی وارن</a>
                                        </li>
                                    </ul>
                                    <h3 class="homec-blog__title"><a href="blog-single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a></h3>
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
                </div>
            </div>
        </div>
    </section>
@endsection