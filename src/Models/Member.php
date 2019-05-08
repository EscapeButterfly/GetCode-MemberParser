<?php

namespace GetCode\MemberParser\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model {
    use SoftDeletes;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'member_number',
        'address',
        'city',
        'state',
        'zip_code',
        'is_union'
    ];

    protected $casts = [
        'is_union' => 'boolean'
    ];
}
