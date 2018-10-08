<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionUnread extends Controller
{
    public function __invoke($id)
    {
        $notification = auth()->user()->notifications()->findOrFail( $id );
        $notification->read_at = null;
        $notification->save();

        return redirect()->back();
    }
}
