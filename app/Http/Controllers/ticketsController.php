<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tickets;
use Illuminate\Support\Collection;
class ticketsController extends Controller
{
    public function getTickets()
    {
      $tickets_data = collect(DB::select('select created_at from tickets'))->unique();
      $tickets_type = collect(DB::select('select ticket_type from tickets'))->unique();
      return view('admin.tickets.tickets',['tickets_data'=>$tickets_data,'tickets_type'=>$tickets_type]);
    }

    public function resultTickets(Request $request)
    {
      $data = $request->data;
      $search = Tickets::where('created_at',$data)->orderBy('username')->get();
      $dataJson = json_decode($search);
      return $dataJson;
    }
}
