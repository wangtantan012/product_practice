<?php

namespace App\Http\Controllers;

use App\Models\messageBoard;
use App\Models\responseBoard;
use Illuminate\Http\Request;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = messageBoard::get();
        $responses = responseBoard::get();
        return view('frontend.messageBoard', compact('messages', 'responses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        if ($request->id == null) {
            messageBoard::create([
                'message' => $request->msg,
            ]);
        }else{
            responseBoard::create([
                'respond' => $request->resp,
                'message_id' => $request->id,
            ]);
        }
        return redirect(route('message.index'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // @dd($request);
        $messages = messageBoard::find($id);
        $responses = responseBoard::find($id);

        if ($responses == null ) {
            $messages->update([
            'message' => $request->msg,
        ]);
        } else {
            $responses->update([
            'respond' => $request->resp ?? '',
        ]);
        }
        return redirect(route('message.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $messages = messageBoard::find($id);
        $responses = responseBoard::find($id);
        $result = 'success';
        if ($responses == null) {
            foreach( $messages->responseBoard as $reply) {
                $reply->delete();
            }
            $messages->delete();
        } elseif ($messages == null && $responses !== null) {
            // dd(123);
            $responses->delete();
        } else{
            $result = 'fail';
        }
        return redirect(route('message.index',['result' => $result]));
    }

}
