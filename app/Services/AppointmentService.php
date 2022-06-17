<?php

namespace App\Services;

use App\Model\Appointment;
use Carbon\Carbon;
use Throwable;

class AppointmentService
{
    /**
     * @throws Throwable
     */
    public function create(array $data): Appointment
    {
        $data['date'] = Carbon::parse($data['date'], $data['timezone'])->setTimezone('UTC');
        $appointment = new Appointment($data);
        $appointment->saveOrFail();

        return $appointment;
    }



}