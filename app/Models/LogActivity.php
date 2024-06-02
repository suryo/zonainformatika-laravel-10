<?php

// app/Models/LogActivity.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LogActivity extends Model
{
    use HasFactory;

    protected $table = 'log_activity';

    protected $fillable = [
        'user_id',
        'activity',
    ];

    // Method untuk menyimpan log
    public static function logActivity($activity)
    {
        // Pastikan pengguna sudah masuk
        if (Auth::check()) {
            // Ambil ID pengguna yang sedang masuk
            $userId = Auth::user()->id;

            // Periksa apakah log sudah ada sebelumnya
            $existingLog = self::where('user_id', $userId)
                               ->where('activity', $activity)
                               ->exists();

            // Jika log belum ada, simpan log baru
            if (!$existingLog) {
                self::create([
                    'user_id' => $userId,
                    'activity' => $activity,
                ]);
            }
        }
    }

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
