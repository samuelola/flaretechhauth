<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface RegisterInterface{

    public function storeReg($data);
    public function loginUser($data);
    public function addWallet($user_id);
    public function addCryptoWallet($user_id);
}