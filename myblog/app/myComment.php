<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myComment extends Model
{
    //{
    //
  protected $fillable = ['body'];

  // $comment->post
  public function post() {
    return $this->belongsTo('App\myPost');
  }
}
