<?php

namespace Manager\Domain\ReadModel;

interface AppointmentReadModel
{
    public function getAppointments(): array;
}
