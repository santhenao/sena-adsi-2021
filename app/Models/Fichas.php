<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichas extends Model
{
    use HasFactory;
    protected $table= 'fichas';
    protected $primaryKey= 'id';
    protected $fillable= ['jornada','nombre', 'actividad', 'programas_id'];


    public function programas (){
        return $this->belongsTo('App\app\Models\Programas.php');
    }
}
