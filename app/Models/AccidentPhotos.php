<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Accident;

class AccidentPhotos extends Model
{
    //

    /**
     * Gets the accident accociated with the photo
     * 
     * @return App\Models\Accidents The accident
     */
    public function accident()
    {
        return $this->belongsTo(Accident::class);
        
    }
}
