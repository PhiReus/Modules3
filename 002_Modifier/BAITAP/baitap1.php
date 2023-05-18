<?php
class User {
    protected string $name;
    protected string $email;
    public int $role;
    public function getInfo(){
        return "Tên: ". $this->name . " Email: ".$this->email . " Role: ".$this->role;
    }
    public function isAdmin(){
        if($this->role == 1){
            return "Admin";
        }else if($this->role == 2){
            return "người dùng bình thường";
        }else{
            return "Chưa được cấp quyền";
        }
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setRole($role){
        $this->role = $role;
    }
}
$user = new User();
$user->setName("Phi");
$user->setEmail("Phireus2002@gmail.com");
$user->setRole(1);
echo $user->getInfo();
echo "<br>";
echo "Người dùng này là : " . $user->isAdmin();

echo "<br>";

$user1 = new User();
$user1->setName("Hạo Đô");
$user1->setEmail("HaoDo@gmail.com");
$user1->setRole(2);
echo $user1->getInfo();
echo "<br>";
echo "Người dùng này là : " . $user1->isAdmin();
?>