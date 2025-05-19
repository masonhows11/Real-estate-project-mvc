@extends('admin.layouts.app')

@section('custom_styles')

@endsection

@section('admin_title')
    اسلاید جدید
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary">


        <div class="">
            <div class="row px-2">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="my-1"> ویرایش <?= $slide->title ?></h1>
                    </div>
                    <div>
                        <h4 class="" style="margin-top: 18px"><a class="" href="<?= route('admin.slider.index') ?>">لیست اسلایدها</a></h4>
                    </div>
                </div>
            </div>
        </div>


        <form action="<?= route('admin.slider.update') ?>" method="post" enctype="multipart/form-data">


            <div class="row mx-auto">

                <div class="col-12 col-sm-6   my-2">
                    <label for="title" class="form-label">نام :</label>
                    <input type="text" class="form-control <?= errorClass('title') ?>"
                           id="title" placeholder="عنوان خبر را وارد کنید" name="title" value="<?= oldOrValue('title',$slide->title) ?>">
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

                <div class="col-12 col-sm-6 mt-2">
                    <img class="img-thumbnail mx-auto d-block" width="200" height="200"
                         src="<?= $gallery->image ? asset($gallery->image) : asset('admin_assets/default/no-image-icon-23494.png') ?>"
                         alt="advertise-image">
                </div>



                <div class="col-12  col-sm-6 my-2">
                    <label for="amount" class="form-label">قیمت :</label>
                    <input type="text" class="form-control <?= errorClass('amount') ?>"
                           id="title" placeholder="عنوان خبر را وارد کنید" name="amount" value="<?= oldOrValue('amount',$slide->amount) ?>">
                    <?= errorText('amount') ?>
                </div>



            </div>

            <div class="row mx-auto">

                <div class="col-12 col-sm-6   my-2">
                    <label for="address" class="form-label">آدرس :</label>
                    <input type="text" class="form-control <?= errorClass('address') ?>"
                           id="address" placeholder="عنوان خبر را وارد کنید" name="address" value="<?= oldOrValue('address',$slide->address) ?>">
                    <?= errorText('address') ?>
                </div>




                <div class="col-12 col-sm-6   my-2">
                    <label for="url" class="form-label"> یو ار ال :</label>
                    <input type="text" class="form-control <?= errorClass('url') ?>"
                           id="url" placeholder="عنوان خبر را وارد کنید" name="url" value="<?= oldOrValue('url',$slide->url) ?>">
                    <?= errorText('url') ?>
                </div>

            </div>


            <div class="row mx-auto">
                <div>
                    <label class="form-label" for="body">توضیحات :</label>
                    <textarea id="body" name="body" class="form-control" rows="6"
                              cols="10"><?= oldOrValue('body',$slide->body) ?></textarea>
                </div>
                <?= errorText('body') ?>
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
        CKEDITOR.replace('body', {
            language: 'fa',
        })
    </script>
@endsection