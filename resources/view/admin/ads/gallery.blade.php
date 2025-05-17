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
