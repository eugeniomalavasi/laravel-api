<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(StoreLeadRequest $request)
    {
        $data = $request->validated();
        $newLead = new Lead();
        $newLead->fill($data);
        $newLead->save();
        return response()->json([
            'results' => 'ok'
        ]);
    }
}
