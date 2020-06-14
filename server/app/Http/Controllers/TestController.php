<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// モデルからファイルを引っ張ってくる
use App\Models\Test;

// ファサード
// クエリビルダ
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index()
    {
        // allでテーブルのデータを全て持ってきている
        // $values = Test::all();

        // クエリビルダの方が必要なデータのみが取れるので良い
        // 条件指定もしやすく可読性も高い
        // DBからデータを撮って来るときの構文
        // ファサード
        $tests = DB::table('tests')->get();
        // ddコマンド…変数の中身を表示してくれる
        // dd($tests);
        return view('tests.test', compact('tests'));
    }
}
