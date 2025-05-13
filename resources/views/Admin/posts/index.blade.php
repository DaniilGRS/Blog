@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
<!-- /.card-header -->
<div class="card-body">
  <a href="{{route('posts.create')}}" class="btn btn-primary mb-3">Добавить Статью</a>
  @if (count($posts))
  <div class="table-responsive">
    <table class="table table-bordered table-hover text-nowrap">
      <thead>
        <tr>
          <th style="width: 30px">#</th>
          <th>Наименование</th>
          <th>Категория</th>
          <th>Теги</th>
          <th>Дата</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->category->title}}</td>
          <td>{{$post->tags->pluck('title')->join(', ')}}</td>
          <td>{{$post->created_at}}</td>
          <td><img src="{{ asset(str_replace('public/', 'storage/', $post->thumbnail)) }}" alt="" width="250px" height="auto"></td>
          <td>
            <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-info btn-sm float-left mr-1">
              <i class="fas fa-pencil-alt"></i>
            </a>

            <form action="{{route('posts.destroy', ['post'=> $post->id])}}" method="POST" class="float-left">
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
<p>Статей пока нет...</p>
@endif
</div>
<!-- /.card-body -->
<div class="card-footer clearfix">
  {{$posts->links()}}
</div>
@endsection
