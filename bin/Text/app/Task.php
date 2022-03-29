<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    //
    use SoftDeletes;  //需要新建deleted at column(資料庫的資料雖然沒有被刪除，但因為delete_at欄位有註記刪除，所以網頁上不會讀出來，才不會完全找不回資料)
    public $table = 'tasks';

    protected $fillable = [    //設定fillable的欄位
        'description',

    ];

    public function isCompleted(){
        return $this->completed_at !== null;   //不是null就是true的意思

    }
}
