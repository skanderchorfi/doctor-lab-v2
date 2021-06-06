<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public const TYPE_1 = 'type 1';
    public const TYPE_2 = 'type 2';
    public const TYPE_GESTATIONEL = 'gestationel';

    public const TYPES = [
        self::TYPE_1,
        self::TYPE_2,
        self::TYPE_GESTATIONEL
    ];

    protected $fillable = [
        'titre',
        'contenu',
        'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
