<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'url',
      'testimony',
      'inscription',
      'syllabus',
      'calendar',
    ];

    protected $casts = [
      'testimony' => 'array',
      'inscription' => 'array',
      'syllabus' => 'array',
      'calendar' => 'array',
   ];

    public function user(){
      return $this->belongsTo(User::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'title';
    }

}
