<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

final class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $table = 'users';

    protected $hidden = [
        'remember_token',
        'password',
    ];

    protected array $dates = [
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getIsAdminAttribute(): bool
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function getEmailVerifiedAtAttribute($value): ?string
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format').' '.config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value): void
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format').' '.config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input): void
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
