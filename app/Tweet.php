<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function likes(){
    //     //return $this->hasMany(like::class);
    //     $this->likes()->create([
    //         'user_id ' =>auth()->id(),
    //         'liked'=>true
    //     ]);
    // }
    // public function dislikes(){
    //     return $this->hasMany(like::class);
    //     $this->likes()->create([
    //         'user_id ' =>auth()->id(),
    //        ],['liked'=>false] 
    //     ]);
    //  public function isLikedBy(User $user)
    //  {
    //      //$this->Likes()->where('user_id',$user->id)->exists();
        //    return(bool) $users->likes
        //    ->where('tweet_id',$this->id)
        //    ->where('liked',true)
        //    ->count();
    //  }
    //public function isdisLikedBy(User $user)
    //  {
    //      //$this->Likes()->where('user_id',$user->id)->exists();
        //    return(bool) $users->likes
        //    ->where('tweet_id',$this->id)
        //    ->where('liked',false)
        //    ->count();
    //  }


    }

