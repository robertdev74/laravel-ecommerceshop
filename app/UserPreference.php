<?php

namespace app;

/*
 * Modu - UserPreference Model
 *
 * @author  Tortuvshin Byambaa <toroo.byamba@gmail.com>
 */

use App\Eloquent\Model;

class UserPreference extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_preferences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'type_preference_id',
        'value',
    ];
}
