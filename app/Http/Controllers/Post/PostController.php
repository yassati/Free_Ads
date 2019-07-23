<?php

namespace App\Http\Controllers\Post;

use App\Model\AdModel;
use App\Model\imgModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function viewNewAd()
    {
        return view('post/newpost');
    }

    public function newAd(Request $request)
    {
        $request->validate( [
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'price' => 'required|string|max:10',
            'filename' => 'required',
        ]);

        $post = AdModel::create(array(
            'user_id' => Auth::user()->id,
            'title' => $request['title'],
            'content' => $request['content'],
            'price' => $request['price'],
        ));
        $this->upimg($post,$request);

        return redirect(route('newad', $post))->with('success','IT\'S OK !!');
    }

    private function upimg($post, Request $request)
    {
        if($request->hasFile('filename')){
            foreach ($request->file('filename') as $file){
//                var_dump($file->getClientOriginalName());
                $img=$file ? time().'_'.rand() . '.'.$file->getClientOriginalExtension():'';
                $file->move(public_path('uploads'),$img);
                $img = imgModel::create(array(
                    'post_id' => $post->id,
                    'img'=>$img
                ));
            }
        }
    }

    public function showAd()
    {
        $posts=adModel::orderBy('id','DESC')->paginate(5);

        return view('post/showad', compact('posts'));
    }

    public function view($id){
        $post = adModel::where('id', $id)->firstOrFail();
        $ad= imgModel::where('post_id',$id)->get();
//        $ad= imgModel::all();

        return view('post/post', compact('post','ad'));
    }
    public function searchV()
    {
        return view('post/search');
    }
    public function search(){
        $title=$_POST['title'];
        $posts=adModel::where('title','like',$title.'%')->get();
        return view('post/search', compact('posts'));
    }
}
