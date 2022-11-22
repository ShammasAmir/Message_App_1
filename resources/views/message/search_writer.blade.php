
@extends("layouts.main")


@section("page_title")
    Search Messages By Writer
@endsection


@section("page_h1")
    SEARCH BY WRITER !
@endsection


@section("main_content")
<form action="{{route("message.search_writer_result")}}" method="POST">
    {{csrf_field()}}

    <div class="row">
        <div class="mb-3">
            <label for="message_writer" class="form-label">Who is your favourite writer ?</label>
            <input name="message_writer" type="text" class="form-control" id="Message_writer" placeholder="Type here !">
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