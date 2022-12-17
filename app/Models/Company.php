<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'website',
        'revenue',
        'logo'
    ];
//    public function getLogoAttribute($value)
//    {
//            return url('/storage/company/'.$value);
//
//    }
      public  function employee(){
          return $this->hasMany(Employee::class);
      }
}
