
@extends("layouts.main")


@section("page_title")
    Welcome Page
@endsection


@section("page_h1")
    WELCOME !
@endsection


@section("main_content")
    <div class="row">
        <h6>Please click the button to enter the app !</h6>
        <div><a class="btn btn-primary" href="{{Route("message.index")}}">ENTER</a></div>
    </div>
@endsection