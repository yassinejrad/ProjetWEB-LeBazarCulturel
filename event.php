<?php


    class Event {


        public string $name ;
        public string $location;
        public string $start_date; 
        public string $end_date;
        public string $sponsor1;
        public string $sponsor2;
        public string $sponsor3;
        public string $artist1;
        public string $artist2;
        public string $artist3;
        public string $description;
        public string $image;

        
        

        public function __construct(string $name ,string $location ,
        string $start_date ,string $end_date ,string $sponsor1 
        ,string $sponsor2 ,string $sponsor3 ,string $artist1 ,string $artist2 ,
        string $artist3 ,string $description ,string $image)
        {
            $this->$name = $name ; 
            $this->location = $location;
            $this->start_date =$start_date ; 
            $this->$end_date =$end_date ;
            $this->sponsor1 =$sponsor1 ;
            $this->sponsor2 =$sponsor2 ;
            $this->sponsor3 =$sponsor3;
            $this->artist1 = $artist1;
            $this->artist2 =$artist2 ;
            $this->artist3 = $artist3;
            $this->description =$description ;
            $this->image =$image ;


        }

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


        public function aff()
        {
            echo '
                <html>

                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="css.css?v=<?php echo time(); ?>">
                    <link rel="stylesheet" href="create.css">
                    <title>Document</title>
                </head>
                <body>
                <form  action="" method="POST">
                    
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <img name="image"  src="' . $this->image . '" alt="">
                        </div>
                        <div class="blog-post-info">
                            <div class="blog-post-date">
                                
                                <span name="date" >' . $this->location . ': ' . $this->start_date . ' - ' . $this->end_date . ' </span>
                            </div>
                            <h1 name="name" class="blog-post-title" >' . $this->name . '</h1>
                            <p name="description" class="blog-post-text">
                            ' . $this->description . '
                            </p>
                            <h1 name="artists" class="blog-post-artists">artists : ' . $this->artist1 . '  ' . $this->artist2 . ' ' . $this->artist3 . ' </h1>
                            <br>
                            <button class="btn btn--radius-2 btn--red" type="submit">Read more</button>
                            <a class="btn btn--radius-2 btn--red" href="Edit.php?name=' . $this->name . '" role="button">Edit</a>
                            <a class="btn btn--radius-2 btn--red" href="delete.php?name=' . $this->name . '" role="button">Delete</a>
                            
                        </div>
                    </div>
                </form>
                
                </body>
                
            
            </html>



            ';





        }
        

        public function verif_link()
        {
            
            $conn = new mysqli("localhost", "root", "", "atelier_php"); 
            
            $test = false ; 
            while($test==false)
            {
                echo"heyyeye" ;
                $rand_id = rand(10,100) ; 
                echo"$rand_id";
                $sql = "select * from link_sponsor where id ='$rand_id' ";
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

        public function add_link(int $id , string $sponsor1 ,string $sponsor2 ,string $sponsor3 )
        {
            $conn = new mysqli("localhost", "root", "", "atelier_php"); 
            $sql = "insert into link_sponsor (id,sponsor1,sponsor2,sponsor3) values 
        ('$id' ,'$sponsor1' ,'$sponsor2' ,'$sponsor3')";
        $conn->query($sql);
        $conn->close();

        }

        
    }




?>