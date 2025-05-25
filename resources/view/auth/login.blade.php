@extends('layouts.page')
@section('app_title')
<title>ورود</title>
@endsection
@section('main_content')
    <section class="ecom-wc ecom-wc__full ecom-bg-cover">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="ecom-wc__form">
                        <div class="ecom-wc__form-inner">
                            <h3 class="ecom-wc__form-title ecom-wc__form-title__one">ورود به سیستم <span>آدرس ایمیل شما منتشر نخواهد شد. فیلدهای الزامی مشخص شده اند *</span></h3>

                            <form class="ecom-wc__form-main p-0" action="<?= route('auth.login') ?>" method="post">

                                <div class="row">
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>خطاها</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group homec-form-input">
                                    <label class="ecom-wc__form-label mg-btm-10">شماره تلفن*</label>
                                    <div class="form-group__input">
                                        <input class="ecom-wc__form-input" type="email" name="email" placeholder="demo3243@gmail.com" required="required" />
                                    </div>
                                </div>

                                <div class="form-group homec-form-input">
                                    <label class="ecom-wc__form-label mg-btm-10">رمز عبور*</label>
                                    <div class="form-group__input">
                                        <input class="ecom-wc__form-input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" id="password-field" type="password" name="password" maxlength="8" required="required" />
                                    </div>
                                </div>

                                <div class="form-group form-mg-top-30">
                                    <div class="ecom-wc__button ecom-wc__button--bottom">
                                        <button class="homec-btn homec-btn__second" type="submit"><span>ورود</span></button>
                                        <button class="homec-btn homec-btn__second homec-btn__social" type="submit">
                                            <span class="ntfmax-wc__btn-icon"><img src="<?= asset('app_assets/img/google.svg') ?>" alt="#" /></span><span>با گوگل وارد شوید</span>
                                        </button>
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


