@extends('admin.layouts.layout')
@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-wrapper" style="min-height: 1345.31px;">
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 >Создание Статей</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">General Form</li>
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
           <div class="card card-primary">
             <div class="card-header">
               <h3 class="card-title">Создание Статей</h3>
             </div>
             <!-- /.card-header -->

             <form role="form" method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
               @csrf
               <div class="card-body">
                 <div class="form-group">
                   <label for="title">Название</label>
                   <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Название">
                 </div>

                 <div class="form-group">
                  <label for="description">Цитата</label>
                  <textarea name="description" class="form-control" id="description" rows="3" placeholder="Цитата ..."></textarea>
                </div>

                <div class="form-group">
                  <label for="content">Контент</label>
                  <textarea name="content" class="form-control" id="content" rows="7" placeholder="Контент ..."></textarea>
                </div>

                <div class="form-group">
                  <label for="category_id">Категория</label>
                  <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="tags">Теги</label>
                  <select class="select2" name="tags[]" id="tags" multiple="multiple" data-placeholder="Выбор тегов" style="width: 100%;">
                    @foreach ($tags as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="thumbnail">Изображение</label>
                <div class="custom-file">
                <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                <label for="thumbnail" class="custom-file-label">Choose file</label>
                </div>
               </div>
               <!-- /.card-body -->

               <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Сохранить</button>
               </div>
             </form>

           </div>
           <!-- /.card -->

         <!--/.col (left) -->
       </div>
       <!-- /.row -->
     </div><!-- /.container-fluid -->
     </div>
   </section>
   <!-- /.content -->
@endsection