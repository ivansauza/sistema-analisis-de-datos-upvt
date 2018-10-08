<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionDelete extends Controller
{
    public function __invoke($id)
    {
        $notification = auth()->user()->notifications()->findOrFail( $id );
        $notification->delete();

        return redirect()->back();
    }
}
