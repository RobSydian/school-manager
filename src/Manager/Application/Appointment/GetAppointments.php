<?php

namespace Manager\Application\Appointment;

use Manager\Domain\ReadModel\AppointmentReadModel;

class GetAppointments
{
    private AppointmentReadModel $appointmentModel;

    public function __construct(AppointmentReadModel $appointmentModel)
    {
        $this->appointmentModel = $appointmentModel;
    }

    public function handle(): array
    {
        return $this->appointmentModel->getAppointments();
    }
}
