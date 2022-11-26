<?php
class DB {
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'abdul';

    private $koneksi;

    function __construct()
    {
        return $this->koneksi = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
    }

    public function query($query)
    {
        return mysqli_query($this->koneksi, $query);
    }
    
    public function ambilSemuaData()
    {
        $data = $this->query("SELECT * FROM akun");
        $result = [];

        while($akun = mysqli_fetch_array($data))
        {
            array_push($result, $akun);
        }

        return $result;
    }

    public function cariId($id)
    {   
        $data = $this->query("SELECT * FROM akun WHERE id=$id");
        $result = [];

        while($akun = mysqli_fetch_array($data))
        {
            array_push($result, $akun);
        }

        return $result;
    }
}
?>