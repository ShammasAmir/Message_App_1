<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function index(Request $request)
    {
        // $messages = Message::query()->get();
        $messages_query = Message::query()->orderBy("updated_at","DESC")->orderBy("created_at","DESC")->get();
        
        if ($request->has("type")) {
            switch ($request->get("type")) {
                case "all":
                    $messages = $messages_query;
                    break;
                case "writer":
                    $messages = $messages_query->where("message_writer", "amir");
                    break;
                case "topic":
                    $messages = $messages_query->where("message_topic", "laramerce");
                    break;
                default:
                    $messages = $messages_query;
                    break;
            }
        } else {
            $messages = $messages_query;
        }

        // $messages = Message::all();
        return view("message.index",compact("messages","messages_query"));

    }

    public function create(Request $request)
    {
        return view("message.create");
    }

    public function store(Request $request)
    {
        Message::create($request->only(["message_writer" , "message_topic", "message_text"]));
        return redirect()->route("message.index");
    }

    public function show(Request $request, Message $message)
    {
        
    }

    public function edit(Request $request, Message $message)
    {
        return view("message.edit", compact("message"));
    }

    public function update(Request $request, Message $message)
    {
        $message->update($request->only(["message_topic", "message_text"]));
        return redirect()->route("message.index");
    }

    public function destroy(Request $request, Message $message)
    {
        $message->delete();
        return redirect()->route("message.index");
        
    }

    public function search_writer(Request $request, Message $message)
    {
        return view("message.search_writer", compact("message"));
    }

    public function search_topic(Request $request, Message $message)
    {
        return view("message.search_topic", compact("message"));
    }

    public function search_writer_result(Request $request, Message $message)
    {
        $favourite_writer=$request->message_writer;
        $messages = Message::query()->where("message_writer", $favourite_writer)->get();
        return view("message.index",compact("messages"));
    }

    public function search_topic_result(Request $request, Message $message)
    {
        $favourite_topic=$request->message_topic;
        $messages = Message::query()->where("message_topic", $favourite_topic)->get();
        return view("message.index",compact("messages"));
    }

    public function delete_confirm(Request $request, Message $message)
    {
        return view("message.delete_confirm", compact("message"));
    }

}
