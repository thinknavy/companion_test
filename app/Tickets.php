<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $fillable = ['ticket_type','desc','free_day','status','username','bul_no','apr_no','created_at'];
}
