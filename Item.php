<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
  protected $fillable = ['name'];
  public function item()
  {
    return $this -> belongsTo('App\Item' ) ;
}
}
