@extends('admin.layouts.app')

@section('admin_title')
    اخبار
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary overflow-x-auto">

        <div class="row px-2 ">

            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="my-1">اخبار</h1>
                </div>
                <div>
                    <a class="btn btn-success mt-2" href="<?= route('admin.post.create') ?>">ایجاد</a>
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
                            <th>دسته</th>
                            <th>نویسنده</th>
                            <th>تصویر</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?= $post->id ?></td>
                            <td><?= $post->title ?></td>
                            <td><?= $post->category()->name ?></td>
                            <td><?= $post->user()->first_name. ' '.$post->user()->last_name ?></td>

                            <td><img class="img-thumbnail mx-auto d-block" width="200" height="200" src="<?= $post->image ?  asset($post->image) : asset('admin_assets/default/no-image-icon-23494.png')  ?>" alt="post-image"></td>
                            <td>
                                <a class="btn btn-primary btn-sm"
                                   href="<?= route('admin.post.edit', [$post->id] ) ?>">ویرایش</a>
                                <a class="btn btn-danger btn-sm"
                                   href="<?= route('admin.post.delete',[$post->id] ) ?>">حذف</a>
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