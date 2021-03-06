<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'task_name', 'description', 'start_date', 'end_date', 'assignee_id', 'assignor_id', 'reassignee_id'
    ];
    
    public function user()
    {
        return $this->belongsto('App\User', 'assignee_id');
    }

    public function assignor() {
        return $this->belongsTo('App\User', 'assignor_id');
    }

    public function reassignee() {
        return $this->belongsTo('App\User', 'reassignee_id');
    }
}
