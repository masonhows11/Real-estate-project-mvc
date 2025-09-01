@extends('admin.layouts.app')

@section('admin_title')
    ویرایش دسته بندی
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary">

        <div class="">
            <div class="row px-2">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="my-1"> ویرایش <?= $ads->title ?></h1>
                    </div>
                    <div>
                        <h4 class="" style="margin-top: 18px"><a class="" href="<?= route('admin.ads.index') ?>">لیست
                                آگهی ها</a></h4>
                    </div>
                </div>
            </div>
        </div>


        <form action="<?= route("admin.ads.update",['id' => $ads->id]) ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_method" value="put">


            <div class="row mx-auto">

                <div class="col-12 col-sm-6   my-2">
                    <label for="title" class="form-label">نام :</label>
                    <input type="text" class="form-control <?= errorClass('title') ?>"
                           id="title" placeholder="عنوان خبر را وارد کنید" name="title"
                           value="<?= oldOrValue('title',$ads->title) ?>">
                    <?= errorText('title') ?>
                </div>

                <div class="col-12 col-sm-6  mt-2">
                    <label class="form-label">انتخاب تصویر :</label>
                    <div class="input-group">
                        <input type="file" name="image" class="form-control" id="input-image">
                        <label class="input-group-text" for="input-image">Upload</label>
                    </div>
                    <?= errorText('image') ?>
                </div>

                <div class="col-12  col-sm-6 my-2">
                    <label for="cat_id" class="form-label">دسته بندی :</label>
                    <select id="cat_id" class="form-select <?= errorClass('cat_id') ?>" name="cat_id">
                        <?php foreach ($categories as $categorySelect){ ?>
                        <option value="<?= $categorySelect->id ?>"
                                <?=
                            $categorySelect->id === oldOrValue('cat_id', $ads->cat_id) ? 'selected' : '' ?>>
                                <?= $categorySelect->name ?>
                        </option>
                        <?php } ?>
                    </select>
                    <?= errorText('cat_id') ?>
                </div>

                <div class="col-12  col-sm-6 my-2">
                    <label for="amount" class="form-label">قیمت :</label>
                    <input type="text" class="form-control <?= errorClass('amount') ?>"
                           id="title" placeholder="عنوان خبر را وارد کنید" name="amount"
                           value="<?= oldOrValue('amount',$ads->amount) ?>">
                    <?= errorText('amount') ?>
                </div>

                <!--<div class="col-12 col-sm-6  my-2">
                        <label class="form-label" for="published_at">تاریخ :</label>
                        <input type="date" name="published_at" id="published_at" class="form-control"
                               value="<?= empty(old('published_at')) ? '' : old('published_at') ?>">
                        <?= errorText('published_at') ?>
                        </div> -->

            </div>

            <div class="row mx-auto">

                <div class="col-12 col-sm-6   my-2">
                    <label for="address" class="form-label">آدرس :</label>
                    <input type="text" class="form-control <?= errorClass('address') ?>"
                           id="address" placeholder="عنوان خبر را وارد کنید" name="address"
                           value="<?= oldOrValue('address',$ads->address) ?>">
                    <?= errorText('address') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="year" class="form-label">سال ساخت :</label>
                    <input type="text" class="form-control <?= errorClass('year') ?>"
                           id="year" placeholder="عنوان خبر را وارد کنید" name="year"
                           value="<?= oldOrValue('year',$ads->year) ?>">
                    <?= errorText('year') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="area" class="form-label">متراژ :</label>
                    <input type="text" class="form-control <?= errorClass('area') ?>"
                           id="area" placeholder="عنوان خبر را وارد کنید" name="area"
                           value="<?= oldOrValue('area',$ads->year) ?>">
                    <?= errorText('area') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="floor" class="form-label">کف :</label>
                    <input type="text" class="form-control <?= errorClass('floor') ?>"
                           id="floor" placeholder="عنوان خبر را وارد کنید" name="floor"
                           value="<?= oldOrValue('floor',$ads->floor) ?>">
                    <?= errorText('floor') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="room" class="form-label">اتاق :</label>
                    <input type="text" class="form-control <?= errorClass('room') ?>"
                           id="room" placeholder="عنوان خبر را وارد کنید" name="room"
                           value="<?= oldOrValue('room',$ads->room) ?>">
                    <?= errorText('room') ?>
                </div>


                <div class="col-12 col-sm-6   my-2">
                    <label for="tag" class="form-label">تگ :</label>
                    <input type="text" class="form-control <?= errorClass('tag') ?>"
                           id="tag" placeholder="عنوان خبر را وارد کنید" name="tag"
                           value="<?= oldOrValue('tag',$ads->tag) ?>">
                    <?= errorText('tag') ?>
                </div>

            </div>


            <div class="row mx-auto">
                <div>
                    <label class="form-label" for="description">توضیحات :</label>
                    <textarea id="description" name="description" class="form-control" rows="6"
                              cols="10"><?= oldOrValue('description', $ads->description) ?></textarea>
                </div>
                <?= errorText('description') ?>
            </div>

            <div class="row mx-auto">

                <div class="col-12 col-sm-6   my-2">
                    <label for="parking" class="form-label">پارکینگ :</label>
                    <select type="text" class="form-control <?= errorClass('parking') ?>" id="parking" name="parking">
                        <option <?= oldOrValue('parking',$ads->parking) === 0 ? 'selected' : '' ?> value="0">ندارد</option>
                        <option <?= oldOrValue('parking',$ads->parking) === 1 ? 'selected' : '' ?> value="1">دارد</option>
                    </select>
                    <?= errorText('parking') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="storeroom" class="form-label">انبار :</label>
                    <select type="text" class="form-control <?= errorClass('storeroom') ?>" id="storeroom"
                            name="storeroom">
                        <option <?= oldOrValue('storeroom',$ads->storeroom) === 0 ? 'selected' : '' ?> value="0">ندارد</option>
                        <option <?= oldOrValue('storeroom',$ads->storeroom) === 1 ? 'selected' : '' ?> value="1">دارد</option>
                    </select>
                    <?= errorText('storeroom') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="balcony" class="form-label">بالکن :</label>
                    <select type="text" class="form-control <?= errorClass('balcony') ?>" id="balcony" name="balcony">
                        <option <?= oldOrValue('balcony',$ads->balcony) === 0 ? 'selected' : '' ?> value="0">ندارد</option>
                        <option <?= oldOrValue('balcony',$ads->balcony) === 1 ? 'selected' : '' ?> value="1">دارد</option>
                    </select>
                    <?= errorText('balcony') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="toilet" class="form-label">توالت :</label>
                    <select type="text" class="form-control <?= errorClass('toilet') ?>" id="toilet" name="toilet">
                        <option  <?= oldOrValue('toilet',$ads->toilet ) === 'ایرانی' ? 'selected' : '' ?> value="ایرانی">ایرانی</option>
                        <option  <?= oldOrValue('toilet',$ads->toilet ) === 'فرنگی' ? 'selected' : '' ?> value="فرنگی">فرنگی</option>
                        <option  <?= oldOrValue('toilet',$ads->toilet ) === 'ایرانی و فرنگی' ? 'selected' : '' ?> value="ایرانی و فرنگی">ایرانی و فرنگی</option>
                    </select>
                    <?= errorText('toilet') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="sell_status" class="form-label">نوع آگهی :</label>
                    <select type="text" class="form-control <?= errorClass('sell_status') ?>" id="sell_status"
                            name="sell_status">
                        <option  <?= oldOrValue('sell_status',$ads->sell_status) === 1 ? 'selected' : '' ?> value="1">رهن</option>
                        <option  <?= oldOrValue('sell_status',$ads->sell_status) === 2 ? 'selected' : '' ?> value="2">فروش</option>
                        <option  <?= oldOrValue('sell_status',$ads->sell_status) === 3 ? 'selected' : '' ?> value="3">اجاره</option>
                    </select>
                    <?= errorText('sell_status') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="type" class="form-label">نوع ملک :</label>
                    <select type="text" class="form-control <?= errorClass('type') ?>" id="type" name="type">
                        <option <?= oldOrValue('type', $ads->type) === 1 ? 'selected' : '' ?> value="1">زمین</option>
                        <option <?= oldOrValue('type', $ads->type) === 2 ? 'selected' : '' ?> value="2">ویلایی</option>
                        <option <?= oldOrValue('type', $ads->type) === 3 ? 'selected' : '' ?> value="3">اپارتمان</option>
                        <option <?= oldOrValue('type', $ads->type) === 4 ? 'selected' : '' ?> value="4">سوله</option>
                    </select>
                    <?= errorText('type') ?>
                </div>

            </div>

            <div class="row mx-auto">
                <div class="my-2">
                    <button type="submit" class="btn btn-primary">ذخیره</button>
                </div>
            </div>


        </form>


    </div>
@endsection


@section('scripts')
    <script src="<?= asset('admin_assets/vendors/ckeditor/ckeditor.js') ?>"></script>
    <script type="text/javascript">
        CKEDITOR.replace('description',{
            language: 'fa',
        })
    </script>
@endsection