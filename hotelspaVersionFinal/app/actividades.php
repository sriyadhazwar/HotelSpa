<?php

namespace HotelUnicorns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class actividades extends Model
{
    use Notifiable;
    protected $fillable = [
        'actividad', 'cliente', 'habit','fecha',
    ];
    public $timestamps = false;
    public function user(){
    	return $this->belongsTo(User::class,'cliente','id');
    }
}
