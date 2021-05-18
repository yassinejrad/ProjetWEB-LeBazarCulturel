<?php

//fetch_data.php
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';
include_once '../../controller/produitC.php';
include_once '../../model/produit.php';
include ('database_connection.php');
if(isset($_POST["action"]))
{
	$query = "SELECT * FROM produits p   WHERE STATUE = '1'";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query.= "
		 AND PRIX BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	
	
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img  class="card-img rounded-0 img-fluid"  src="'.$row['IMAGE'].'" style="width: 400px; height: 400px;" >
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-outline-success text-white" href="favo.php?REFERENCE='.$row['REFERENCE'].'"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-outline-success text-white mt-2"href="readmore2.php?REFERENCE='.$row['REFERENCE'].'"id="REFERENCE" name="REFERENCE"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-outline-success text-white mt-2" href=""><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a style="color:red;" href="" class="h3 text-decoration-none">'.$row['NOM'].'</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li> substr('.$row['DESCP'].', 0, 20)</li>
                                    
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">'.$row['PRIX'].'dt</p>
                            </div>
                        </div>
                    </div>
            
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>


