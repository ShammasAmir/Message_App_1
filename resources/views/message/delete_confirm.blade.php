@extends("layouts.main")


@section("page_title")
    Message Delete Confirm Page
@endsection


@section("page_h1")
    DELETE  CONFIRMATION !
@endsection


@section("main_content")
    <div class="row mb-5 mt-5">
        <h3>You are deleting this message ! Are you sure ?</h3>
    </div>

    <div class="row mb-2">
        <div class="col-1"><h5>#</h5></div>
        <div class="col-2"><h5>Writer</h5></div>
        <div class="col-2"><h5>Topic</h5></div>
        <div class="col-5"><h5>Text</h5></div>
    </div>

    <div class="row mb-5">
        <div class="col-1">{{$message->id}}</div>
        <div class="col-2">{{$message->message_writer}}</div>
        <div class="col-2">{{$message->message_topic}}</div>
        <div class="col-5">{{$message->message_text}}</div>
    </div>

    <div class="row">
        <div class="col-2">
            <form action="{{route("message.destroy", $message)}}" method="POST">
                {{csrf_field()}}
                {{method_field("DELETE")}}
                <button type="submit" class="btn btn-sm btn-danger">YES</button>
            </form>
        </div>
        
        <div class="col-2">
            <a href="{{route("message.index")}}" class="btn btn-warning">NO</a>
        </div>

    </div>
@endsection