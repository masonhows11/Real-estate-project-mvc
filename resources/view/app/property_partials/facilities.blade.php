<div class="tab-pane fade show active" id="homec-pd-tab1" role="tabpanel">
    <div class="homec-pdetails-tab__inner">
        <p>
            <?= html($ads->description) ?>
        </p>
        <div class="homec-ptdetails-features mg-top-30">
            <h4 class="homec-ptdetails-features__title">جزئیات اضافی</h4>
            <ul class="homec-ptdetails-features__list">
                <li><b>سال ساخت:</b> <span><?= $ads->year ?></span></li>
                <li><b>زیربنا:</b> <span><?= $ads->floor ?></span></li>
                <li><b>انباری:</b> <span><?= $ads->storeroom ?></span></li>
                <li><b>تراست:</b> <span><?= $ads->balcony ?></span></li>
                <li><b>مساحت:</b> <span><?= $ads->area ?></span></li>
                <li><b>اتاق:</b> <span><?= $ads->room ?></span></li>
                <li><b>توالت:</b> <span><?= $ads->toilet ?></span></li>
                <li><b>پارکینگ:</b> <span><?= $ads->parking ?></span></li>
            </ul>
        </div>

        <div class="homec-ptdetails-features mg-top-30">
            <h4 class="homec-ptdetails-features__title">اطلاعات ملک</h4>
            <ul class="homec-ptdetails-features__list">
                <li><b>نوع ملک:</b> <span><?= $ads->type()?></span></li>
                <li><b>نوع اگهی:</b> <span><?= $ads->sellStatus() ?></span></li>
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
