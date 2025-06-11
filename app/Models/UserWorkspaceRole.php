<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserWorkspaceRole extends Model
{
    protected $fillable = ['user_id', 'workspace_id', 'role_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
