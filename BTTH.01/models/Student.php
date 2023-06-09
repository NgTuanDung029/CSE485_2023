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

    public function __construct(string $code, string $full_name, string $class, string $address, string $phone_num)
    {
        $this->code = $code;
        $this->full_name = $full_name;
        $this->class = $class;
        $this->address = $address;
        $this->phone_num = $phone_num;
    }
    public function getFullName()
    {
        return $this->full_name;
    }
    public function setFullName(string $full_name)
    {
        $this->full_name = $full_name;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function setClass(string $class)
    {
        $this->class = $class;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setCode(string $code)
    {
        $this->code = $code;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress(string $address)
    {
        $this->address = $address;
    }
    public function getPhone()
    {
        return $this->phone_num;
    }
    public function setPhone(string $phone_num)
    {
        $this->phone_num = $phone_num;
    }
}
