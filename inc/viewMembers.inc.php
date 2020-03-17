<?php

class ViewMembers extends Members {

    public function __construct($id, $name, $email, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function build() {
        echo "<tr><th scope='row'>".$this->id ."</th><td>".$this->name."</td><td>".$this->email."</td><td>ENCRYPT</td></tr>";
    }
}