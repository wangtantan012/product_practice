<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class messageBoard extends Model
{
    protected $table = 'message__boards';
    protected $primaryKey = 'id';
    protected $fillable = ['created_at', 'updated_at','message'];

    public function responseBoard() {
        
        return $this->hasmany(responseBoard::class,'message_id', 'id');
    }
}
