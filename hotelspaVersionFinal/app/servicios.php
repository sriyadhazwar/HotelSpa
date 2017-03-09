<?php

namespace HotelUnicorns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class servicios extends Model
{
    use Notifiable;
    protected $table = 'servicios';
    protected $fillable = [
        'serv', 'cliente', 'habit','observacion'
    ];
    public $timestamps = false;
    public function user(){
    	return $this->belongsTo(User::class,'cliente','id');
    }
}
