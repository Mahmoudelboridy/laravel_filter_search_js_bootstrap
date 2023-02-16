<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class name extends Model
{
    use HasFactory;
    public $table="names";
    protected $fillable=[
        "name",
        "wazefa",
        "id"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];

}