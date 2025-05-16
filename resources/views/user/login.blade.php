@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
   <div class="container mt-5">
      <h1>Авторизация</h1>

      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif
      
      <form action="{{route('login')}}" method="POST">
         @csrf
         <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
            <div class="input-group-append">
               <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
               </div>
            </div>
         </div>
         <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
               <div class="input-group-text">
                  <span class="fas fa-lock"></span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-4">
               <button type="submit" class="btn btn-primary btn-block">Вход</button>
            </div>
         </div>
      </form>
   </div>
</div>
@endsection