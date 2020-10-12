<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PersonalInformation extends Model
{
    use HasFactory;

    public $table = 'main_personal_information';

    public function main_livelihood(): HasMany
    {
        return $this->hasMany(MainLivelihood::class,'personal_information_uuid','uuid');
    }
}
