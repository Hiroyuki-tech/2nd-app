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
}
