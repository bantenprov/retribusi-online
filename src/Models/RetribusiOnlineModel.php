<?php namespace Bantenprov\RetribusiOnline\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The RetribusiOnlineModel class.
 *
 * @package Bantenprov\RetribusiOnline
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RetribusiOnlineModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'retribusi_onlines';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
