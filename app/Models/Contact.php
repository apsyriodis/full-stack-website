<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ContactController;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'email', 'designation', 'bio', 'contact_no', 'image']; // allows mass assignment
}
