<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Tên bảng (nếu khác mặc định)
    protected $table = 'todos';

    // Cho phép gán giá trị cho các cột này
    protected $fillable = ['content', 'is_completed'];
}
