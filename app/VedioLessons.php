<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VedioLessons extends Model
{
    protected $table='videolessons';

    protected $fillable=[
'name', 'subject', 'videos', 'text', 'info', 'image'
];


}
