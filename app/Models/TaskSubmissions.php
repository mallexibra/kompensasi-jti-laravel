<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskSubmissions extends Model
{
    protected $fillable = ['id_tugas', 'id_mahasiswa', 'file', 'url'];
}
