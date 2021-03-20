@extends('layout')
@section('content')
<div class="row">
      <div class="col-md-8">
        <h2>メモ一覧</h2>
        <table class="table table-striped">
          <tr>
            <th>記事番号</th>
            <th>日付</th>
            <th>タイトル</th>
            <th>内容</th>
          </tr>
          @foreach($memos as $memo)
          <tr>
            <td>{{$memo->id}}</td>
            <td>{{$memo->updated_at}}</td>
            <td>{{$memo->title}}</td>
            <td>{{$memo->content}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
@endsection