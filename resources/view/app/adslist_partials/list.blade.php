<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="homec-grid" role="tabpanel">
        <div class="row">

            <?php foreach ($ads as $sd){ ?>
            <div class="col-md-6 col-12 mg-top-30">
                <div class="homec-property">

                    <div class="homec-property__head">
                        <img src="<?= $ads->image ? asset($ads->image) : asset('app_assets/img/property-img11.png') ?>"
                             alt="#"/>

                        <div class="homec-property__hsticky">
                            <a href="#" class="homec-heart">
                                <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M10.5745 3.73257L11.1008 4.69447L11.6272 3.73258C11.9704 3.10535 12.5438 2.26267 13.3886 1.60933C14.2595 0.935774 15.2355 0.6 16.3044 0.6C19.29 0.6 21.6017 3.03446 21.6017 6.3966C21.6017 8.18186 20.8932 9.70959 19.5597 11.3187C18.211 12.9462 16.2694 14.6033 13.8617 16.6552L14.2508 17.1119L13.8617 16.6552L13.8611 16.6557C13.0479 17.3487 12.1237 18.1363 11.1625 18.9769L11.1623 18.977C11.1457 18.9916 11.1241 18.9999 11.1008 18.9999C11.0776 18.9999 11.056 18.9916 11.0394 18.9771L11.0391 18.9768C10.0784 18.1367 9.15452 17.3493 8.34203 16.6569L8.34054 16.6556L8.34053 16.6556C5.93251 14.6035 3.99081 12.9463 2.64202 11.3188C1.30844 9.70958 0.6 8.18186 0.6 6.3966C0.6 3.03446 2.91167 0.6 5.89732 0.6C6.96614 0.6 7.94219 0.935773 8.81311 1.60933C9.6579 2.26267 10.2313 3.10532 10.5745 3.73257Z"
                                            stroke-width="1.2"
                                    />
                                </svg>
                            </a>
                            <a href="agent-detail.html" class="homec-property__asticky">
                                <img src="<?=  asset('app_assets/img/agent-1.jpg') ?>" alt="#"/>
                                <h4 class="homec-property__asticky--label"><?= $sd->user()->first_name ?>
                                    <span>مشاور</span></h4>
                            </a>
                        </div>
                    </div>

                    <div class="homec-property__body">
                        <div class="homec-property__topbar">
                            <div class="homec-property__price">3,976 تومان<span>/ماهانه</span></div>
                            <span class="homec-property__salebadge">برای <?= $sd->sellStatus() ?></span>
                        </div>
                        <h3 class="homec-property__title"><a href="property-single.html"><?= $sd->title ?></a></h3>
                        <div class="homec-property__text">
                            <img src="<?= asset('app_assets/img/location-icon.svg') ?>" alt="#"/>
                            <p><?= $sd->address ?></p>
                        </div>

                        <ul class="homec-property__list homec-border-top list-none">
                            <li><img src="<?= asset('app_assets/img/room-icon.svg') ?>" alt="#"/>3 خواب</li>
                            <li><img src="<?= asset('app_assets/img/bath-icon.svg') ?>" alt="#"/>2 حمام</li>
                            <li><img src="<?= asset('app_assets/img/size-icon.svg') ?>" alt="#"/>120 متری</li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
        <div class="row mg-top-40">
            <div class="homec-pagination">
                <ul class="homec-pagination__list list-none">
                    <li class="homec-pagination__button"><a href="#">قبلی</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">24</a></li>
                    <li class="homec-pagination__button"><a href="#">بعدی</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="tab-pane fade" id="homec-list" role="tabpanel">
        <div class="row">
            <div class="col-12 mg-top-30">
                <div class="homec-property homec-property__list-style">
                    <div class="homec-property__head">
                        <img src="<?= asset('app_assets/img/property-img11.png') ?>" alt="#"/>

                        <div class="homec-property__hsticky">
                            <a href="#" class="homec-heart">
                                <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M10.5745 3.73257L11.1008 4.69447L11.6272 3.73258C11.9704 3.10535 12.5438 2.26267 13.3886 1.60933C14.2595 0.935774 15.2355 0.6 16.3044 0.6C19.29 0.6 21.6017 3.03446 21.6017 6.3966C21.6017 8.18186 20.8932 9.70959 19.5597 11.3187C18.211 12.9462 16.2694 14.6033 13.8617 16.6552L14.2508 17.1119L13.8617 16.6552L13.8611 16.6557C13.0479 17.3487 12.1237 18.1363 11.1625 18.9769L11.1623 18.977C11.1457 18.9916 11.1241 18.9999 11.1008 18.9999C11.0776 18.9999 11.056 18.9916 11.0394 18.9771L11.0391 18.9768C10.0784 18.1367 9.15452 17.3493 8.34203 16.6569L8.34054 16.6556L8.34053 16.6556C5.93251 14.6035 3.99081 12.9463 2.64202 11.3188C1.30844 9.70958 0.6 8.18186 0.6 6.3966C0.6 3.03446 2.91167 0.6 5.89732 0.6C6.96614 0.6 7.94219 0.935773 8.81311 1.60933C9.6579 2.26267 10.2313 3.10532 10.5745 3.73257Z"
                                            stroke-width="1.2"
                                    />
                                </svg>
                            </a>
                            <a href="#" class="homec-property__asticky">
                                <img src="<?=  asset('app_assets/img/agent-1.jpg') ?>" alt="#"/>
                                <h4 class="homec-property__asticky--label">وید وایرن<span>مشاور</span></h4>
                            </a>
                        </div>
                    </div>

                    <div class="homec-property__body">
                        <div class="homec-property__topbar">
                            <div class="homec-property__price">3,976 تومان<span>/ماهانه</span></div>
                            <span class="homec-property__salebadge">برای اجاره</span>
                        </div>
                        <h3 class="homec-property__title"><a href="property-single.html">فضای اداری شمال غربی</a></h3>
                        <div class="homec-property__text">
                            <img src="<?= asset('app_assets/img/location-icon.svg') ?>" alt="#"/>
                            <p>تهران ، زعفرانیه ، خیابان مهر</p>
                        </div>

                        <ul class="homec-property__list homec-border-top list-none">
                            <li><img src="<?= asset('app_assets/img/room-icon.svg') ?>" alt="#"/>3 خواب</li>
                            <li><img src="<?= asset('app_assets/img/bath-icon.svg') ?>" alt="#"/>2 حمام</li>
                            <li><img src="<?= asset('app_assets/img/size-icon.svg') ?>" alt="#" />120 متری</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mg-top-40">
            <div class="homec-pagination">
                <ul class="homec-pagination__list list-none">
                    <li class="homec-pagination__button"><a href="#">قبلی</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">24</a></li>
                    <li class="homec-pagination__button"><a href="#">بعدی</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
