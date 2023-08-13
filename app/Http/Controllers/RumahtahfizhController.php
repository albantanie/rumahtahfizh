<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rumahtahfizh;


class RumahtahfizhController extends Controller
{
    public function index()
    {
        $rumahTahfizhList = RumahTahfizh::all();
        return response()->json($rumahTahfizhList);
    }

    public function show($id)
    {
        $rumahTahfizh = RumahTahfizh::find($id);
        
        if (!$rumahTahfizh) {
            return response()->json(['message' => 'Rumah Tahfizh not found'], 404);
        }
        
        return response()->json($rumahTahfizh);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'pemilik' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $rumahTahfizh = RumahTahfizh::create($request->all());

        return response()->json($rumahTahfizh, 201);
    }

}
