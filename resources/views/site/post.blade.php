@extends('layouts.main')
@section('title', '口コミの新規作成')
@section('content')
 <div class="container">
  <div class="row">
   <div class="col-md-8 mx-auto">
       <h2>口コミの新規作成</h2>
       //後で変える↓
       <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">
        
        @if (count($errors) > 0)
        <ul>
         @foreach($errors->all() as $e)
         <li>{{ $e }}</li>
         @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2">名前</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
          </div>
        </div>
        <div class="form-group row">
         <label class="col-md-2">口コミ</label>
         <div class="col-md-10">
           <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
         </div>
        </div>
        <div class="form-grop row">
         <label class="col-md-2">画像</label>
         <div class="col-md-10">
          <input type="file" class="form-control-file" name="image">
        </div>
       </div> 
       {{ csrf_field() }}
       <input type="submit" class="btn btn-primary" value="更新">
       </form>
     </div>
   </div>
 </div>
@endsection

 
