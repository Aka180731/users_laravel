@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
</head>
<body>
    <div class="text-center d-flex align-items-center justify-content-center" style="height: 80vh;">

    <form action="{{ url('/user') }}" method="post">
    <table class="mx-auto p-2">
        @csrf
            <tr>
                <th>会員登録</th>
            </tr>
            <tr>
                <td>
                <input type="text" name="name" id="name" placeholder="名前" class="mb-3 mt-3" required><br>
                </td>
            </tr>

            <tr>
                <td>
                <input type="text" name="phone" id="phone"  placeholder="電話番号" class="mb-3" required><br>
                </td>
            </tr>

            <tr>
                <td>
                <input type="text" name="email" id="email"  placeholder="メールアドレス" class="mb-3" required><br>
                </td>
            </tr>
            
            <tr>
                <td>
                <input type="submit" value="登録">
                </td>
            </tr>
    </table>
    </form>
    </div>
    
</body>
</html>