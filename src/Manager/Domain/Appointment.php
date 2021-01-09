<?php

namespace Manager\Domain;

use Datetime;
use Exception;
use Manager\Domain\ValueObject\PatientName;
use Manager\Domain\ValueObject\DoctorName;

class Appointment
{
    private string $date;
    private string $center;
    private PatientName $patientName;
    private DoctorName $doctorName;

    public function __construct(
        string $date,
        string $center,
        PatientName $patientName,
        DoctorName $doctorName
    ) {
        $this->date = $date;
        $this->center = $center;
        $this->patientName = $patientName;
        $this->doctorName = $doctorName;
    }

    /**
     * @throws Exception
     */
    public function date(): Datetime
    {
        if (strchr($this->date, '/')) {
            throw new Exception('Dates must have the following format: YYYY-MM-DD');
        }

        return new Datetime($this->date);
    }

    public function center(): string
    {
        return $this->center;
    }

    public function patientName(): PatientName
    {
        return $this->patientName;
    }

    public function doctorName(): DoctorName
    {
        return $this->doctorName;
    }
}
