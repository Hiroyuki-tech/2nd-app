<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoController extends Controller
{
    /**
     * メモ一覧を表示する
     * 
     * @return view
     */
    public function showList(){
        return view('memo.list');
    }
}
