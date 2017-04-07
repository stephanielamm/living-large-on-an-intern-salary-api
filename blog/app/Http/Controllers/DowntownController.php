<?php

namespace App\Http\Controllers;

use App\Downtown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use App\Http\Requests;

class DowntownController extends Controller
{
  public function index()
      {
        //GET /downtown
        //list all downtown apartments
        $downtowns = Downtown::all();
        return Response::json($downtowns);
      }

  public function create (Request $request)
      {
        //POST /downtown
        //create new downtown apartment
        Downtown::create($request->all());
        return Response::json(['created' => true]);
      }
  public function show($id)
      {
        //GET /downtown/id
        //show a single downtown apartment
        $downtown=Downtown::find($id);
        return Response::json($downtown);
      }
  public function update (Request $request, $id)
      {
        //PUT /downtown/id
        // update a single downtown apartment
        $downtown=Downtown::find($id);
        $downtown->update($request->all());
        return Response::json(['updated' => true]);
      }
  public function destroy($id)
      {
        //DELETE /downtown/id
        // remove a single downtown apartment
        $downtown = Downtown::find($id);
        $downtown->delete();
        return Response::json(['deleted' => true]);
      }
}
