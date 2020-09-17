<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description', 'url', 'image'
    ];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/no-image.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
