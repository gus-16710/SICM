<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institution extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_instituciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [        
        'nombre',        
        'regSanitario',        
        'telefono',
        'RFC',
        'idEstado',
        'idMunicipio',
        'calle',
        'cp',
        'idEdoFiscal',
        'idMpioFiscal',
        'calleFiscal',
        'cpFiscal',
        'idtipoInstitucion',
        'clave',
        'idformato',
        'idUser'  
    ];
   
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'idinstitucion');
    }
}
