<?php
/**
 * Discuss and topic:
 * * OOP inheritance
 */

 class Member
 {
    public $username;
    private $logedIn = false;

    public function login()
    {
        $this->logedIn = true;
    }

    public function logout()
    {
        $this->logedIn = false;
    }

    public function isLogedIn()
    {
        return $this->logedIn;
    }
 }