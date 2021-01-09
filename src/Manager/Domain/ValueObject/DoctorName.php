<?php

namespace Manager\Domain\ValueObject;

use Exception;

class DoctorName
{
    public const DOCTOR_NAMES = ['Robby', 'Rob', 'Robert', 'Sam'];

    private string $value;

    public function __construct(string $value)
    {
        $this->checkIsValid($value);

        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    /**
     *  @throws Exception
     */
    public function checkIsValid($value): void
    {
        if (!in_array($value, self::DOCTOR_NAMES)) {
            throw new Exception('Name not found');
        }
    }
}