<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'nowa', 'province_id', 'province_name', 'city_id', 'city_name'];


    // Mutator untuk memastikan email selalu huruf kecil
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    // Mutator untuk memastikan nomor WhatsApp selalu diawali +62
    public function setNowaAttribute($value)
    {
        // Jika nomor diawali dengan 08, ubah menjadi +62
        if (strpos($value, '08') === 0) {
            $value = '+62' . substr($value, 1);
        }
        $this->attributes['nowa'] = $value;
    }
}
