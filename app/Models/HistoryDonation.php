<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoryDonation extends Model
{
    use HasFactory;
    protected $table="history";
    protected $primaryKey="history_id";

    function donor():BelongsTo {
        return $this->belongsTo(Donor::class, 'donor_id');
    }

    function camp():BelongsTo {
        return $this->belongsTo(Camp::class, 'camp_id');
    }
}
