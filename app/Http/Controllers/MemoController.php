<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller
{
    /**
     * メモ一覧を表示する
     * 
     * @return view
     */
    public function showList(){
        $memos =Memo::all();
        return view('memo.list',['memos'=>$memos]);
    }
    /**
     * メモ詳細を表示する
     * 
     * @return view
     */
    public function showDetail($id){
        $memo=Memo::find($id);
        return view('memo.detail',['memo'=>$memo]);
    }
    /**
     * メモ投稿フォームを表示する
     * 
     * @return view
     */
    public function showCreate(){
        return view('memo.form');
    }
}