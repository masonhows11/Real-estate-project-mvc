@extends('admin.layouts.app')

@section('custom_styles')

@endsection

@section('admin_title')
    خبر جدید
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary">


        <div class="container">
            <div class="row px-2">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="my-1">خبر جدید</h1>
                    </div>
                    <div>
                        <h4 class="" style="margin-top: 18px"><a class="" href="<?= route('admin.post.index') ?>">لیست اخبار</a></h4>
                    </div>
                </div>

            </div>
        </div>


        <form action="<?= route('admin.post.store') ?>" method="post" enctype="multipart/form-data">



                <div class="row mx-auto">

                    <div class="col-12 col-sm-6   my-2">
                        <label for="title" class="form-label">نام :</label>
                        <input type="text" class="form-control <?= errorClass('title') ?>"
                               id="title" placeholder="عنوان خبر را وارد کنید" name="title" value="<?= old('title') ?>">
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
                        <label for="cat_id" class="form-label">دسته بندی:</label>
                        <select id="cat_id" class="form-select <?= errorClass('cat_id') ?>" name="cat_id">
                            <option value="">دسته بندی را انتخاب کنید</option>
                            <?php foreach ($categories as $categorySelect){ ?>
                            <option value="<?= $categorySelect->id ?>"
                                    <?= !empty(old('cat_id')) &&  $categorySelect->id === old('cat_id') ? 'selected' : '' ?>>
                                    <?= $categorySelect->name ?>
                            </option>
                            <?php } ?>
                        </select>
                        <?= errorText('cat_id') ?>
                    </div>

                    <div class="col-12 col-sm-6  my-2">
                        <label class="form-label" for="published_at">تاریخ :</label>
                        <input type="date" name="published_at" id="published_at" class="form-control"
                               value="<?= empty(old('published_at')) ? '' : old('published_at') ?>">
                        <?= errorText('published_at') ?>
                    </div>

                </div>

                <div class="row mx-auto">

                    <div>
                        <label class="form-label" for="body">توضیحات :</label>
                        <textarea id="body" name="body" class="form-control" rows="6" cols="10"><?= old('body') ?></textarea>
                    </div>
                    <?= errorText('body') ?>

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
        CKEDITOR.replace('body',{
            language: 'fa',
        })
    </script>
@endsection