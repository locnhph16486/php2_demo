<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Teacher extends Model{
    protected $table = 'teachers';

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }
}
?>