<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class User1Controller extends Controller
{



    /**
     * ユーザー一覧
     * 
     * @param Request $request
     * @return Response
      */
      public function index(Request $request)
      {

         $users = Users::orderBy('id','asc') -> get();
         return view('users.index',[
             'users'=> $users,
         ]);
        }


    /**
     * 
     * 会員登録フォーム
     * 
     */
    public function create()
    {
        return view('create');
    }

    /**
     * 
     * 会員情報の保存
     * 
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required|max:15',
            'phone' =>'required|max:15',
            'email' =>'required|max:245'
        ]);

        // ユーザー作成
        Users::create([
            'id'=>0,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return redirect('/users');

    }


    /**
     * 編集画面
     * 
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function edit($id)
    {
        $user=Users::find($id);
        return view('edit',['user'=>$user]);
    }

    /**
     * 編集内容の登録
     */
    public function userEdit(Request $request,$id )
    {
        $user = Users::find($id);

        // バリデーション（必要に応じて追加）
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        return redirect('/users');
    }

    /**
     * ユーザーの削除
     */
    public function userDelete(Request $request,$id)
    {
        $user = Users::find($id);
        $user->delete();

        return redirect('/users');
    }
}

