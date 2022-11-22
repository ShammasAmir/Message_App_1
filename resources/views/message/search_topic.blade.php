
@extends("layouts.main")


@section("page_title")
    Search Messages By Topic
@endsection


@section("page_h1")
    SEARCH BY TOPIC !
@endsection


@section("main_content")
<form action="{{route("message.search_topic_result")}}" method="POST">
    {{csrf_field()}}

    <div class="row">
        <div class="mb-3">
            <label for="message_topic" class="form-label">What is your favourite topic ?</label>
            <input name="message_topic" type="text" class="form-control" id="Message_topic" placeholder="Type here !">
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <button type="submit" class="btn btn-success">
                SEARCH messages
            </button>
        </div>
        <div class="col-2">
            <a href="{{Route("message.index")}}" class="btn btn-primary">Cancel</a>
        </div>    
    </div>
</form>
@endsection