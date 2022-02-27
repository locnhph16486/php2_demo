<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class School extends Model{
    protected $table = 'schools';
    protected $fillable = ['name', 'address', 'logo', 
    'created_at', 'created_at'];

    public $timestamps = false;
    public function teachers(){
        return $this->hasMany(Teacher::class, 'school_id');
    }
}
?>