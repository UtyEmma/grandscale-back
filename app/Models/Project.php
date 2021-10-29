<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [ 'unique_id', 'title', 'content', 'category', 'client', 'images', 'url', 'date'];

    protected $attributes = [
        'status' => true
    ];

    protected $primaryKey = "unique_id";
    protected $keyType = "string";
    public $incrementing = false;

}
