@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Создание статьи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Создание статьи</h3>
                            </div>
                            <!-- /.card-header -->

                            <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Название</label>
                                        <input type="text" name="title"
                                               class="form-control @error('title') is-invalid @enderror" id="title"
                                               placeholder="Название">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Цитата</label>
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="цитатат..."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Контент</label>
                                        <textarea name="content" id="content" class="form-control  @error('content') is-invalid @enderror" rows="5" placeholder="Контент"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Категории</label>
                                        <select class="form-control" name="category_id" id="category_id">
                                           @foreach($categories as $k => $v)
                                                <option value="{{ $k }}">{{ $v }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="tags">Теги</label>
                                        <select class="select2" name="tags[]" id="tags" multiple="multiple" data-placeholder="выбор тегов" style="width: 100%;">
                                            @foreach($tags as $k => $v)
                                                <option value="{{ $k }}">{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="thumbnail">Изображение</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                                                <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection