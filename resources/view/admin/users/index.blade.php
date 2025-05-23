@extends('admin.layouts.app')

-@section('admin_title')
    کاربران
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary overflow-x-auto">

        <div class="row px-2 ">

            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="my-1">کاربران</h1>
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
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>ایمیل</th>
                            <th>وضعیت</th>
                            <th>تصویر</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->id ?></td>
                            <td><?= $user->first_name ?></td>
                            <td><?= $user->last_name ?></td>
                            <td><?= $user->email ?></td>
                            <td class="<?= $user->is_active == 0  ? 'text-danger' : 'text-success' ?>">
                                    <?= $user->is_active == 0 ? 'غیر فعال' : 'فعال' ?>
                            </td>

                            <td><img class="img-thumbnail mx-auto d-block" width="200" height="200"
                                     src="<?= $user->avatar ?  asset($user->avatar) : asset('admin_assets/default/no-image-icon-23494.png')  ?>"
                                     alt="post-image"></td>
                            <td>
                                <a class="btn btn-primary btn-sm"
                                   href="<?= route('admin.users.edit', [$user->id] ) ?>">ویرایش</a>

                               <!-- <a class="btn btn-danger btn-sm"
                                   href="<?= route('admin.post.delete',[$user->id] ) ?>">حذف</a> -->

                                <a class="btn <?= $user->is_active == 0 ? 'btn-warning' : 'btn-success' ?>  btn-sm"
                                   href="<?= route('admin.users.changeStatus',[$user->id]) ?>"><?= $user->is_active == 1 ? 'فعال' : 'غیر قعال' ?></a>
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