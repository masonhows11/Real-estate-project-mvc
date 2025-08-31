<div class="col-lg-8 ol-12">
    <div class="list-group homec-list-tabs homec-list-tabs--v2" id="list-tab" role="tablist">
        <a class="list-group-item active" data-bs-toggle="list" href="#homec-pd-tab1" role="tab">جزئیات ملک</a>
        <a class="list-group-item" data-bs-toggle="list" href="#homec-pd-tab2" role="tab">پلان های طبقه</a>
        <a class="list-group-item" data-bs-toggle="list" href="#homec-pd-tab3" role="tab">ویدئو ملک</a>
        <a class="list-group-item" data-bs-toggle="list" href="#homec-pd-tab4" role="tab">مکان ها</a>
        <a class="list-group-item" data-bs-toggle="list" href="#homec-pd-tab5" role="tab">نظرات</a>
    </div>
    <div class="homec-pdetails-tab">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="homec-pd-tab1" role="tabpanel">
                <div class="homec-pdetails-tab__inner">
                    <p>
                       <?= html($ads->description) ?>
                    </p>
                    <div class="homec-ptdetails-features mg-top-30">
                        <h4 class="homec-ptdetails-features__title">جزئیات اضافی</h4>
                        <ul class="homec-ptdetails-features__list">
                            <li><b>سال ساخت:</b> <span>2 سال</span></li>
                            <li><b>خنک کننده:</b> <span>بله</span></li>
                            <li><b>گاز:</b> <span>بله</span></li>
                            <li><b>پارکینگ:</b> <span>بله</span></li>
                            <li><b>فاضلاب:</b> <span>بله</span></li>
                            <li><b>اتاق ورزش:</b> <span>بله</span></li>
                            <li><b>گرمایش:</b> <span>بله</span></li>
                            <li><b>آب:</b> <span>بله</span></li>
                            <li><b>انبار:</b> <span>بله</span></li>
                        </ul>
                    </div>

                    <div class="homec-ptdetails-features mg-top-30">
                        <h4 class="homec-ptdetails-features__title">نزدیکترین مکان</h4>
                        <ul class="homec-ptdetails-features__list">
                            <li><b>فرودگاه:</b> <span>3 کیلومتر</span></li>
                            <li><b>بیمارستان:</b> <span>2 کیلومتر</span></li>
                            <li><b>فروشگاه:</b> <span>3 کیلومتر</span></li>
                            <li><b>مدرسه:</b> <span>4 کیلومتر</span></li>
                            <li><b>پارک:</b> <span>2 کیلومتر</span></li>
                        </ul>
                    </div>

                    <div class="homec-ptdetails-features mg-top-30">
                        <h4 class="homec-ptdetails-features__title">امکانات رفاهی</h4>
                        <ul class="homec-ptdetails-features__list">
                            <li>
                                <b><i class="fas fa-check"></i> آسانسور</b>
                            </li>
                            <li>
                                <b><i class="fas fa-check"></i> پارکینگ</b>
                            </li>
                            <li>
                                <b><i class="fas fa-check"></i> رزرواسیون</b>
                            </li>
                            <li>
                                <b><i class="fas fa-check"></i> قهوه و چای رایگان</b>
                            </li>
                            <li>
                                <b><i class="fas fa-check"></i> کارت های اعتباری را می پذیرد</b>
                            </li>
                            <li>
                                <b><i class="fas fa-check"></i> تهویه هوا</b>
                            </li>
                            <li>
                                <b><i class="fas fa-check"></i> تلویزیون</b>
                            </li>
                            <li>
                                <b><i class="fas fa-check"></i> بالکن</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="homec-pd-tab2" role="tabpanel">
                <div class="homec-pdetails-tab__inner">
                    <div class="homec-accordion accordion accordion-flush" id="homec-accordion">
                        <div
                                class="accordion-item homec-accordion__single homec-accordion__single--floor mg-top-20">
                            <h2 class="accordion-header" id="homect-1">
                                <button
                                        class="accordion-button collapsed homec-accordion__heading homec-accordion__heading--floor"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#ac-collapseOne">
                                    طبقه 1
                                </button>
                            </h2>
                            <div id="ac-collapseOne" class="accordion-collapse collapse"
                                 aria-labelledby="homect-1" data-bs-parent="#homec-accordion">
                                <div
                                        class="accordion-body homec-accordion__body homec-accordion__body--floor">
                                    <div class="floor-plan-img">
                                        <img src="<?= asset('app_assets/img/floor-plane-img.png') ?>" alt="#" />
                                    </div>
                                    <div class="floor-plan-content">
                                        <p>
                                            <?= html($ads->description) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                                class="accordion-item homec-accordion__single homec-accordion__single--floor active mg-top-20">
                            <h2 class="accordion-header" id="homect-2">
                                <button
                                        class="accordion-button collapsed homec-accordion__heading homec-accordion__heading--floor"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#ac-collapseTwo">
                                    طبقه 2
                                </button>
                            </h2>
                            <div id="ac-collapseTwo" class="accordion-collapse collapse show"
                                 aria-labelledby="homect-2" data-bs-parent="#homec-accordion">
                                <div
                                        class="accordion-body homec-accordion__body homec-accordion__body--floor">
                                    <div class="floor-plan-img">
                                        <img src="<?= asset('app_assets/img/floor-plane-img.png') ?>" alt="#" />
                                    </div>
                                    <div class="floor-plan-content">
                                        <p>
                                            <?= html($ads->description) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                                class="accordion-item homec-accordion__single homec-accordion__single--floor mg-top-20">
                            <h2 class="accordion-header" id="homect-3">
                                <button
                                        class="accordion-button collapsed homec-accordion__heading homec-accordion__heading--floor"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#ac-collapseThree">
                                    طبقه 3
                                </button>
                            </h2>
                            <div id="ac-collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="homect-3" data-bs-parent="#homec-accordion">
                                <div
                                        class="accordion-body homec-accordion__body homec-accordion__body--floor">
                                    <div class="floor-plan-img">
                                        <img src="<?= asset('app_assets/img/floor-plane-img.png') ?>" alt="#" />
                                    </div>
                                    <div class="floor-plan-content">
                                        <p>
                                            <?= html($ads->description) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                                class="accordion-item homec-accordion__single homec-accordion__single--floor mg-top-20">
                            <h2 class="accordion-header" id="homect-4">
                                <button
                                        class="accordion-button collapsed homec-accordion__heading homec-accordion__heading--floor"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#ac-collapseFour">
                                    طبقه 4
                                </button>
                            </h2>
                            <div id="ac-collapseFour" class="accordion-collapse collapse"
                                 aria-labelledby="homect-4" data-bs-parent="#homec-accordion">
                                <div
                                        class="accordion-body homec-accordion__body homec-accordion__body--floor">
                                    <div class="floor-plan-img">
                                        <img src="<?= asset('app_assets/img/floor-plane-img.png') ?>" alt="#" />
                                    </div>
                                    <div class="floor-plan-content">
                                        <p>
                                            <?= html($ads->description) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="homec-pd-tab3" role="tabpanel">
                <div class="homec-pdetails-tab__inner">
                    <p>
                        <?= html($ads->description) ?>
                    </p>

                    <div class="homec-ptdetails-video">
                        <div class="homec-overlay"></div>
                        <img src="<?= asset('app_assets/img/homec-tab-video.png') ?>" alt="#" />
                        <div class="homec-ptdetails-video__video">
                            <a data-video-id="FzcfZyEhOoI"
                               class="js-video-btn homec-btn homec-btn__second homec-btn__video">
                                <div class="homec-btn__inside">
                                    <svg width="48" height="48" viewBox="0 0 48 48"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M24 45.6001C35.9293 45.6001 45.6001 35.9296 45.6001 24C45.6001 12.0707 35.9296 2.39995 24 2.39995C12.0707 2.39995 2.39995 12.0707 2.39995 24C2.39995 35.9293 12.0707 45.6001 24 45.6001ZM24 48C37.2547 48 48 37.2547 48 24C48 10.7451 37.2547 0 24 0C10.7451 0 0 10.7451 0 24C0 37.2547 10.7451 48 24 48Z"
                                              fill="#111111" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M30.2363 24L19.1998 16.6424V31.3579L30.2363 24ZM32.4661 22.6023C33.4637 23.2673 33.4637 24.733 32.4661 25.3981L19.4115 34.1013C18.2951 34.8456 16.7996 34.0451 16.7996 32.7033V15.297C16.7996 13.9552 18.2951 13.1549 19.4115 13.8993L32.4661 22.6023Z"
                                              fill="#111111" />
                                    </svg>
                                    <span>پخش ویدیو</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="homec-pd-tab4" role="tabpanel">
                <div class="homec-pdetails-tab__inner m-0">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="homec-location-card mg-top-20">
                                <div class="homec-location-card__icon">
                                    <svg width="31" height="35" viewBox="0 0 31 35"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M21.1 22.9899C24.8026 17.1798 24.3372 17.9046 24.4439 17.7531C25.7919 15.8518 26.5044 13.6139 26.5044 11.2814C26.5044 5.09565 21.4848 0 15.291 0C9.11739 0 4.0776 5.08559 4.0776 11.2814C4.0776 13.6124 4.80505 15.9088 6.19728 17.8358L9.48193 22.9899C5.97009 23.5296 0 25.1379 0 28.6791C0 29.9701 0.842569 31.8097 4.85656 33.2433C7.65937 34.2443 11.365 34.7956 15.291 34.7956C22.6324 34.7956 30.582 32.7247 30.582 28.6791C30.582 25.1373 24.6189 23.5307 21.1 22.9899ZM7.90029 16.7144C7.88908 16.6969 7.87739 16.6798 7.86515 16.6629C6.70664 15.0691 6.11641 13.1802 6.11641 11.2814C6.11641 6.18314 10.2216 2.0388 15.291 2.0388C20.3499 2.0388 24.4656 6.18498 24.4656 11.2814C24.4656 13.1833 23.8865 15.0081 22.7907 16.5599C22.6925 16.6894 23.2048 15.8935 15.291 28.3114L7.90029 16.7144ZM15.291 32.7568C7.27213 32.7568 2.0388 30.3997 2.0388 28.6791C2.0388 27.5227 4.72785 25.6213 10.6866 24.8801L14.4313 30.7561C14.6185 31.0499 14.9427 31.2277 15.2909 31.2277C15.6392 31.2277 15.9635 31.0498 16.1506 30.7561L19.8952 24.8801C25.8541 25.6213 28.5432 27.5227 28.5432 28.6791C28.5432 30.3851 23.357 32.7568 15.291 32.7568Z" />
                                        <path
                                                d="M15.2923 6.18457C12.4818 6.18457 10.1953 8.47109 10.1953 11.2816C10.1953 14.0921 12.4818 16.3786 15.2923 16.3786C18.1028 16.3786 20.3893 14.0921 20.3893 11.2816C20.3893 8.47109 18.1028 6.18457 15.2923 6.18457ZM15.2923 14.3398C13.606 14.3398 12.2341 12.9679 12.2341 11.2816C12.2341 9.59528 13.606 8.22337 15.2923 8.22337C16.9786 8.22337 18.3505 9.59528 18.3505 11.2816C18.3505 12.9679 16.9786 14.3398 15.2923 14.3398Z" />
                                    </svg>
                                </div>
                                <h4 class="homec-location-card__title">آدرس</h4>
                                <p class="homec-location-card__desc"><?= $ads->address ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="homec-location-card mg-top-20">
                                <p class="homec-location-card__text">
                                    <?= html($ads->description) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="homec-gmap-canvas mg-top-30">
                        <iframe id="homec-gmap-canvas" class="homec-gmap-iframe"
                                src="https://maps.google.com/maps?q=&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="homec-pd-tab5" role="tabpanel">

                <div class="homec-pdetails-tab__inner">
                    <div class="homec-pdetails-tab--review">

                        @include('app.property_partials.comments')

                    </div>


                    @include('app.property_partials.form')


                </div>
            </div>
        </div>
    </div>
</div>
