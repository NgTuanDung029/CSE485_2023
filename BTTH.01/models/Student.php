<?php

declare(strict_types=1);

namespace Models;

class Student
{
    public string $full_name;
    public string $class;
    public string $code;
    public string $address;
    public string $phone_num;

    public function __construct(string $full_name, string $class, string $code, string $address, string $phone_num)
    {
        $this->full_name = $full_name;
        $this->class = $class;
        $this->code = $code;
        $this->address = $address;
        $this->phone_num = $phone_num;
    }
}
