<?php
namespace App\Repository;
use App\Model\MessageModel;
use App\User;
use PhpParser\Builder;

class ChatRepository{

    private $user;

    public function __construct(User $user,MessageModel $message)
    {
        $this->user = $user;
        $this->message = $message;
    }
    public function getChat(int $userId){
        return $this->user->newQuery()
            ->select('name','id')
            ->where('id','!=',$userId)
            ->get();
    }
    public function createMessage(string $content, int $from , int $to){
        return $this->message->newQuery()->create([
           'content' => $content,
            'from_id' => $from,
            'to_id' => $to
        ]);
    }
    public function getMessagesFor(int $from, int $to){

        return $this->message->newQuery()
            ->whereRaw("((from_id = $from AND to_id = $to) OR (from_id = $to AND to_id =$from ))")
            ->orderBy('created_at','DESC');

    }

}