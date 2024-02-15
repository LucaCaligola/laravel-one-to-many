<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'picture',
        'project_url',
        'languages',
        'type_id'
    ];

    
   

    public function category(){
        return $this->belongsTo(Type::class);
    }
}
