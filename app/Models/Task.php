<?php

namespace App\Models;
use App\Models\User;


use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $casts = [
        'is_complete' => 'boolean',
    ];

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'title',
        'is_complete',
        
    ];

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'id';
    }

  /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getUserId();
    }


/**

    /**
     * The relationship to the owning user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
