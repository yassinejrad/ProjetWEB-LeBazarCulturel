<?php

    include '../../model/spons.php';

    class sponsc
    {

        public function add_sponsor(string $name ,string  $description ,  
        string $image  )
        {
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            echo" ahla 7obi " ; 
            
            $sql = "insert into sponsor (name,description,image) values 
                ('$name' , '$description' ,'$image' )";

            $conn->query($sql);
            $conn->close();


        }









    }














?>