<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'crew_id',
        'name',
        'surnames',
        'genre',
        'email',
        'password',
        'course_id',
        'birthdate',
        'address',
        'colony',
        'municipality',
        'PC',
        'phone',
        'cel_phone',
        'generation',
        'modality_id',
        'payment_periodicity_id',
        'schedule_id',
        'sabbatine',
        'tuition',
        'start',
        'curp',
        'first_time',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the course that the student is enrolled in.
     */
    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class);
    }

    /**
     * Get the crew (campus) that the student belongs to.
     */
    public function crew()
    {
        return $this->belongsTo(\App\Models\Crew::class);
    }
}
