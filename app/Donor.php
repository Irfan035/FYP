<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    //
    public function sub_categories()
    {
        return $this->belongsToMany(SubCategories::class);
    }

    public function getIsAdminAttribute()
    {
        return $this->sub_categories()->where('id', 1)->exists();
    }
}
