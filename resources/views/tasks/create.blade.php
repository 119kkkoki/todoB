@extends('layouts.app_original')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('tasks.store') }}"method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>内容</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="contents">
                    </textarea>
                </div>
                <div class="form-group row">

                    <label for="image_at" class="img">{{   __('　プロフィール画像 (サイズは1024Kbyteまで)') }}</label>
                    <div class="col-md-6">
                        <input id="image_at" type="file" class="@error('iamge_at') is-invalid @enderror" name="image_at" >

                        @error('iamge_at')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">作成</button>
            </form>
        </div>
    </div>
  </div>
  @endsection