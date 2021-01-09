<?php

namespace Manager\Application\Appointment;

use Manager\Application\Appointment\Query\AppointmentQuery;
use Manager\Domain\Appointment;
use Manager\Domain\ValueObject\DoctorName;
use Manager\Domain\ValueObject\PatientName;

// ********  TODO  **********
class GetAppointment
{
    public function handle(AppointmentQuery $appointmentQuery)
    {
        return [
            new Appointment(
                $appointmentQuery->date(),
                $appointmentQuery->center(),
                $appointmentQuery->patientName(),
                $appointmentQuery->doctorName()
            )
        ];
    }
}
