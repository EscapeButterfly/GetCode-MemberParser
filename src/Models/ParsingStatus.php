<?php

namespace GetCode\MemberParser\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParsingStatus extends Model {
    use SoftDeletes;

    protected $fillable = [
        'total_members',
        'processed',
        'status',
        'msg'
    ];
}
