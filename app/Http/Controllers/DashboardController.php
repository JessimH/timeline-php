<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class DashboardController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home', [
            'posts' => Post::get()
        ]);
    }

    public function createPost(Request $request)
    {
        $request->validate(['body' => 'required|min:6']);

        auth()->user()->posts()->create(['body' => $request->body]);

        return redirect(route('dashboard'));
    }

    public function showForm()
    {
        $user = Auth::user();

        return view('dashboard_user', compact('user'));
    }

    public function update(Request $request)
    { 
        $user = User::find(Auth::user()->id);

        $request->validate([
            'email' => 'required|email|max:255|unique:users,email,'.Auth::user()->id.',id',
        ]);

        if($user) {
            if($request['name']){
                $user->name = $request['name'];
            }
            if($request['email']){
                $user->email = $request['email'];
            }
            $user->password = bcrypt($request['password']);
            if ($request['fileName']) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
                $namePic = $user['id'].'.'.$request['fileName']->extension();
    
                $request['fileName']->move(public_path().'/images/', $namePic);
    
                $user->fileName = $namePic;
            }
            $user->save();
            return redirect(route('dashboard'))->with('success','Votre compte a bien été modifié!');
        } else {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $userToDelete = User::where('id', $id)->get();

        if(count($userToDelete)>0){
            User::where('id', $id )->delete();

            $userId = Auth::user()->id;

            if($userId === $id){
                return redirect('/')->with('success','Votre compte a bien été suprimé!');
            }
            else{
                return redirect('/dashboard')->with('error','Vous ne pouvez pas supprimer n\'importe qui !');
            }
        }
        else{
            return redirect('/dashboard')->with('error','Le compte est introuvable, contactez votre administrateur de base de données.');
        } 
    }
}
