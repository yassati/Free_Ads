<div class="col-md-3">
    <div class="list-group">
        @foreach($users as $user)
            <a class="list-group-item" href="{{route('show',$user->id)}}">{{$user->name}}</a>
        @endforeach
    </div>
</div>