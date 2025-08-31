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

            <div class="accordion-item homec-accordion__single homec-accordion__single--floor active mg-top-20">
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

            <div class="accordion-item homec-accordion__single homec-accordion__single--floor mg-top-20">
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