<?php

namespace Manager\Application\Appointment\Query;

use DateTime;
use Manager\Domain\ValueObject\DoctorName;
use Manager\Domain\ValueObject\PatientName;

class AppointmentQuery
{
    private string $date;
    private string $center;
    private string $patientName;
    private string $doctorName;

    public function __construct(
        string $date,
        string $center,
        string $patientName,
        string $doctorName
    ) {
        $this->date = $date;
        $this->center = $center;
        $this->patientName = $patientName;
        $this->doctorName = $doctorName;
    }

    public function date(): string
    {
        return $this->date;
    }

    public function center(): string
    {
        return $this->center;
    }

    public function patientName(): PatientName
    {
        return new PatientName($this->patientName);
    }

    public function doctorName(): DoctorName
    {
        return new DoctorName($this->doctorName);
    }
}
