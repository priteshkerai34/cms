<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class membercontroller extends Controller
{
    public function getmember() {
        $member_id = 2;
        return $members = member::find($member_id);
    }
}
