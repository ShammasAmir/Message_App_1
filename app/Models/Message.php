<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int id
 * @property string message_topic
 * @property string message_writer
 * @property string message_text
 * @property Carbon created_at
 * @property Carbon updated_at
 * 
 */

class Message extends Model
{
    use HasFactory;

    protected $table = "messages";

    protected $fillable = [
        "message_topic","message_writer","message_text"
    ];
}
