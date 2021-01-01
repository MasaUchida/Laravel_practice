<?php

namespace App\Http\Controllers;

use App\Folder;
//バリデーションをONにするためにRequestsフォルダに作ったCreateFolderファイルをインポートする
use App\Http\Requests\CreateFolder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function showCreateForm(){
        return view('folders/create');
    }
    
    //引数にRequestクラスのインスタンスを受け入れる=>Laravelがリクエスト情報を引数に詰め込んで渡してくれる
    //バリデーションを有効化するために引数の型をCreateFolder(FormRequestクラスを継承)に変更
    //RequestクラスとFormRequestクラスは互換性がある
    //どうやらRequest->FormRequestの継承関係っぽい
    public function create(CreateFolder $request){
        
        //Folderモデルのインスタンスを作る
        $folder = new Folder();//モデルクラスのインスタンスを作る
        //タイトルに入力値を代入する
        $folder -> title = $request -> title;//インスタンスのプロパティに値を入れる
        //インスタンスの状態をデータベースに書き込む
        $folder -> save();//書き込みのメソッド
        
        //フォルダができたあとは元の画面に帰ってくる
        return redirect()->route('tasks.index',['id' => $folder->id,]);
    }
}
