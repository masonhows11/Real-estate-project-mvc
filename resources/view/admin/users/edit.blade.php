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
                        <h1 class="my-1"> ویرایش <?= $user->first_name .' '.$user->last_name ?></h1>
                    </div>
                    <div>
                        <h4 class="" style="margin-top: 18px"><a class="" href="<?= route('admin.users.index') ?>">لیست کاریران</a></h4>
                    </div>
                </div>
            </div>
        </div>



        <form action="<?= route("admin.users.update",['id' => $user->id]) ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_method" value="put">


            <div class="row mx-auto">

                <div class="col-12 col-sm-6   my-2">
                    <label for="first_name" class="form-label">نام :</label>
                    <input type="text" class="form-control <?= errorClass('first_name') ?>"
                           id="first_name" placeholder="عنوان خبر را وارد کنید" name="first_name" value="<?= oldOrValue('first_name',$user->first_name) ?>">
                    <?= errorText('first_name') ?>
                </div>


                <div class="col-12 col-sm-6   my-2">
                    <label for="last_name" class="form-label">نام خانوادگی :</label>
                    <input type="text" class="form-control <?= errorClass('last_name') ?>"
                           id="last_name" placeholder="عنوان خبر را وارد کنید" name="last_name" value="<?= oldOrValue('last_name',$user->last_name) ?>">
                    <?= errorText('last_name') ?>
                </div>

                <div class="col-12 col-sm-6   my-2">
                    <label for="email" class="form-label">ایمیل :</label>
                    <input type="text" class="form-control <?= errorClass('email') ?>"
                           id="email" placeholder="عنوان خبر را وارد کنید" name="email" value="<?= oldOrValue('email',$user->email) ?>">
                    <?= errorText('email') ?>
                </div>

                <div class="col-12 col-sm-6  mt-2">
                    <label class="form-label">انتخاب تصویر :</label>
                    <div class="input-group">
                        <input type="file" name="avatar" class="form-control" id="input-image">
                        <label class="input-group-text" for="input-image">Upload</label>
                    </div>
                    <?= errorText('avatar') ?>
                </div>


            </div>

            <div class="row mx-auto">

                <div class="col-sm-6 mt-2">
                    <img class="img-thumbnail img-fluid" style="height: 400px"
                         src="<?= $user->avatar ?  asset($user->avatar) : asset('admin_assets/default/no-image-icon-23494.png') ?>"
                         alt="post-image">
                </div>

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