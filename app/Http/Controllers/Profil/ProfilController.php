<?php

namespace App\Http\Controllers\Profil;

use App\Model\AdModel;
use App\Model\ProfilModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;
        $user=ProfilModel::all()->where('id',$id);
        $posts=AdModel::where('user_id',$id)->paginate(4);
        return view('profil/profil', compact('user','posts'));
    }
    public function editP($id){
        $user= ProfilModel::where('id',$id)->firstOrFail();
        return view('profil/editprofil',compact('user'));

    }

    public function updateP($id)

    {
        $password =Hash::make(request('password'));
        $user = ProfilModel::where('id',$id)->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => $password ,
        ]);
        return redirect(route('profil'))->with('success','Modified Profile !!');
    }

    public function deleteAd($id)
    {
        $post=AdModel::find($id);
        $post->delete();
        return redirect(route('profil'));
    }

    public function editAd($id)
    {
        $post= AdModel::where('id',$id)->firstOrFail();
        return view('post/editpost',compact('post'));

    }

    public function updateAd(Request $request, $id)
    {
        $img=$request->url ?time().'.'.$request->url->getClientOriginalExtension():'';
        $post = AdModel::where('id',$id)->update([
            'title' => request('title'),
            'content' => request('content'),
            'price' => request('price'),
            'img1' => $img
        ]);
        if($request->url)
            $request->url->move(public_path('uploads'),$img);
        return redirect(route('profil'));
    }
}
