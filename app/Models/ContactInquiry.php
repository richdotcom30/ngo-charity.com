<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'status',
        'admin_notes',
        'responded_at',
    ];

    protected $casts = [
        'responded_at' => 'datetime',
    ];

    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeUnread($query)
    {
        return $query->where('status', 'new');
    }

    public function markAsRead()
    {
        $this->update(['status' => 'read']);
    }

    public function markAsResponded()
    {
        $this->update([
            'status' => 'responded',
            'responded_at' => now(),
        ]);
    }
}
