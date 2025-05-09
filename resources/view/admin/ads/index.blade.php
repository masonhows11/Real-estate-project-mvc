@extends('admin.layouts.app')

@section('admin_title')
    آگهی ها
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary overflow-x-auto">

        <div class="row px-2 ">

            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="my-1">آگهی ها</h1>
                </div>
                <div>
                    <a class="btn btn-success mt-2" href="<?= route('admin.ads.create') ?>">ایجاد</a>
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
                                <th>عنوان</th>
                                <th>دسته</th>
                                <th>آدرس</th>
                                <th>تصویر</th>
                                <th>مشخصات</th>
                                <th>تگ</th>
                                <th>کاربر</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ads as $advertise): ?>
                            <tr>
                                <td><?= $advertise->id ?></td>
                                <td><?= $advertise->title ?></td>
                                <td><?= $advertise->category()->name ?></td>
                                <td><?= $advertise->address ?></td>
                                <td><img class="img-thumbnail mx-auto d-block" width="200" height="200"
                                        src="<?= $advertise->image ? asset($advertise->image) : asset('admin_assets/default/no-image-icon-23494.png') ?>"
                                        alt="advertise-image"></td>
                                <td>
                                <td>
                                    <ul>
                                        <li>floor : <?= $advertise->floor ?></li>
                                        <li>year :<?= $advertise->year ?></li>
                                        <li>storeroom :<?= $advertise->storeroom ?></li>
                                        <li>balcony :<?= $advertise->balcony ?></li>
                                        <li>area : <?= $advertise->area ?></li>
                                        <li>room :<?= $advertise->room ?></li>
                                        <li>toilet :<?= $advertise->toilet ?></li>
                                        <li>parking :<?= $advertise->parking ?></li>
                                    </ul>
                                </td>
                                <td><?= $advertise->tag ?></td>

                                <td><?= $advertise->user()->first_name . ' ' . $advertise->user()->last_name ?></td>


                                <a class="btn btn-primary btn-sm"
                                    href="<?= route('admin.ads.edit', ['id' => $advertise->id]) ?>">ویرایش</a>
                                <a class="btn btn-danger btn-sm"
                                    href="<?= route('admin.ads.delete', ['id' => $advertise->id]) ?>">حذف</a>
                                <a class="btn btn-danger btn-sm"
                                    href="<?= route('admin.ads.gallery', ['id' => $advertise->id]) ?>">گالری</a>
                                <a class="btn <?= $advertise->status == 0 ? 'btn-warning' : 'btn-success' ?>  btn-sm"
                                    href="<?= route('admin.ads.change.Status', ['id' => $advertise->id]) ?>"><?= $advertise->status == 1 ? 'فعال' : 'غیر قعال' ?></a>
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
