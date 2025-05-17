@extends('admin.layouts.app')

@section('admin_title')
    گالری تصاویر
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary overflow-x-auto">

        <div class="row px-2 ">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="my-1"> گالری آگهی - <?= $adv->title ?></h1>
                </div>
                <div>
                    <a class="btn btn-success mt-2" href="<?= route('admin.ads.index') ?>">اگهی ها</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <form action="<?= route('admin.ads.store.gallery',['id' => $adv->id]) ?>" method="post" enctype="multipart/form-data">

                    <div class="col-12 col-sm-6  mt-2">
                        <label class="form-label">انتخاب تصویر :</label>
                        <div class="input-group">
                            <input type="file" name="image" class="form-control" id="input-image">
                            <label class="input-group-text" for="input-image">Upload</label>
                        </div>
                        <?= errorText('image') ?>
                    </div>

                    <div class="row mx-auto">
                        <div class="my-2">
                            <button type="submit" class="btn btn-primary">ذخیره</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

        <div class="my-2">
            <div class="container mx-auto">
                <div class="row overflow-auto ">

                    <table class="table table-sm table-responsive">
                        <thead class="">
                        <tr>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($galleries as $gallery): ?>
                        <tr>
                            <td><?= $gallery->id ?></td>
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
