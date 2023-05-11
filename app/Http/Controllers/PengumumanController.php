<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;
    protected $model = Pengumuman::class;
    protected $route = 'info';
    public function index()
    {
        $info = Pengumuman::orderBy('updated_at','DESC')->paginate(10);
        return view('pengumuman',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formpengumuman');
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
        //thumbnail
        $file = $request->file('thumbnail');
        $nama_thumbnail = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("screenshot"), $nama_thumbnail);
        $data['thumbnail'] = $nama_thumbnail;
        //file
        $file = $request->file('file');
        $nama_file = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("dokumen"), $nama_file);
        $data['file'] = $nama_file;
        $data = Pengumuman::create($data);
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
        $data = Pengumuman::findOrFail($id);
        $pengumuman = Pengumuman::all()->take('5');
        return view('showpengumuman', compact('data','pengumuman'));
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
        return view('editpengumuman', compact('data'));
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
        $foto = $request->file('thumbnail');
        $nama_thumbnail = rand() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path("screenshot"), $nama_thumbnail);
        $data['thumbnail'] = $nama_thumbnail;
        $file = $request->file('file');
        $nama_file = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("dokumen"), $nama_file);
        $data['file'] = $nama_file;
        $data = $this->model::find($id);
        $data->judul=$request->judul;
        $data->kategori=$request->kategori;
        $data->isi=$request->isi;
        $data->thumbnail=$nama_thumbnail;
        $data->file=$nama_file;
        $data->sumber=$request->sumber;
        $data->update();
        return redirect(route($this->route . '.create'));
    }

    public function anyData(Request $request)
    {
        return DataTables::of($this->model::query())
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                $edit = '<a href="' . route($this->route . '.edit', $data->id) . '" class="btn btn-primary">Edit</a>';
                return $edit . '&nbsp' . $del;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

}
