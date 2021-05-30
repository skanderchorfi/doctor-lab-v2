<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    public const TYPE_1 = "Produit Para-Pharmaceutique";
    public const TYPE_2 = "Produit Pharmaceutique";

    public const TYPES = [
        self::TYPE_1,
        self::TYPE_2
    ];

    public const FORM_TYPES = [
        self::TYPE_1 => self::TYPE_1,
        self::TYPE_2 => self::TYPE_2
    ];

    protected $fillable = [
        'nom',
        'description',
        'image',
        'type'
    ];
}
