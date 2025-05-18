@extends('admin.layouts.app')

@section('admin_title')
   اسلایدر
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary overflow-x-auto">

        <div class="row px-2 ">

            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="my-1">اسلایدر</h1>
                </div>
                <div>
                    <a class="btn btn-success mt-2" href="<?= route('admin.slider.create') ?>">ایجاد</a>
                </div>
            </div>
        </div>

        <div class="my-2">
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
            <div class="row overflow-auto ">
                <div class="container">
                    <table class="table table-sm table-responsive">
                        <thead class="">
                        <tr class="text-center">
                            <th>#</th>
                            <th>عنوان</th>
                            <th>آدرس</th>
                            <th>url</th>
                            <th>توضیحات</th>
                            <th>قیمت</th>
                            <th>تصویر</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($sliders as $slide): ?>
                        <tr class="text-center">
                            <td><?= $slide->id ?></td>
                            <td><?= $slide->title ?></td>
                            <td><?= $slide->address ?></td>
                            <td><?= $slide->url ?></td>
                            <td><?= $slide->body ?></td>
                            <td><?= $slide->amount ?></td>
                            <td>
                                <img class="img-thumbnail mx-auto d-block" width="200" height="200"
                                     src="<?= $slide->image ? asset($slide->image) : asset('admin_assets/default/no-image-icon-23494.png') ?>"
                                     alt="slide-image">
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm"
                                   href="<?= route('admin.slider.edit', ['id' => $slide->id]) ?>">ویرایش</a>
                                <a class="btn btn-danger btn-sm"
                                   href="<?= route('admin.slider.delete', ['id' => $slide->id]) ?>">حذف</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection


@section('scripts')
@endsection
