<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_users';
    protected $primaryKey = 'user_id';

    protected $fillable = ['user_id','level_id','username', 'nama', 'password'];

    public function level(): BelongsTo{
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    public function stoks():HasMany{
        return $this->hasMany(StokModel::class);
    }

    public function penjualans():HasMany{
        return $this->hasMany(PenjualanModel::class);
    }
}
