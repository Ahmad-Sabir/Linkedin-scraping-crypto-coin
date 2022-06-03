<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    protected $fillable=[
      'id',
      'name',
      'holders',
      'offical_site',
      'reddit',
      'github',
      'twitter',
      'telegram',
      'whitepaper',
      'description',
      'price',
      'marget_cap',
      'volume',
      'rank',
      'launch_date',
      'smart_chain',
      'coingecko',
      'seller',
      'paccake',
    ];
}
