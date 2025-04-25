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

        <div class="row px-2">

        </div>




    </div>
@endsection


@section('scripts')

@endsection