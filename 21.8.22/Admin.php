<?php 
include "classes.php";

class Admin extends Member
{
    public function createForum($forum)
    {
        echo "$this->username created $forum";
    }

    public function banMember(Member $member)
    {
        echo "$this->username bannded a user. $member->username";
    }
}