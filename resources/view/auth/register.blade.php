@extends('layouts.page')
@section('app_title')
    <title>ثبت نام</title>
@endsection
@section('main_content')
    <section class="ecom-wc ecom-wc__full ecom-bg-cover">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 col-12">
                    <div class="ecom-wc__form">
                        <div class="ecom-wc__form-inner">
                            <h3 class="ecom-wc__form-title ecom-wc__form-title__one">ایجاد حساب کاربری <span>آدرس ایمیل شما منتشر نخواهد شد. فیلدهای الزامی مشخص شده اند *</span></h3>

                            <form class="ecom-wc__form-main p-0" action="<?= route('auth.register') ?>" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group homec-form-input">
                                            <label class="ecom-wc__form-label mg-btm-10">نام*</label>
                                            <div class="form-group__input">
                                                <input class="ecom-wc__form-input" type="text" name="f_name" placeholder="نام" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group homec-form-input">
                                            <label class="ecom-wc__form-label mg-btm-10">نام خانوادگی*</label>
                                            <div class="form-group__input">
                                                <input class="ecom-wc__form-input" type="text" name="l_name" placeholder="نام خانوادگی" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-lg-6 col-12">
                                        <div class="form-group homec-form-input">
                                            <label class="ecom-wc__form-label mg-btm-10">شماره تلفن*</label>
                                            <div class="form-group__input">
                                                <input class="ecom-wc__form-input" type="text" name="f_number" placeholder="شماره تلفن" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-lg-6 col-12">
                                        <div class="form-group homec-form-input">
                                            <label class="ecom-wc__form-label mg-btm-10">آدرس ایمیل*</label>
                                            <div class="form-group__input">
                                                <input class="ecom-wc__form-input" type="email" name="l_name" placeholder="آدرس ایمیل" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group homec-form-input">
                                            <label class="ecom-wc__form-label mg-btm-10">رمز عبور*</label>
                                            <div class="form-group__input">
                                                <input class="ecom-wc__form-input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" id="password-field" type="password" name="password" maxlength="8" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group homec-form-input">
                                            <label class="ecom-wc__form-label mg-btm-10">تکرار رمز عبور*</label>
                                            <div class="form-group__input">
                                                <input class="ecom-wc__form-input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" id="confirm-password-field" type="password" name="password" maxlength="8" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group form-mg-top-30">
                                    <div class="ecom-wc__button ecom-wc__button--bottom">
                                        <button class="homec-btn homec-btn__second" type="submit"><span>ثبت نام</span></button>
                                        <button class="homec-btn homec-btn__second homec-btn__social" type="submit">
                                            <span class="ntfmax-wc__btn-icon"><img src="<?= asset('app_assets/img/google.svg') ?>" alt="#" /></span><span>با گوگل وارد شوید</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group mg-top-20">
                                    <div class="ecom-wc__bottom">
                                        <p class="ecom-wc__text">از قبل حساب دارید؟ <a href="<?= route('auth.login.form') ?>">وارد شوید</a></p>
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
                                <div class="ecom-wc__footer--languages">
                                    <select class="ecom-wc__footer--language">
                                        <option data-display="فارسی">فارسی</option>
                                        <option value="2">انگلیسی</option>
                                        <option value="3">آلمانی</option>
                                    </select>
                                </div>
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


