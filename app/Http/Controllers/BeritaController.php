<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;
    protected $model = Berita::class;
    protected $route = 'news';
    public function index()
    {
        $data = Berita::paginate(10);
        return view('news', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formberita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->judul,'-');
        $data = $request->all();
        $file = $request->file('file');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("gambar"), $new_name);
        $data['file'] = $new_name;
        $data['slug'] = $slug;
        $data = Berita::create($data);
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
        $berita = Berita::all()->take(5);
        $data = Berita::where('slug',$id)->first();
        return view('shownews', compact('data','berita'));
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
        return view('editberita', compact('data'));
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
        $file = $request->file('file');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("gambar"), $new_name);
        $data['file'] = $new_name;
        $data = $this->model::find($id);
        $data->judul=$request->judul;
        $data->kategori=$request->kategori;
        $data->isi=$request->isi;
        $data->file=$new_name;
        $data->slug=Str::of('judul')->slug('-');
        $data->sumber=$request->sumber;
        $data->editor=$request->editor;
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
