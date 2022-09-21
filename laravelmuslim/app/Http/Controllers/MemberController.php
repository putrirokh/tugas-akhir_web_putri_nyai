<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use DB;
use Validator,File,Redirect,Response;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_member = DB::table('users')->get();
        return view('member.index', compact('ar_member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('member.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            // mendefinisikan rule validasi data
            [
                'name' => 'required|max:255',
                'email' => 'email',
                'isactive' => 'required',
                'role' => 'required',
                'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ],
            // menampilkan pesan error jika salah input
            [
                'name.required' => 'Nama wajib di isi',
                'name.max' => 'Nama maximal 255 karakter',
                'email.email'=>'email harus sesuai format',
                'isactive.required' => 'Isactive Wajib di isi',
                'role.required' => 'Role wajib di isi',
                'foto.required' => 'foto harus diisi',
                'foto.max'=> 'foto maximal 2048'
            ]
            );

            $foto = DB::table('users')->select('member')->where('id',$id)->get();
            foreach($foto as $f){
                $namaFile = $f->foto;
            }
            if(!empty($request->foto)){
                //hapus fisik file cover lama di folder img/pengarang
                File::delete(public_path('img/member/'.$namaFile));
                //proses upload file cover baru
                $request->validate([
                    'file' => 'image|mimes:jpg,jpeg,png|max:2048',
                ]);
                $fileName = $request->name.'.'.$request->foto->extension();  
                $request->foto->move(public_path('img/member'), $fileName);
            }
            else{ //tidak ganti cover, nama file tetap foto yg lama
                $fileName = $namaFile;
            }
    
            DB::table('user')->where('id',$id)->update(
                //kiri fieldname, kanan request dari name form
                [
                    'name'=>$request->nama,
                    'email'=>$request->email,
                    'password'=>$request->password,
                    'isactive'=>$request->isactive,
                    'foto'=>$fileName,
                    'role'=>$role,
                ]
                );
                // landing page
                return redirect('/member'.'/'.$id);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_member = DB::table('users')
        ->where('id','=',$id)
        ->get();
        return view('member.show', compact('ar_member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Member::where('id', $id)->get();
        return view ('member.form_edit', compact('data'));
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
        $validasi = $request->validate(

        [
            'name' => 'required|max:255',
            'email' => 'email',
            'isactive' => 'required',
            'role' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ],
        // menampilkan pesan error jika salah input
        [
            'name.required' => 'Nama wajib di isi',
            'name.max' => 'Nama maximal 255 karakter',
            'email.email'=>'email harus sesuai format',
            'isactive.required' => 'Isactive Wajib di isi',
            'role.required' => 'Role wajib di isi',
            'foto.required' => 'foto harus diisi',
            'foto.max'=> 'foto maximal 2048'
        ]
        );

        $foto = DB::table('users')->select('member')->where('id',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        if(!empty($request->foto)){
            //hapus fisik file cover lama di folder img/pengarang
            File::delete(public_path('img/member/'.$namaFile));
            //proses upload file cover baru
            $request->validate([
                'file' => 'image|mimes:jpg,jpeg,png|max:2048',
            ]);
            $fileName = $request->name.'.'.$request->foto->extension();  
            $request->foto->move(public_path('img/member'), $fileName);
        }
        else{ //tidak ganti cover, nama file tetap foto yg lama
            $fileName = $namaFile;
        }
        DB::table('users')->where('id',$id)->update(
                //kiri fieldname, kanan request dari name form
                [
                    'name'=>$request->nama,
                    'email'=>$request->email,
                    'password'=>$request->password,
                    'isactive'=>$request->isactive,
                    'foto'=>$fileName,
                    'role'=>$role,
                ]
                );
                // landing page
                return redirect('/member'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        // landing page
        return redirect('/member');
    }
    public function profile()
    {
        $ar_member = DB::table('users')->get();
        return view('member.profile', compact('ar_member'));
    }
}
