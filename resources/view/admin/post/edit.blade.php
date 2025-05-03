@extends('admin.layouts.app')

@section('admin_title')
    ویرایش دسته بندی
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary">

        <div class="container">
            <div class="row px-2">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="my-1"> ویرایش <?= $post->name ?></h1>
                    </div>
                    <div>
                        <h4 class="" style="margin-top: 18px"><a class="" href="<?= route('admin.post.index') ?>">لیست اخبار</a></h4>
                    </div>
                </div>
            </div>
        </div>



        <form action="<?= route('admin.post.update') ?>" method="post">

            <input type="hidden" name="_method" value="put">

            <div class="row mx-auto">


                <div class="col-12 col-sm-6   my-2">
                    <label for="title" class="form-label">نام :</label>
                    <input type="text" class="form-control <?= errorClass('title') ?>"
                           id="title" placeholder="نام دسته بندی را وارد کنید" name="title" value="<?= old('title') ?>">
                    <?= errorText('title') ?>
                </div>


                <div class="col-12 col-sm-6  mt-2">
                    <label class="form-label">انتخاب تصویر :</label>
                    <div class="input-group">
                        <input type="file" name="image" class="form-control" id="input-image">
                        <label class="input-group-text" for="input-image">Upload</label>
                    </div>
                </div>

                <div class="col-12  col-sm-6 my-2">
                    <label for="cat_id" class="form-label">والد :</label>
                    <select id="cat_id" class="form-select <?= errorClass('cat_id') ?>" name="cat_id">
                        <option value="">در صورت نیاز دسته والد را انتخاب کنید</option>
                        <?php foreach ($categories as $category){ ?>
                        <option <?= old('cat_id') == $category->id ? 'selected' : '' ?> value="<?= $category->id ?>"><?= $category->name ?></option>
                        <?php } ?>
                    </select>
                    <?= errorText('cat_id') ?>
                </div>

                <div class="col-12 col-sm-6  my-2">
                    <label class="form-label">تاریخ :</label>
                    <input type="text" class="form-control">
                    <input type="text" class="hidden">
                </div>

            </div>

            <div class="row mx-auto">

                <div>
                    <label class="form-label" for="body">توضیحات :</label>
                    <textarea id="body"  name="body" class="form-control" rows="6" cols="10"></textarea>
                </div>

                <div class="my-2">
                    <button type="submit" class="btn btn-primary">ذخیره</button>
                </div>

            </div>



        </form>




    </div>
@endsection


@section('scripts')
@endsection