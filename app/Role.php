<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /** Setup many to many relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('User', 'UserRole');
    }
}
