<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('hotel')->get(); // sekalian load relasi hotel
        return view('rooms.index', compact('rooms'));
    }
}
