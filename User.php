<?php
class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getProfile() {
        return "User: {$this->name} ({$this->email})";
    }
}
