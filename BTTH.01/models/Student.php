<?php 
declare (strict_types = 1);

class Student {
    public string $full_name;
    public string $class;
    public string $code;
    private string $address;
    private string $phone_num;
    
    public function __construct(string $full_name, string $class, string $code, string $address, string $phone_num)
    {
        $this->full_name = $full_name;
        $this->class = $class;
        $this->code = $code;
        $this->address = $address;
        $this->phone_num = $phone_num;
    }

    public function getFullName(): string
    {
        return $this->full_name;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhoneNumber(): string
    {
        return $this->phone_num;
    }

}

?>