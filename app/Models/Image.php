<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function product(){
        return $this->morphTo(); //one to one relationship
    }
    protected $fillable=[
        'image1',
        'image2',
        'image3',
 ];
}
