<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Book;
use App\Models\User;
Use Alert;
use File;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.book', compact('books'));
    }

    public function search(Request $request)
    {
        $books = Book::where('judul', 'LIKE', '%'.$request->search.'%')->orWhere('ISBN', 'LIKE', '%'.$request->search.'%')->get();
        return view('admin.book', compact('books'));
    }

    public function homesearch(Request $request)
    {
        $books = Book::where('judul', 'LIKE', '%'.$request->search.'%')->orWhere('ISBN', 'LIKE', '%'.$request->search.'%')->get();
        $featured = Book::inRandomOrder()->paginate(2);
        return view('user.home', compact('books','featured'));
    }
    
    public function perbarui($id)
    {
        $books = Book::find($id);
        return view('admin.updatebook', compact('books'));
    }

    public function home()
    {
        $books = Book::all();
        $featured = Book::inRandomOrder()->paginate(2);
        return view('user.home', compact('books','featured'));
    }

    public function detail($id)
    {
        $books = Book::findOrFail($id);
        return view('user.detail', compact('books'));
    }

    public function download($ebook)
    {
        $books = Book::where('ebook', $ebook)->first();
        // return response()->json($books);
        return response()->download('ebooks/'.$books->ebook);
    }
    public function overview()
    {
        $books = Book::all()->count();
        $users = User::all()->count();;
        return view('admin.overview', compact('books', 'users'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'tahun' => 'required|integer|min:0',
            'penulis' => 'required',
            'penerbit' => 'required',
            'kategori' => 'required',
            'sinopsis' => 'required',
            'jumlah_halaman' => 'required|integer|min:0',
            'ISBN' => 'required',
            'cover' => 'required|image',
            'ebook' => 'required|mimes:pdf',
        ]);

        // Upload cover
        $coverName = Str::random(40) . '.' . $request->file('cover')->getClientOriginalExtension();
        $cover = $request->file('cover');
        $cover->move(public_path('covers'), $coverName);
        // Upload ebook
        $ebookName = Str::random(40) . '.' . $request->file('ebook')->getClientOriginalExtension();
        $ebook = $request->file('ebook');
        $ebook->move(public_path('ebooks'), $ebookName);

        $book = Book::create([
            'judul' => $validated['judul'],
            'tahun' => $validated['tahun'],
            'penulis' => $validated['penulis'],
            'penerbit' => $validated['penerbit'],
            'kategori' => $validated['kategori'],
            'sinopsis' => $validated['sinopsis'],
            'jumlah_halaman' => $validated['jumlah_halaman'],
            'ISBN' => $validated['ISBN'],
            'cover' => $coverName,
            'ebook' => $ebookName,
        ]);
        Alert::success('Succes', 'Buku berhasil ditambahkan!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::find($id);
        return view('admin.showbook', compact('books'));
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'tahun' => 'required|integer|min:0',
            'penulis' => 'required',
            'penerbit' => 'required',
            'kategori' => 'required',
            'sinopsis' => 'required',
            'jumlah_halaman' => 'required|integer|min:0',
            'ISBN' => 'required',
        ]);
        $books = Book::where('id', $request->id)->update([
            'judul' => $validated['judul'],
            'tahun' => $validated['tahun'],
            'penulis' => $validated['penulis'],
            'penerbit' => $validated['penerbit'],
            'kategori' => $validated['kategori'],
            'sinopsis' => $validated['sinopsis'],
            'jumlah_halaman' => $validated['jumlah_halaman'],
            'ISBN' => $validated['ISBN'],
          ]);
          Alert::success('Succes', 'Buku berhasil Diperbarui!');
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::where('id',$id)->first();
        File::delete('covers/'.$book->cover);
        File::delete('ebooks/'.$book->ebook);
        // hapus data
        Book::where('id',$id)->delete();
        return redirect()->back();
    }
}
