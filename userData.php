<?php
class UserData {
    private $name;
    private $email;
    private $gender;
    private $date;

    public function __construct($name, $email, $gender, $date) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->date = $date;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getDate() {
        return $this->date;
    }


}

$user = new UserData('bimasandi', 'sandi@example.com', 'Laki-Laki', '2023-11-21');
echo "Nama: " . $user->getName() . "<br>";
echo "Email: " . $user->getEmail() . "<br>";
echo "Jenis Kelamin: " . $user->getGender() . "<br>";
echo "Tanggal Kedatangan: " . $user->getDate() . "<br>";
?>
