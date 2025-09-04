<div class="row">
    <div class="col-12 mg-top-60">
        <div class="homec-blog-comments">
            <h2 class="homec-blog-detail__title">03 Comments</h2>

            <?php foreach ($comments as $comment){ ?>
            <div class="homec-blog-comments__single mg-btm-15 mg-top-15">
                <img src="<?= $comment->user()->avatar ? asset($comment->user()->avatar) : asset('app_assets/img/blog-comment1.png') ?>"
                     alt="#"/>
                <div class="homec-blog-comments__detail">
                    <h4 class="homec-blog-comments__title">
                            <?= $comment->user()->first_name ?> <span><i
                                    class="fa-solid fa-clock"><?= \Morilog\Jalali\Jalalian::forge($comment->created_at)->format('%A, %d %B %y'); ?></i></span>
                    </h4>
                    <p class="homec-blog-comments__text">
                            <?= $comment->comment ?>
                    </p>
                    <!-- <a class="homec-blog-comments__button" href="#">پاسخ</a> -->
                </div>
            </div>
                <?php $child = $comment->child()->get(); ?>
                <?php if (!empty($child)) { ?>
                <?php foreach ($child as $comment){ ?>
                    <div class="homec-blog-comments__single homec-blog-comments__single--reply mg-top-30">
                        <img src="<?= $comment->user()->avatar ? asset($comment->user()->avatar) : asset('app_assets/img/blog-comment1.png') ?>" alt="#"/>
                        <div class="homec-blog-comments__detail">
                            <h4 class="homec-blog-comments__title">
                                    <?= $comment->user()->first_name ?> <span><i class="fa-solid fa-clock"></i><?= \Morilog\Jalali\Jalalian::forge($comment->created_at)->format('%A, %d %B %y'); ?></span>
                            </h4>
                            <p class="homec-blog-comments__text"><?= $comment->comment ?></p>
                            <!-- <a class="homec-blog-comments__button" href="#">پاسخ</a> -->
                        </div>
                    </div>
                    <?php } ?>
                <?php  } ?>

            <?php } ?>

                    <!-- <div class="homec-blog-comments__single homec-blog-comments__single--reply mg-top-30">
                <img src="<?= asset('app_assets/img/blog-comment2.png') ?>" alt="#" />
                <div class="homec-blog-comments__detail">
                    <h4 class="homec-blog-comments__title">
                        میشل هولدر <span><i class="fa-solid fa-clock"></i> 1 اسفند 1403 در 11:27 ق.ظ</span>
                    </h4>
                    <p class="homec-blog-comments__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                    <a class="homec-blog-comments__button" href="#">پاسخ</a>
                </div>
            </div>
            <div class="homec-blog-comments__single mg-top-30">
                <img src="<?= asset('app_assets/img/blog-comment3.png') ?>" alt="#" />
                <div class="homec-blog-comments__detail">
                    <h4 class="homec-blog-comments__title">
                        میشل هولدر <span><i class="fa-solid fa-clock"></i> 1 اسفند 1403 در 11:27 ق.ظ</span>
                    </h4>
                    <p class="homec-blog-comments__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                    <a class="homec-blog-comments__button" href="#">پاسخ</a>
                </div>
            </div>

            <div class="homec-blog-comments__single mg-top-30">
                <img src="<?= asset('app_assets/img/blog-comment1.png') ?>" alt="#" />
                <div class="homec-blog-comments__detail">
                    <h4 class="homec-blog-comments__title">
                        میشل هولدر <span><i class="fa-solid fa-clock"></i> 1 اسفند 1403 در 11:27 ق.ظ</span>
                    </h4>
                    <p class="homec-blog-comments__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                    <a class="homec-blog-comments__button" href="#">پاسخ</a>
                </div>
            </div>

            -->


        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="homec-comments-form mg-top-60">
            <h2 class="homec-comments-form__title m-0">ارسال نظرات</h2>
            <p class="homec-comments-form__text">آدرس ایمیل شما منتشر نخواهد شد. فیلدهای الزامی مشخص شده اند *</p>
            <form accept="<?= route('add_comment',['id' => $post->id]) ?>" method="POST">
                 <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group homec-form-input">
                        <input class="ecom-wc__form-input" type="text" name="f_name" placeholder="میشل هولدر"
                               required="required"/>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group homec-form-input">
                        <input class="ecom-wc__form-input" type="email" name="f_name" placeholder="ایمیل شما"
                               required="required"/>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group homec-form-input">
                        <textarea class="ecom-wc__form-input" name="f_name" placeholder="اینجا پیام دهید"></textarea>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end mg-top-20">
                    <button type="submit" class="homec-btn homec-btn__second"><span>ارسال نظر</span></button>
                </div>
            </div>
            </form>
           
        </div>
    </div>
</div>
