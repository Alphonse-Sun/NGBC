<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvposController extends Controller
{
    //
    public function index(Request $request)
    {
        $mod = new Banners();
        $data = $mod->orderBy('id', 'desc')->paginate(config('admin.page-size'));

        return view('admin.advpos.index', compact('data'));
    }
    public function create()
    {
        return view('admin.advpos.create');
    }
    public function store(Request $request)
    {
        /*$validator = $this->verify($request, 'advpos.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }*/

        $data = $request->all();

        Banners::create($data);

        return responseSuccess('', '', route('advpos.index'));

    }
    public function edit($id)
    {
        $data = Banners::findOrFail($id);

        return view('admin.advpos.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        /* $validator = $this->verify($request, 'advpos.store');

         if ($validator->fails())
         {
             $messages = $validator->messages()->toArray();
             return responseWrong($messages);
         }*/

        $mod = Banners::findOrFail($id);

        $mod->update($request->all());

        return responseSuccess('', '', route('advpos.index'));

    }
    public function destroy($id)
    {
        Banners::destroy($id);

        return respS();
    }
}
