@extends('admin.layouts.app')

@section('custom_styles')
@endsection

@section('admin_title')
    دیدگاه
@endsection

@section('main_content')
    <div class="border-2 rounded border-primary">


        <div class="container">
            <div class="row px-2">

                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="" style="margin-top: 18px"><a class=""
                                href="<?= route('admin.comments.index') ?>">لیست دیدگاه ها</a></h4>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <h4><?= 'نویسنده : ' . $comment->user()->first_name . ' ' . $comment->user()->last_name ?></h4>
                    <p class="mt-2" style="font-size: 1.2rem"><?= 'دیدگاه : ' . $comment->comment ?></p>
                </div>

            </div>
        </div>


        <form action="<?= route('admin.comments.answer', ['id' => $comment->id]) ?>" method="post"
            enctype="multipart/form-data">


            <div class="row mx-auto">
                <div>
                    <label class="form-label font-medium-3" for="comment"> پاسخ : </label>
                    <textarea id="comment" name="comment" class="form-control" rows="6" cols="10"><?= old('comment') ?></textarea>
                </div>
                <?= errorText('comment') ?>
            </div>



            <div class="row mx-auto">
                <div class="my-2">
                    <button type="submit" class="btn btn-primary">ذخیره</button>
                </div>
            </div>

        </form>
    </div>
@endsection


@section('scripts')
    <script src="<?= asset('admin_assets/vendors/ckeditor/ckeditor.js') ?>"></script>
    <script type="text/javascript">
        CKEDITOR.replace('comment', {
            language: 'fa',
        })
    </script>
@endsection
