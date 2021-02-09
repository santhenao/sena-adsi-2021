<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructores extends Model
{
    use HasFactory;
    protected $table= 'instructores';
    protected $primaryKey= 'id';
    protected $fillable= ['nombres','apellidos', 'documento', 'foto_perfil', 'fichas_id'];

    public function fichas (){
        return $this->belongsTo('App\app\Models\Fichas.php');
    }
}
