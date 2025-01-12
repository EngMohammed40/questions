<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Question extends Model
{
    protected function question(): Attribute
    {
        return Attribute::make(get: function () {
            return $this->{Auth::user()->gender . '_question'};
        });
    }

    protected function casts(): array
    {
        return [
            'wrong_answers' => 'array'
        ];
    }
}
