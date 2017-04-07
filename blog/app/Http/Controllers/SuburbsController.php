<?php

namespace App\Http\Controllers;

use App\Suburb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use App\Http\Requests;

class SuburbsController extends Controller
{
  public function index()
      {
        //GET /suburbs
        //list all suburban apartments
        $suburbs = Suburb::all();
        return Response::json($suburbs);
      }

  public function create (Request $request)
      {
        //POST /suburbs
        //create new suburban apartment
        Suburb::create($request->all());
        return Response::json(['created' => true]);
      }
  public function show($id)
      {
        //GET /suburbs/id
        //show a single suburban apartment
        $suburb=Suburb::find($id);
        return Response::json($suburb);
      }
  public function update (Request $request, $id)
      {
        //PUT /suburbs/id
        // update a single suburban apartment
        $suburb=Suburb::find($id);
        $suburb->update($request->all());
        return Response::json(['updated' => true]);
      }
  public function destroy($id)
      {
        //DELETE /suburbs/id
        // remove a single suburban apartment
        $suburb = Suburb::find($id);
        $suburb->delete();
        return Response::json(['deleted' => true]);
      }

}
