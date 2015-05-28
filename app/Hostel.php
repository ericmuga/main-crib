<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model {

protected  $fillable = ['name','type','location','address','owner_id'];

}
