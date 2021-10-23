<?php

namespace App\Models;

use App\Scopes\ScopeTrainer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    public function getData()
    {
        return $this->id . ':' . $this->name . '(' . $this->sex . ',' . $this->age . ')';
    }
    
    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ScopeTrainer);
    }
}