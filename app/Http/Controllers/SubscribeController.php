<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use App\Models\Follower;

class SubscribeController extends Controller
{
    public function store(Request $req)
    {
        $mail=$req->email;
        $num=Follower::select('id')->where('email','=',$mail)->first();
        $num=$num->id;
        $web=$req->webId;
        $subId=$num.$web;
        $sub= new Subscribe;
        $sub->websiteId=$req->webId;
        $sub->followerEmail=$req->email;
        $sub->subscribeId=$subId;
        
        try {
            $sub->save();
            return 'Your data added sccessful!';
        } catch (\Exception $exception) {
            return 'Your data modification have error, please refresh try agin!';
        }
        
    }
}
