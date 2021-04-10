<?php


namespace Dickens\Message\app\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = ['email','message'];
}
