<?php

namespace App\Http\Controllers\Admin;

use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $sld_prefix = explode('.',$_SERVER['HTTP_HOST']);
        if($sld_prefix[0] == 'tadmin'){
            $url = 'http://tphp.'.$sld_prefix[1].'.'.$sld_prefix[2];
        }else{
            $url = 'http://www.'.$sld_prefix[1].'.'.$sld_prefix[2];
        }


        $mod = new Template();

        $client_type = $request->get('client_type');

        if($request->has('client_type')){
            $mod = $mod->where('client_type',$client_type);
        }
        $data = $mod->orderBy('sort','desc')->paginate(config('admin.page-size'));

        return view('admin.template.index',compact('data','client_type','url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        if($data['name'] == ''){
            return responseWrong('请填写名称');
        }
        if($data['template_name'] == ''){
            return responseWrong('请填写模板路径');
        }
        if(!$request->has('pic') || $request->get('pic') == ''){
            return responseWrong('请选择上传图片');
        }
        $data['sort'] = 1;
        Template::create($data);

        return responseSuccess('', '', route('template.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Template::findOrFail($id);
        return view('admin.template.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $mod = Template::findOrFail($id);

        $mod->update($data);

        return responseSuccess('', '', route('template.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function set(Request $request,$id,$client_type)
    {
        //$data = ['status'=>1];
        Template::where('client_type',$client_type)->update(['status'=>1]);
        Template::where('id',$id)->update(['status'=>2]);
        return respS();
    }
}
