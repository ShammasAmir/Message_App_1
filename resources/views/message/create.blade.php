
@extends("layouts.main")


@section("page_title")
    Create New Message
@endsection


@section("page_h1")
    CREATE MESSAGE !
@endsection


@section("main_content")
<form action="{{route("message.store")}}" method="POST">
    {{csrf_field()}}
    <div class="row">
        <div class="mb-3">
            <label for="message_writer" class="form-label">What is your name ?</label>
            <input name="message_writer" type="text" class="form-control" id="Message_writer" placeholder="The person who writes the message !">
        </div>
    </div>
    <div class="row">
        <div class="mb-3">
            <label for="message_topic" class="form-label">What is your topic ?</label>
            <input name="message_topic" type="text" class="form-control" id="Message_topic" placeholder="The subject of the message !">
        </div>
    </div>
    <div class="row">
        <div class="mb-3">
            <label for="message_text" class="form-label">Type your message here !</label>
            <input name="message_text" type="text" class="form-control" id="Message_text" placeholder="The text of the message !">
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <button type="submit" class="btn btn-success">
                CREATE message
            </button>
        </div>
        <div class="col-2">
            <a href="{{Route("message.index")}}" class="btn btn-primary">Cancel</a>
        </div>    
    </div>
</form>
@endsection