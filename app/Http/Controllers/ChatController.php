<?php

namespace App\Http\Controllers;
include '../app/repository/ChatRepository.php';
use App\Repository\ChatRepository;
use App\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    private $r;
    private $auth;
    public function __construct(ChatRepository $chatRepository, AuthManager $auth)
    {
        $this->r=$chatRepository;
        $this->auth=$auth;
    }

    public function index(){

        return view('chat/index', ['users' => $this->r->getChat($this->auth->user()->id)]);
    }
    public function show(User $user){
        return view('chat/show', ['users' => $this->r->getChat($this->auth->user()->id),
            'user' => $user,
            'messages'=>$this->r->getMessagesFor($this->auth->user()->id,$user->id)->get()->reverse()
        ]);
    }
    public function store(User $user, Request $request){
        $this->r->createMessage(
           $request->get('content'),
            $this->auth->user()->id,
            $user->id
        );
        return redirect(route('show',['id'=>$user->id]));
    }
}
