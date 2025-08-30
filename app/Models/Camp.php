<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Camp extends Model
{
    use HasFactory;
    protected $table="camp";
    protected $primaryKey="camp_id";

    function history():HasMany {
        return $this->hasMany(HistoryDonation::class, 'camp_id');
    }
}
