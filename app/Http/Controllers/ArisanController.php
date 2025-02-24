<?php

namespace App\Http\Controllers;

use App\Models\Arisan;
use App\Models\ArisanMember;
use Illuminate\Http\Request;

class ArisanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'total_amount' => 'required|numeric',
            'rules' => 'required'
        ]);

        $arisan = Arisan::create($request->all());
        return response()->json($arisan, 201);
    }

    public function addMember(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);

        $arisanMember = ArisanMember::create([
            'arisan_id' => $id,
            'user_id' => $request->user_id,
            'status' => 'pending'
        ]);

        return response()->json($arisanMember, 201);
    }
}
