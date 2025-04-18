@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
<!-- /.card-header -->
<div class="card-body">
  <a href="{{route('categories.create')}}" class="btn btn-primary mb-3">Добавить категорию</a>
  @if (count($categories))
  <div class="table-responsive">
    <table class="table table-bordered table-hover text-nowrap">
      <thead>
        <tr>
          <th style="width: 30px">#</th>
          <th>Наименование</th>
          <th>Slug</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->title}}</td>
          <td>{{$category->slug}}</td>
          <td>
            <a href="{{route('categories.edit',['category'=>$category->id])}}" class="btn btn-info btn-sm float-left mr-1">
              <i class="fas fa-pencil-alt"></i>
            </a>

            <form action="{{route('categories.destroy', ['category'=> $category->id])}}" method="POST" class="float-left">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@else
<p>Категорий пока нет...</p>
@endif
</div>
<!-- /.card-body -->
@endsection
