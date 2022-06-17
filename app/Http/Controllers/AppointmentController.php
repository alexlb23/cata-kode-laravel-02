<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreAppointment;
use App\Model\Appointment;
use App\Services\AppointmentService;
use Throwable;

class AppointmentController extends Controller
{

    public function create()
    {
        return view('appointment.create');
    }

    public function store(StoreAppointment $request, AppointmentService $service)
    {
        $params = [];
        try {
            $appointment = $service->create($request->validated());
            $params['appointment'] = $appointment;
        } catch (Throwable $e) {
            $params['error'] = $e->getMessage();
        }

        return view('appointment.create', $params);
    }


    public function show(Appointment $appointment)
    {
        return view('appointment.show', ['appointment' => $appointment]);
    }
}
