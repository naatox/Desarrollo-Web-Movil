<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::get();
        return response()->json($appointments,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $fields=$request->validate([
                'name'=>'required',
                'date'=>'nullable',
                'symptoms'=>'nullable',
                'user_id'=>'required'
            ]);

            $appointment=Appointment::create([
                'name'=>$fields['name'],
                'date'=>$fields['date'],
                'symptoms'=>$fields['symptoms'],
                'user_id'=>$fields['user_id']
            ]);
            DB::commit();
            return response()->json($appointment,200);
        }catch (\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        try{
            return response()->json($appointment,200);
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        try{
            DB::beginTransaction();
            $appointment = Appointment::find($appointment->id);
            $field = $request->validated([
                'name'=>'required',
                'date'=>'nullable',
                'symptoms'=>'nullable',
                'user_id'=>'required'
            ]);
            $appointment->update($field);
            DB::commit();
            return response()->json($appointment,200);
        }catch (\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        try{
            DB::beginTransaction();
            $appointment->delete();
            DB::commit();
            return response()->json('delete success',200);
        }catch (\Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());

        }
    }
}
