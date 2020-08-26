<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage()
    {

        $imagePath = ( $this->image) ? $this->image : 'profile/bUoe6s5eupyevYrUmGoVOlhJyT0GVXRiRHRfcBXX.png';

        return  '/storage/' . $imagePath;
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
