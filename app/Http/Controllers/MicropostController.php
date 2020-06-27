<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Micropost;

use App\Http\Requests\MicropostRequest;

use Auth;

class MicropostController extends Controller
{
    /**
     * 投稿一覧表示アクション
     */
    public function index()
    {
        $microposts = Micropost::getAll(); //クラスメソッド呼び出し クラス名::メソッド名
        $viewParams = [
            'microposts' => $microposts,
        ];
        return view('micropost.index', $viewParams);
    }

    /**
     * 投稿フォーム表示アクション
     */
    public function input()
    {
        return view('micropost.input');
    }

    /**
     * 投稿処理アクション
     */
    public function post(MicropostRequest $request)
    {
        $content   = $request -> input('content');
        $micropost = new Micropost;
        $params = [
            'user_id' => Auth::id(),
            'content' => $content,
        ];
        if (!$micropost -> micropostSave($params)) {
            //登録失敗
            return redirect() -> route('micropost.index') -> with('flash_message', 'Regist micropost failed');
        }
        return redirect() -> route('micropost.index') -> with('flash_message', 'Regist success!!');
    }
}
