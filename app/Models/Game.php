<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    public $table = 'games';

    protected $dates = [
        'game_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'team_one_id',
        'team_two_id',
        'avenue',
        'game_date',
        'game_time',
        'ticket_url',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function team_one(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_one_id');
    }

    public function team_two(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_two_id');
    }

    public function getGameDateAttribute($value): ?string
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setGameDateAttribute($value): void
    {
        $this->attributes['game_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
