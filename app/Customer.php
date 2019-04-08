<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //fillable example
    //protected $fillable = ['name','email','active'];

    //gaurded example - opposite of fillable
    protected $guarded = [];

    protected $attributes =[
      'active' => 1
    ];
    public function scopeActive($query){
        return $query->where('active',1);
    }

    public function getActiveAttribute($attribute){
        return $this->getActiveOptions()[$attribute];
    }

    public function scopeInactive($query){
        return $query->where('active',0);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function getActiveOptions(){
        return [
            0 => 'Inactive',
            1 => 'Active',
            2 => 'In-Progress'
        ];
    }
}
