@extends('admin.layouts.app')

@section('admin_title')
    ویرایش دسته بندی
@endsection

@section('main_content')
    <div class="container border-2 rounded border-primary">

        <div class="row px-2">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="my-1"> ویرایش <?= $category->name ?></h1>
                </div>
                <div>
                    <h4 class="" style="margin-top: 18px"><a class="" href="<?= route('admin.category.index') ?>">دسته بندی ها</a></h4>
                </div>
            </div>
        </div>

        <div class="row my-2">
            <form action="<?= route('admin.category.update',[$category->id]) ?>" method="post">


                <div class="mb-3 mt-3">
                    <label for="category" class="form-label">نام:</label>
                    <input type="text" class="form-control <?= errorClass('name') ?> "
                           id="category" placeholder="نام دسته بندی را وارد کنید"
                           name="name" value="<?= oldOrValue('name',$category->name) ?>"><?= errorText('name')  ?>
                </div>



                <div class="mb-3">
                    <label for="parent" class="form-label">والد:</label>
                    <select id="parent" class="form-select <?= errorClass('parent_id') ?>" name="parent_id">
                        <option value="">در صورت نیاز دسته والد را انتخاب کنید</option>

                        <?php foreach ($categories as $category){ ?>
                        <option <?=  oldOrValue('parent_id',$category->parent_id)  == $category->id ? 'selected' : '' ?> value="<?= $category->id ?>"><?= $category->name ?></option>
                        <?php } ?>


                    </select>
                    <?= errorText('parent_id')  ?>
                </div>

                <button type="submit" class="btn btn-primary">ذخیره</button>
            </form>
        </div>




    </div>
@endsection


@section('scripts')
@endsection