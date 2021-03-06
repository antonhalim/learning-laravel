<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
  protected $fillable = [
    'title',
    'body',
    'published_at'
  ];

  protected $dates = ['published_at'];
  public function setPublishedAttribute($date)
  {
    $this->attributes['published_at'] = Carbon::parse($date);
  }
  public function scopePublished($query)
  {
    $query->where('published_at', '<=', Carbon::now());
  }
  public function scopeunPublished($query)
  {
    $query->where('published_at', '>', Carbon::now());
  }
}
