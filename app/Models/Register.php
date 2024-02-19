<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table='Register';

    protected $fillable = [
        'team_name',
        // 'password',
        'full_name',
        'email',
        'WA_num',
        'line_ID',
        'git_ID',
        'birth_place',
        'birth_date',
        'CV_img_path',
        'card_img_path'
    ];
}
