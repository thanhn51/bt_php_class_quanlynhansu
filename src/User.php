<?php
namespace src;
class User
{
    public string $name;
    public string $birthday;
    public string $address;
    public string $job;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->birthday = $data['birthday'];
        $this->address = $data['address'];
        $this->job = $data['job'];
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getjob(): mixed
    {
        return $this->job;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed|string $address
     */
    public function setAddress(mixed $address): void
    {
        $this->address = $address;
    }

    /**
     * @param mixed|string $birthday
     */
    public function setBirthday(mixed $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @param mixed|string $job
     */
    public function setJob(mixed $job): void
    {
        $this->job = $job;
    }
}