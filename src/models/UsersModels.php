<?php

namespace App\Models;

class UsersModels extends Model
{   private $pseudo;
    private $role;
    private $avatar;
    private $lastname;
    private $firstname;
    private $password;
    private $email;
    

    public function __construct($data)
    {   
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model', '', $class));
        //$this->table = 'users';
       //if($data === null){
            $this->setPseudo($data['pseudo']?? null);
            $this->setRole($data['role']?? "member");
            $this->setAvatar($data['avatar']?? null);
            $this->setLastname($data['lastname']?? null);
            $this->setFirstname($data['firstname']?? null);
            $this->setPassword($data['password']?? null);
            $this->setEmail($data['email']?? null);
        //}
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }
    public function getAvatar()
    {
        return $this->avatar;
    }


    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

 
    
}
