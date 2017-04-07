<?php

namespace App\Http\Controllers;

use App\Midtown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use App\Http\Requests;

class MidtownController extends Controller
{
  public function index()
      {
        //GET /midtown
        //list all midtown apartments
        $midtowns = Midtown::all();
        return Response::json($midtowns);
      }

  public function create (Request $request)
      {
        //POST /midtown
        //create new midtown apartment
        Midtown::create($request->all());
        return Response::json(['created' => true]);
      }
  public function show($id)
      {
        //GET /midtown/id
        //show a single midtown apartment
        $midtown=Midtown::find($id);
        return Response::json($midtown);
      }
  public function update (Request $request, $id)
      {
        //PUT /midtown/id
        // update a single midtown apartment
        $midtown=Midtown::find($id);
        $midtown->update($request->all());
        return Response::json(['updated' => true]);
      }
  public function destroy($id)
      {
        //DELETE /midtown/id
        // remove a single midtown apartment
        $midtown = Midtown::find($id);
        $midtown->delete();
        return Response::json(['deleted' => true]);
      }

}
