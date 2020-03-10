<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Post;
use Auth;
class UserController extends Controller
{
    public function addProfile(){
        $user = User::find(1);
        $profile = new Profile;
        $profile->phone = '0987654321';
        $profile->address = 'Oddor Meanchey';
        $profile->user_id = $user->id;
        $profile->save();
        $usered = User::find(2);
        $profiled = new Profile;
        $profiled->phone = '0987654854';
        $profiled->address = 'Battambang';
        $profiled->user_id = $usered->id;
        $profiled->save();
        return "add profile";
    }

    public function showProfile(){
        $user = User::all();
        return view('Profile.showProfile',compact('user'));
    }
    
    public function deleteprofile($id){
        $user = User::find($id);
        $user->delete();
        return redirect('showProfile');
    }
public function showformEidt($id){
    $user = User::find($id);
    return view('profile.edit',compact('user'));
}
public function update(Request $request,$id){
    $user = User::find($id);
    $user->name=$request->get('name');
    $user->email=$request->get('email');
    $user->save();
    $user->profile->phone=$request->get('phone');
    $user->profile->address=$request->get('address');
    $user->profile->save();
    return redirect('showProfile');
}



    public function addForm(){
        return view('post.addPost');
    }

    public function addPost(Request $request){
        $user = User::all();
        $post = new Post;
        $post->title = $request->get('title');
        $post->body  = $request->get('body');
        $post->user_id = $user->id;
        $post->save();
        return "add Post";
    }

    public function showPost(){
        $posts = Post::find(auth::id());
        return view('post.showPost',compact('posts'));
    }
}
