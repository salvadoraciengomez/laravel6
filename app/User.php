<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Conversation;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articulos(){

        //Devuelve colección
        //Desde php artisan tinker>>> $user = App\User::find(1);
        //$user->articulos; (devuelve colección)
        return $this->hasMany(Articulo::class); //select * from articles where userid=x
    }

    public function proyectos(){
        //Devuelve colección
        return $this->hasMany(Project::class); //select * from projects where userid=x
    }

    public function conversaciones(){
        return $this->hasMany(Conversation::class);
    }

    //Más métodos Eloquent
    // hasOne · hasMany · belongsTo · belongsToMany

    public function roles(){
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function assignRole($role){
        if(is_string($role)){
            $role= Role::whereName($role)->firstOrFail();
        }
        $this->roles()->sync($role); // sync reemplaza save() solamente intenta añadir y da error si ya existe
    }
    public function abilities(){
        return $this->roles->map->abilities->flatten()->pluck('name')->unique();
    }

}
