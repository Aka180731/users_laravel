@extends('layouts.app')

@section('content')



<!-- タスク一覧表示 -->
 @if (count($users) >0)
 <div class="panel panel-default w-100 p-3">
 <div class="panel-heading">    
   </div> 

   <!-- テーブルヘッダー -->
   <div class="text-end">
      
      <a class="link" href="{{ route('create')}}">{{ __('>>登録') }}</a>
   </div>

    <div class="panel-body ">
    <table class="table table-bordered table-sm user-table">

    <!-- テーブル本体 -->
      <thead>
        <th>名前</th>
        <th>電話番号</th>
        <th>メールアドレス</th>
        <th>&nbsp;</th>
      </thead>
     <tbody>
        @foreach ($users as $user)
        <tr >
            <!-- タスク名 -->
                <td class="col-md-4">{{ $user->name }}</td>
                <td class="col-md-4">{{$user->phone}}</td>
                <td class="col-md-4">{{$user->email}}</td>
                <td class="col-md-4"><a class="link" href="{{ route('edit',$user->id) }}">{{ __('編集') }}</a>
        </tr >
        @endforeach
     </tbody>
    </table>
 </div>
 </div>
 @endif
 @endsection

