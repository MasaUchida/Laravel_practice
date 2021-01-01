<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function tasks(){
        //第一 名前空間含むモデル名　第二　外部キー（親側）　第三　内部キー（子側）
        //第二引数が「テーブル名_id」で第三引数が「id」の場合、第二引数と第三引数は省略可能
        return $this->hasMany('App\Task','folder_id','id');
    }
}
