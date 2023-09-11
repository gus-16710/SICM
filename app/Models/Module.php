<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Module extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Modulos';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [        
        'Permiso',        
        'entorno',        
        'codigo',     
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'permisouserexterno', 'Modulo', 'Usuario');
    }
}
