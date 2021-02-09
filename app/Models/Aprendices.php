<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendices extends Model
{
    use HasFactory;
    protected $table= 'aprendices';
    protected $primaryKey= 'id';
    protected $fillable= ['tipo_documento','documento', 'nombres', 'apellidos', 'correo', 'nacimiento', 'genero','fichas_id'];

    public function fichas (){
        return $this->belongsTo('App\app\Models\Fichas.php');
    }

}
