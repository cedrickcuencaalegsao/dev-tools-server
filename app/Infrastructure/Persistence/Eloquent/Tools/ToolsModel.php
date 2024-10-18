<?php

namespace App\Infrastructure\Persistence\Eloquent\Tools;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolsModel  extends Model
{
    use HasFactory;
    protected $table = 'tools';
    protected $fillable = ['id', 'name', 'category', 'language',  'description', 'documentation_url', 'image', 'created_at', 'updated_at'];
}
