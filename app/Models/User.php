<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre', 
        'paterno',
        'materno',
        'mail', 
        'fechaAlta',
        'categoria',
        'numEmpleado',
        'adscripcion',
        'cargo', 
        'turno', 
        'servicio',
        'idinstitucion',
        'estadoUsuario',           
        'nickname',
        'fechaPW',
        'alta',
        'idUserValido',
        'CorreoValidado',
        'Verificador',

        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function books(): HasMany{
        return $this->hasMany(Book::class, 'usuario_id'); 
    }

    public function institution(): BelongsTo {
        return $this->belongsTo(Institution::class, 'idinstitucion'); 
    }

    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class, 'permisouserexterno', 'Usuario', 'Modulo');
    }
}
