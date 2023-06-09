<?php

namespace App\Http\Controllers;

use App\Models\TentangDesa;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;
    protected $model = TentangDesa::class;
    protected $route = 'about';
     public function index()
    {
        $aboutdesa = TentangDesa::orderBy('created_at', 'DESC')->first();
        return view('tentangdesa', compact('aboutdesa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formtentangdesa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('foto_desa');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("foto_tentang"), $new_name);
        $data['foto_desa'] = $new_name;
        $data = TentangDesa::create($data);
        return redirect()->back()->with(['success' => 'Data berhasil disimpan.']);
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
        $data = $this->model::find($id);
        return view('edittentang', compact('data'));
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
        $file = $request->file('foto_desa');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("foto_tentang"), $new_name);
        $data['foto_desa'] = $new_name;
        $data = $this->model::find($id);
        $data->isi=$request->isi;
        $data->foto_desa=$new_name;
        $data->update();
        return redirect(route($this->route . '.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function anyData(Request $request)
    {
        return DataTables::of($this->model::query())
            ->addColumn('foto_desa', function ($data) {
                $del = '<img src="' . asset('foto_tentang/' . $data->foto_desa) . '" class="col-sm-14 p-5 p-sm-0 pe-sm-15">';
                return  $del;
            })
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                $edit = '<a href="' . route($this->route . '.edit', $data->id) . '" class="btn btn-primary">Edit</a>';
                return $edit . '&nbsp' . $del;
            })
            ->rawColumns(['foto_desa', 'action'])
            ->make(true);
    }
}
