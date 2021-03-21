@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>{{ $memo->title}}</h2>
    <span>作成日：{{ $memo->created_at}}</span>
    <span>更新日：{{ $memo->updated_at}}</span>
    <p>{{ $memo->content}}</p>
  </div>
</div>
@endsection