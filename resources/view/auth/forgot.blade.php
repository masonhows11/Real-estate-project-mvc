@extends('layouts.page')
@section('app_title')
    <title>بازیابی رمز عبور</title>
@endsection
@section('main_content')
    <section class="ecom-wc ecom-wc__full ecom-bg-cover">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="ecom-wc__form">
                        <div class="ecom-wc__form-inner">

                            <form class="ecom-wc__form-main p-0" action="<?= route('auth.forgot') ?>" method="post">

                                <div class="row">
                                    <?php if(errorExists()): ?>
                                    <div class="alert alert-danger">
                                        <ul style="list-style:none">
                                                <?php foreach(allErrors() as $error): ?>
                                            <li><?= $error ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group homec-form-input">
                                    <label class="ecom-wc__form-label mg-btm-10">ایمیل</label>
                                    <div class="form-group__input">
                                        <input class="ecom-wc__form-input"  id="password-field" type="password" name="password"  />
                                    </div>
                                </div>

                                <div class="form-group form-mg-top-30">
                                    <div class="ecom-wc__button ecom-wc__button--bottom">
                                        <button class="homec-btn homec-btn__second" type="submit"><span>بازیابی رمز عبور</span></button>
                                    </div>
                                </div>

                                <div class="form-group mg-top-20">
                                    <div class="ecom-wc__bottom">
                                        <p class="ecom-wc__text">حساب کاربری ندارید؟ <a href="<?= route('auth.register.form') ?>">ایجاد حساب کاربری</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-none d-lg-block">
                    <div class="ecom-wc__inner homec-bg-cover" style="background-image: url('app_assets/img/welcome-bg.svg');">
                        <div class="ecom-wc__logo">
                            <a href="#"><img src="<?= asset('app_assets/img/welcome-logo.png') ?>" alt="#" /></a>
                        </div>
                        <div class="ecom-wc__inside">
                            <div class="ecom-wc__middle">
                                <a href="#"><img src="<?= asset('app_assets/img/welcome-inner.png') ?>" alt="#" /></a>
                                <div class="ecom-wc__countdown--title">120<span>مشاور</span></div>
                                <div class="ecom-wc__countdown--title ecom-wc__countdown--title--v2">150k<span>خانه ساخته شده</span></div>
                            </div>
                            <div class="ecom-wc__footer">
                                <ul class="ecom-wc__footer--list list-none">
                                    <li><a href="#">شرایط و ضوابط</a></li>
                                    <li><a href="#">سیاست حفظ حریم خصوصی</a></li>
                                    <li><a href="#">پشتیبانی</a></li>
                                </ul>
                            </div>
                            <p class="ecom-wc__footer--text">© 1404 mason. تمام حقوق محفوظ است.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-right"></i>برو بالا</a>
@endsection



