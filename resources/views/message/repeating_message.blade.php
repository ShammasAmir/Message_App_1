<div class="row mb-2">
    <div class="col-1">{{$message->id}}</div>
    <div class="col-2">{{$message->message_writer}}</div>
    <div class="col-2">{{$message->message_topic}}</div>
    <div class="col-5">{{$message->message_text}}</div>

    
    <div class="col-2">
        <div class="row">
            <div class="col">
                <form action="{{route("message.destroy", $message)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field("DELETE")}}
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
            <div class="col">
                <a href="{{route("message.edit", $message)}}" class="btn btn-sm btn-warning">Edit</a>
            </div>
        </div>
    </div>
</div>
