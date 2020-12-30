<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function tasks(){
        return $this->hasMany('App\Task','folder_id','id');//第一 名前空間含むモデル名　第二　外部キー（親側）　第三　内部キー（子側）
    }
}
