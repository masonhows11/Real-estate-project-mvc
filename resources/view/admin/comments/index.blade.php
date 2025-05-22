@extends('admin.layouts.app')

@section('admin_title')
   دیدگاه ها
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary overflow-x-auto">

        <div class="row px-2 ">

            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="my-1">دیدگا ها</h1>
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
                            <th>کاربر</th>
                            <th>دیدگاه</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($comments as $comment): ?>
                        <tr class="text-center">
                            <td><?= $comment->id ?></td>
                            <td><?= $comment->user()->first_name . ' ' . $comment->user()->last_name ?></td>
                            <td><?= $comment->comment ?></td>
                            <td class="<?= $comment->status != 0  ? 'text-success' : 'text-danger' ?>" > 
                                <?= $comment->status != 0  ? 'تایید شده' : 'تایید نشده' ?>
                            </td>

                            <td>
                                <a class="btn btn-primary btn-sm"
                                   href="<?= route('admin.comments.show', ['id' => $comment->id]) ?>">نمایش</a>

                                <a class="btn  <?= $comment->approved != 0  ? 'btn-success' : 'btn-danger' ?>  btn-sm"
                                   href="<?= route('admin.comments.approved', ['id' => $comment->id]) ?>">
                                       <?= $comment->approved != 0  ? 'تایید شده' : 'لغو تایید' ?>
                                </a>
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

