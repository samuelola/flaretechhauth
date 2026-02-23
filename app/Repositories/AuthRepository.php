<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mews\Purifier\Facades\Purifier;

class AuthRepository{

    public string $first_name;
    public string $last_name;
    public string $email;
    public string $language;
    public string $country;
    public string $state;
    public string $terms;
    public string $pay_tax;
    public string $join_date;
    public string $password;
    public string $active;
    public string $deleted;
    public string $albums;
    public string $tracks;
    public int $role_id;
    public int $user_status;
    



    public function setFirstName($first_name){
        //return $this->first_name =  Purifier::clean($first_name);
        return $this->first_name =  $first_name;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function setLastName($last_name){
        //return $this->last_name = Purifier::clean($last_name);
        return $this->last_name = $last_name;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function setEmail($email){
        return $this->email = $email;
    }

    public function getEmail(){
        return $this->first_name;
    }

    public function setLanguage($language){
        return $this->language = $language;
    } 

    public function getLanguage(){
        return $this->language;
    }

    public function setCountry($country){
        return $this->country = $country;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setstate($state){
        return $this->state = $state;
    }

    public function getState(){
        return $this->state;
    }


    public function setTerm($terms){
        return $this->terms = $terms;
    }

    public function getTerm(){
        return $this->terms;
    }

    public function setPayTax($pay_tax){
        return $this->pay_tax = $pay_tax;
    }

    public function getPayTax(){
        return $this->pay_tax;
    }

    public function setJoinDate($join_date){
        return $this->join_date = $join_date;
    }

    public function getJoinDate(){
        return $this->join_date;
    }

    public function setPassword($password){
        return $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setActive($active){
        return $this->active = $active;
    }

    public function getActive(){
        return $this->active;
    }

    public function setDeleted($deleted){
        return $this->deleted = $deleted;
    }

    public function getDeleted(){
        return $this->deleted;
    }

    public function setAlbums($albums){
        return $this->albums = $albums;
    }

    public function getAlbums(){
        return $this->albums;
    }

    public function setTracks($tracks){
        return $this->tracks = $tracks;
    }

    public function getTracks(){
        return $this->tracks;
    }

    public function setRoleId($role_id){
        return $this->role_id = $role_id;
    }

    public function getRoleId(){
        return $this->role_id;
    }

    public function setUserStatus($user_status){
        return $this->user_status = $user_status;
    }

    public function getUserStatus(){
        return $this->user_status;
    }

     
    public function fromData($data){
       
        $reg = new AuthRepository();
        $reg->setFirstName($data['first_name']);
        $reg->setLastName($data['last_name']);
        $reg->setEmail($data['email']);
        $reg->setLanguage($data['language']);
        $reg->setCountry($data['country']);
        $reg->setstate($data['state']);
        $reg->setTerm($data['terms']);
        $reg->setPayTax($data['pay_tax']);
        $reg->setJoinDate(Carbon::now());
        $reg->setTracks($data['tracks']);
        $reg->setAlbums($data['albums']);
        $reg->setDeleted($data['deleted']);
        $reg->setActive($data['active']);
        $reg->setRoleId($data['role_id']);
        $reg->setUserStatus(1);
        $reg->setPassword(Hash::make($data['password']));
        return $reg;
    }
}