
@extends("layouts.main")


@section("page_title")
    Message List Page
@endsection


@section("page_h1")
    LIST OF MESSAGES !
@endsection


@section("main_content")
    <div class="row">
        @if(count($messages)==0)
            <h6>Your list is empty ! Add some messages !</h6>
        @else
            
            <div class="row mb-2">
                <div class="col">
                    <a href="{{route("message.index")}}?type=all" class="btn btn-sm btn-primary">All messages</a>
                </div>
                
                <div class="col">
                    <a href="{{route("message.index")}}?type=writer" class="btn btn-sm btn-primary">Only writer = amir</a>
                </div>

                <div class="col">
                    <a href="{{route("message.index")}}?type=topic" class="btn btn-sm btn-primary">Only topic = laramerce</a>
                </div>

            </div>


            <div class="row mb-2">
                <div class="col-1"><h5>#</h5></div>
                <div class="col-2"><h5>Writer</h5></div>
                <div class="col-2"><h5>Topic</h5></div>
                <div class="col-5"><h5>Text</h5></div>
                <div class="col-2"><h5>Actions</h5></div>
            </div>

            <hr>
        
            @foreach($messages as $message)
                @include("message.repeating_message", compact("message"))
            @endforeach
        @endif
    </div>

    <div class="row">
        <div class="col-3">
            <a href="{{Route("message.create")}}" class="btn btn-success">ADD a message</a>
        </div>
        <div class="col-3">
            <a href="{{Route("message.search_writer")}}" class="btn btn-success">Search by writer</a>
        </div>
        <div class="col-3">
            <a href="{{Route("message.search_topic")}}" class="btn btn-success">Search by topic</a>
        </div>
    </div>
@endsection