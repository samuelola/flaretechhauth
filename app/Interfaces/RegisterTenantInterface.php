<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface RegisterTenantInterface{

    public function storeTenant($name,$user_id);
}