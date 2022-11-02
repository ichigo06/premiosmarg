<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
        use HasFactory;
        protected $casts = ['data' => 'array'];


        protected $fillable = ['venta', 'id_consumers_sales', 'id_users_sales'];

        public function consumers() {
                return $this->belongsTo(Consumer::class, 'id_consumers_sales');
        }
        public function users() {
                return $this->belongsTo(User::class, 'id_users_sales');
        }

}
