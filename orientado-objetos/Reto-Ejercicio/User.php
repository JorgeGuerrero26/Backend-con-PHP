<?php
class User{
    protected $name;
    protected $email;
    protected $password;
    protected $birthday;
    protected $active;
    protected $created_at;
    protected $updated_at;
    protected $deleted_at;
    
    public function __construct($name,$email,$password,$birthday,$active,$created_at,$updated_at,$deleted_at){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->birthday = $birthday;
        $this->active = $active;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;

    }
}

