<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    public $incrementing = false;
//    protected $table = 'foobar';
//    protected $primaryKey = 'id';
//    protected $connection = 'second_db';
//    protected $fillable = [
//            'name', 'price',
//            'active', 'sort',
//    ];

    protected $fillable = [
        'id',
        'name',
        'price',
        'active',
        'sort',
//        'active_at',
    ];

// protected $hidden - скроем поле с ценой "price"
    protected $hidden = [
        'price',
    ];

//    $data = $request->all();
//    Post::create($data);
    protected $casts = [
        'price' => 'float',
        'active' => 'boolean',
        'sort' => 'integer',
        'active_at' => 'datetime', // приводит значение к объекту вида Carbon
    ];

//    protected  $casts = [
//        'active_at' => 'datetime',
//    ];

}
