<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Metadata extends Model
{
    use HasFactory, SoftDeletes;

    /**********************************
     *           Relations
     ********************************/
    
    /**
     * Get the resource of the metadata
     * @return MorphTo
     */    
    public function extended()
    {
        return $this->morphTo();
    }
}
