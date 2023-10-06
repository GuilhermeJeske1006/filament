<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        "titulo",
        "sutitulo",
        "descricao",
        "imagem",
        "categoria_id"
    ];

    public function categoria()
    {
        return $this->belongsTo(Category::class);
    }
}
