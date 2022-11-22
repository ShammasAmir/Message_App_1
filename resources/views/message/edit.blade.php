@extends("layouts.main")

@section("page_title")
    Edit Message
@endsection

@section("page_h1")
    EDIT MESSAGE {{$message->id}}
@endsection

@section("main_content")
    <form action="{{route("message.update", $message)}}" method="POST">
        {{csrf_field()}}
        {{method_field("PUT")}}
        <div class="row">
            <div class="mb-3">
                <label for="message_topic" class="form-label">What is your topic ?</label>
                <input name="message_topic" type="text" class="form-control" id="Message_topic" placeholder="The subject of the message !" value="{{$message->message_topic}}">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <label for="message_text" class="form-label">Type your message here !</label>
                <input name="message_text" type="text" class="form-control" id="Message_text" placeholder="The text of the message !" value="{{$message->message_text}}">
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-2">
                <button type="submit" class="btn btn-warning">
                    Update message
                </button>
            </div>
            <div class="col-2">
                <a href="{{Route("message.index")}}" class="btn btn-primary">Cancel</a>
            </div>
        </div>
    </form>
@endsection
