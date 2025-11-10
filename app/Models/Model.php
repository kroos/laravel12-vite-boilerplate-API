<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model as Eloquent;

use App\Traits\Auditable;

class Model extends Eloquent {
    use Auditable, HasFactory;

    protected $guarded = [];
}
