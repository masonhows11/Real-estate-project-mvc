@extends('admin.layouts.app')

@section('admin_title')
    دسته بندی ها
@endsection

@section('main_content')
    <div class="container border-2 rounded border-primary">

        <h1 class="my-1">دسته بندی ها</h1>
        <div class="my-2">
            <a class="btn btn-success" href="<?= route('admin.category.create') ?>">ایجاد</a>
            <div class="row">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column p-1">
                        <label for="show">تعداد</label>
                        <input id="show" class="form-control mt-1" type="text">
                    </div>
                    <div class="d-flex flex-column p-1">
                        <label for="show">جستجو</label>
                        <input id="show" class="form-control mt-1" type="text">
                    </div>
                </div>
            </div>

        </div>

        <!--<ul>
            <?php foreach ($categories as $category): ?>
            <li>
                <?= $category->name ?>
            </li>
            <?php endforeach; ?>
        </ul>
        -->
        



    </div>
@endsection


@section('scripts')

@endsection