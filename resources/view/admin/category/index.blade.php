@extends('admin.layouts.app')

@section('admin_title')
    دسته بندی ها
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary overflow-x-auto">

        <div class="row px-2 ">

            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="my-1">دسته بندی ها</h1>
                </div>
                <div>
                    <a class="btn btn-success mt-2" href="<?= route('admin.category.create') ?>">ایجاد</a>
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
                          <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>دسته والد</th>
                            <th>عملیات</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?= $category->id ?></td>
                                <td><?= $category->name ?></td>
                                <td><?= $category->name ?></td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="<?= route('admin.category.delete',[$category->id] ) ?>">حذف</a>
                                    <a class="btn btn-primary btn-sm" href="<?= route('admin.category.edit', [$category->id] ) ?>">ویرایش</a>
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