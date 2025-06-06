@extends('admin.layouts.layout')
@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-wrapper" style="min-height: 1345.31px;">
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Редактирование тегов</h1>
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
               <h3 class="card-title">Тег "{{$tag->title}}"</h3>
             </div>
             <!-- /.card-header -->

             <form role="form" method="post" action="{{route('tags.update', ['tag' => $tag->id])}}">
               @csrf
               @method('PUT')
               <div class="card-body">
                 <div class="form-group">
                   <label for="title">Название</label>
                   <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$tag->title}}">
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