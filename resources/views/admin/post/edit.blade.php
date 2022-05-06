@extends('layouts.admin_layout')

@section('title', 'Обновить статью')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Редактировать статью: {{ $post['title'] }}</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
    @if (session('success'))
        <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">*</button>
        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
    @endif
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">

                <!-- form start -->
                <form action="{{ route('post.update', $post['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" value="{{ $post['title'] }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название статьи" required>

                        </div>
                        <div class="form-group">
                            <label>Выберите категорию</label>
                            <select class="custom-select" name="cat_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }} @if ($category['id'] == $post['cat_id']) selected
                                        @endif">{{ $category['title'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="text" value="" class="editor">{{ $post['text'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="feature_image">Изображение статьи</label>
                            <img src="{{ '/' . $post['img'] }}" alt="" class="imgUploaded" style="display: block; width: 300px">
                            <input type="text" value="{{'/' . $post['img'] }}" name="img" class="form-control" id="feature_image" readonly>
                            <a href="" class="popup_selector" data-inputid="feature_image">Выберите изображение</a>
                        </div>
                    </div>
                  <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Обновить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

@endsection





