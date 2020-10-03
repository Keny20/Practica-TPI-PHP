<?php

class ContactController
{
    private $db;
    public function __construct($database)
    {
        $this->db = $database;
    }

    public function contact () {
        require_once "models/Contact.php";
        $contact = new Contact($this->db->getConnection());
        $contacts = $contacts->list();
        
        require_once "views/contact.php";
    }

    
    // public function showContact()
    // {

    //     require_once "models/Contact.php";
    //     $contact = new Contact();
    //     $showContact = $contact->showContact();
    //     require_once "views/contact.php";
    // }
    // public function save()
    // {

    //     echo "<main>";
      

    //         if(isset($_POST["guardar"]))
    //         {

    //             $id=$_POST;
    //             $nombre=$_POST['nombre'];
    //             $apellido=$_POST['apellido'];
    //             $edad=$_POST['edad'];
    //             $email=$_POST['email'];
          
    //             $sql= "INSERT INTO datos VALUES(null,'$nombre','$apellido','$edad','$email')";
    //             $result = mysqli_query($connection,$sql);
    //             if (!$result){
    //                 echo "Hay error en la consulta";
                    
    //             }else 
    //             echo "consulta correcta";
    //         }
    //     echo "</main>";
    // }
}