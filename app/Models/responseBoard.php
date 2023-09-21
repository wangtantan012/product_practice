<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class responseBoard extends Model
{
    protected $table = 'response__boards';
    protected $primaryKey = 'id';
    protected $fillable = ['created_at','updated_at','respond','message_id'];

    public function messageBoard()
    {
        return $this->belongsTo(messageBoard::class,'message_id', 'id');
    }
}
