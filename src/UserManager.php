<?php
namespace src;
class UserManager
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }


    function getDatatoFile()
    {
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson, true);
    }

    function saveDatatoFile($newData)
    {
        // chuyen array -> json
        $dataJson = json_encode($newData);
        file_put_contents($this->filePath, $dataJson);
    }

    function getAll(): array
    {
        $data = $this->getDatatoFile();
        $users = [];
        foreach ($data as $item) {
            $user = new User($item);
            $users[] = $user;
        }
        return $users;
    }

    function deletaUser($index)
    {
        $data = $this->getDatatoFile();
        array_splice($data, $index, 1);
        $this->saveDatatoFile($data);
    }

    function addUser($item)
    {
        $data = $this->getDatatoFile();
        array_push($data, $item);
        $this->saveDatatoFile($data);
    }

    function viewUser($index): object
    {
       return $this->getAll()[$index];
    }

    function editUser($object,$index){
        $data = $this->getDatatoFile();
        $data[$index]=$object;
        $this->saveDatatoFile($data);
    }
}