@extends('layouts.app')

@section('content')

<!-- 会員情報編集画面 -->
<div class="text-center d-flex align-items-center justify-content-center" style="height: 80vh;">
    <form action="/users/edit/{{$user->id}}" method="post">
        @csrf
        <!-- 中央揃えのテーブル -->
        <table class="mx-auto p-2">
            <tr>
                <th>編集 会員ID:{{$user->id}}</th>
            </tr>
            <tr>
                <td> 
                    <input id="name" type="text" value="{{$user->name}}" name="name" class="mb-2">
                </td>
            </tr>
            <tr>
                <td>
                    <input id="phone" type="text" value="{{$user->phone}}" name="phone" class="mb-2">
                </td>
            </tr>
            <tr>
                <td>
                    <input id="email" type="email" value="{{$user->email}}" name="email" class="mb-3">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="登録する" class=" btn-sm col-5">
                </td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('userDelete',$user->id) }}">
                        <button type="button" class=" btn-sm col-5 ">   削除   </button>
                    </a>
                </td>
            </tr>
        </table>  
    </form>
</div>

@endsection
