@extends('admin.layouts.app')

@section('admin_title')
    دسته بندی جدید
@endsection

@section('main_content')
    <div class="container border-2 rounded border-primary">

        <div class="row px-2">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="my-1">دسته بندی جدید</h1>
                </div>
                <div>
                   <h4 class="" style="margin-top: 18px"><a class="" href="<?= route('admin.category.index') ?>">دسته بندی ها</a></h4>
                </div>
            </div>
        </div>

        <div class="row my-2">
            <form action="<?= route('admin.category.store') ?>" method="post">
                <div class="mb-3 mt-3">
                    <label for="category" class="form-label">نام:</label>
                    <input type="text" class="form-control" id="category" placeholder="نام دسته بندی را وارد کنید" name="name" value="<?= old('name') ?>">
                </div>
                <div class="mb-3">
                    <label for="parent" class="form-label">والد:</label>
                    <select id="parent" class="form-select" name="parent">
                        <option value="">در صورت نیاز دسته والد را انتخاب کنید</option>
                        <?php foreach ($categories as $category){ ?>
                        <option <?= old('parent_id') == $category->id 'selected' : '' ?> value="<?= $category->id ?>"><?= $category->name ?></option>
                        <?php } ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">ذخیره</button>
            </form>
        </div>




    </div>
@endsection


@section('scripts')

@endsection