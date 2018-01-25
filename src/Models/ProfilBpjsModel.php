<?php namespace Bantenprov\ProfilBpjs\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The ProfilBpjsModel class.
 *
 * @package Bantenprov\ProfilBpjs
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilBpjsModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'profil_bpjs';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = ['user_id','no_bpjs','faskes','kelas_rawat'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

        public function getUser(){
            return $this->belongsTo('App\User','user_id');
        }
}
