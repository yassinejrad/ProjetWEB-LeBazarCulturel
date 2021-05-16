<?php

    include '../../model/event.php';

    class Eventc {

        public function control_date(string $start_date , string $end_date)
        {
            $test = True ; 
            
            if($start_date  > $end_date)
            {
                echo"heyy55555555" ; 
                return $test ;  

            }
            else 
            {
                echo"hey22y" ; 
                $test = False ; 
                return $test ; 
            }

        }

        public function rand_id ()
        {
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            
            $test = false ; 

            while($test==false)
            {
                $rand_id = rand(10,100) ; 
                echo"$rand_id";
                $sql = "select * from event2 where id ='$rand_id' ";
                $result = $conn->query($sql);
                $count = $result->num_rows ; 

                if($count!=NULL)
                {
                    $test = false ; 
                }
                else 
                {
                    $test = true ; 
                }
                
            }
        
            $conn->close();
            return $rand_id ; 
        }


        public function create_link_spons(int $id , int $id_spon1 , int $id_spon2, int $id_spon3  )
        {
            
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 



                $sql = "insert into link_sponsor (id_event , id_spons) values 
                ('$id' ,'$id_spon1' )";
                $conn->query($sql);
                $sql = "insert into link_sponsor (id_event , id_spons) values 
                ('$id' ,'$id_spon2' )";
                $conn->query($sql);
                $sql = "insert into link_sponsor (id_event , id_spons) values 
                ('$id' ,'$id_spon3' )";
                $conn->query($sql);

                $conn->close();

        }

        public function create_link_artist(int $id , int $id_art1 , int $id_art2, int $id_art3  )
        {

            
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 

                $sql = "insert into link_artist (id_event , id_artist) values 
                ('$id' ,'$id_art1' )";
                $conn->query($sql);
                $sql = "insert into link_artist (id_event , id_artist) values 
                ('$id' ,'$id_art2' )";
                $conn->query($sql);
                $sql = "insert into link_artist (id_event , id_artist) values 
                ('$id' ,'$id_art3' )";
                $conn->query($sql);

                $conn->close();

        }

        public function add_event(int $id ,  string $name ,string $location ,
        string $start_date ,string $end_date ,string $description ,string $image , int $price)
        {
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            echo" ahla" ; 
            $id_user = 0 ; 
            $sql = "insert into event2 (id , name,location,start_date,end_date,description,image,id_user,price) values 
            ('$id', '$name' ,'$location','$start_date' , '$end_date' , '$description' 
            ,'$image' , '$id_user' , '$price' )";

            $conn->query($sql);
            $conn->close();


        }


        public function get_artist()
        {
            $list = array() ; 
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            $sql = "select * from artist  ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                array_push($list,$row['name']);

            }
            echo"$list[0]" ; 

            return $list ; 

        }

        public function get_sponsor()
        {
            $list = array() ; 
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            $sql = "select * from sponsor  ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                array_push($list,$row['name']);

            }
            echo"$list[0]" ; 

            return $list ; 

        }

        public function get_artist_id(string $name)
        {
            $id =0 ;  
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            $sql = "select * from artist where name='$name'  ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                $id = $row['id'] ; 

            }
            

            return $id ; 

        }

        public function get_sponsor_id(string $name)
        {
            $id =0 ;  
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            $sql = "select * from sponsor where name='$name'  ";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            
                $id = $row['id'] ; 
            return $id ; 

        }

        public function get_artists_names(int $id_event)
        {
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            $id_list = array() ; 
            $sql = "select * from link_artist where id_event=$id_event";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                array_push($id_list,$row['id_artist']);
                
            }


            $list = array() ; 
            
            $sql = "select * from artist where id=$id_list[0] ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                array_push($list,$row['name']);

            }
            $sql = "select * from artist where id=$id_list[1] ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                array_push($list,$row['name']);

            }
            $sql = "select * from artist where id=$id_list[2] ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                array_push($list,$row['name']);

            }
        
            return $list ; 

        }

        public function edit_event(string $id ,  string $name ,string $location ,
        string $start_date ,string $end_date ,string $description ,string $image , int $price)
        {
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 

            $sql = "update event2 set name='$name',location='$location',start_date='$start_date',end_date='$end_date',
            description='$description',image='$image' , price='$price' where id=$id" ;

            $conn->query($sql);
            $conn->close();



        }

        public function get_sponsor_names(int $id_event)
        {
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            $id_list = array() ; 
            
            $sql = "select * from link_sponsor where id_event=$id_event";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                 
                array_push($id_list,$row['id_spons']);
                
            }

             


            $list = array() ; 
            
            $sql = "select * from sponsor where id=$id_list[0] ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                array_push($list,$row['name']);

            }
            
            $sql = "select * from sponsor where id=$id_list[1] ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                array_push($list,$row['name']);

            }
            $sql = "select * from sponsor where id=$id_list[2] ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                array_push($list,$row['name']);

            }
           
            return $list ; 

        }

        
       
        
        /*
        public function add_link(string $sponsor1 ,string $sponsor2 ,string $sponsor3 )
        {
            $conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
            $sql = "insert into link_sponsor (id,sponsor1,sponsor2,sponsor3) values 
        ('$id' ,'$sponsor1' ,'$sponsor2' ,'$sponsor3')";
        $conn->query($sql);
        $conn->close();

        }
        */
        
    }




?>