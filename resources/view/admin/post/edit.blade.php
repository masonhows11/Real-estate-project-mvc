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
                        <h1 class="my-1"> ویرایش <?= $post->title ?></h1>
                    </div>
                    <div>
                        <h4 class="" style="margin-top: 18px"><a class="" href="<?= route('admin.post.index') ?>">لیست اخبار</a></h4>
                    </div>
                </div>
            </div>
        </div>



        <form action="<?= route("admin.post.update",['id' => $post->id]) ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_method" value="put">


            <div class="row mx-auto">

                <div class="col-12 col-sm-6   my-2">
                    <label for="title" class="form-label">نام :</label>
                    <input type="text" class="form-control <?= errorClass('title') ?>"
                           id="title" placeholder="عنوان خبر را وارد کنید" name="title" value="<?= oldOrValue('title',$post->title) ?>">
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
                                $categorySelect->id === oldOrValue('cat_id',$post->cat_id) ? 'selected' : '' ?>>
                                <?= $categorySelect->name ?>
                        </option>
                        <?php } ?>
                    </select>
                    <?= errorText('cat_id') ?>
                </div>

                <div class="col-12 col-sm-6  my-2">
                    <label class="form-label" for="published_at">تاریخ :</label>
                    <input type="date" name="published_at" id="published_at" class="form-control"
                           value="<?= oldOrValue('published_at',date('Y-m-d',strtotime($post->published_at))) ?>">
                    <?= errorText('published_at') ?>
                </div>

            </div>

            <div class="row mx-auto">
                <div class="col-sm-6 mt-2">
                    <img class="img-thumbnail img-fluid" style="height: 400px"
                         src="<?= $post->image ?  asset($post->image) : asset('admin_assets/default/no-image-icon-23494.png') ?>"
                         alt="post-image">
                </div>

                <div class="col-sm-6">
                    <label class="form-label" for="body">توضیحات :</label>
                    <textarea id="body" name="body" class="form-control" rows="6" cols="10"><?= oldOrValue('body',$post->body) ?></textarea>
                </div>
                <?= errorText('body') ?>

                <div class="my-2">
                    <button type="submit" class="btn btn-primary">بروز رسانی</button>
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