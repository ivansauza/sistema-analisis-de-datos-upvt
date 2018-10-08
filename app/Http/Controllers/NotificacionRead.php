<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notificaciones\Notificables;

class NotificacionRead extends Controller
{
    public function __invoke($id)
    {
        $notification = auth()->user()->notifications()->findOrFail( $id );
        $notification->markAsRead();

        return redirect()->back();
    }
}
