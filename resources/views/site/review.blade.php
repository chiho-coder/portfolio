@extends('layouts.main')
@section('title', '口コミ一覧')

@section('content')
 <div class="container">
     <div class="row">
         <h2>口コミ一覧</h2>
     </div>
     <div class="row">
         <div class="col-md-4">
             <a href="{{ action('Main\ReviewController@add') }}" role="button" class="btn btn-primary">新規作成</a>
         </div>
         <div class="col-md-8">
          <form action="{{ action('Main\ReviewController@index') }}" method="get">
           <div class="form-group row">
            <label class="col-md-2">タイトル</label>
            <div class="col-md-8">
             <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
            </div>
            <div class="col-md-2">
             {{ csrf_field() }}
             <input type="submit" class="btn btn-primary" value="検索">
            </div>
           </div>
          </form>
         </div>
        </div>
         <div class="row">
             <div class="list-reviews col-md-12 mx-auto">
                 <div class="row">
                     <table class="table table-bordered">
                      <tr>
                       <th width="10%">ID</th>
                       <th width="20%">タイトル</th>
                       <th width="50%">口コミ</th>
                      </tr>
                      <tbody>
                       @foreach($posts as $reviews)
                       <tr>
                        <th>{{ $reviews->id }}</th>
                        <td>{{ \Str::limit($reviews->title, 100) }}</td>
                        <td>{{ \Str::limit($reviews->comment, 250) }}}</td>
                       </tr>
                       @endforeach
                      </tbody>
                     </table>
                 </div>
             </div> 
         </div>
     </div>
 @endsection