<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookmark;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    //
    public function store(Request $request)
    {

        $bookmark = new Bookmark();
        $bookmark -> task_id = $request->task_id;
        $bookmark -> user_id = Auth::user()->id;
        $bookmark -> save();

        return redirect('/index');

    }

    public function destroy(Request $request)
    {
        $bookmark = Bookmark::find($request->bookmark_id);
        $bookmark->delete();
        return redirect('/index');
    }

}
