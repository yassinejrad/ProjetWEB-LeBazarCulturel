<?php 
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/model/notif.php';
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/controller/notifC.php';

$conn = new mysqli("localhost", "root", "", "bazarculturelle") ;
session_start();
 $id_h= $_SESSION['auth'] ;
 $NOM= $_SESSION['NOM'] ;
 $IMG=$_SESSION['IMG'] ;
 $DESCRIPTION=$_SESSION['DESCRIPTION'] ;





?>
<html>
<head>
	<title>Monoku Theme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
	<link rel="stylesheet" href="css/flexboxgrid.css">
	
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12" id="sidebar">

					<div class="profile__pic rounded">
						<div class="img">
							<img src="	<?php echo  $IMG ?> " alt="">
							<span class="user_name">
							<?php echo  $NOM ?>
							</span>
							<span class="user_role">
								<?php echo  $DESCRIPTION ?>
							</span>
						</div>
					</div>

					<ul class="sidebar__menu">
					
						<li class="item__item active">
							<a href=""><i class="ti-skype"></i> Chat</a>
						</li>
										
					</ul>

				</div>
				<!-- End Sidebar -->
				<!-- Begin Content -->
				<div class="col-md-9 col-sm-12 col-xs-12 content">
					<div class="row">
						<div class="col-md-5 col-md-offset-7 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
							<div class="box align__right">	
								
								<div class="inline_elem text-right clickable">
									<i class="ti-user"></i>
								</div>		
							</div>					
						</div>
					</div>
					<div class="section__title main_content">
						<h2>Chat</h2>
					</div>
					
					<div class="row">
						<div class="col-md-5 col-sm-12 col-xs-12">
							<div class="main_content">
								

						

								<div class="chat__box">
									<!-- Start of chat element -->
									
										



										<?php
										 $sql_h="select * from notif where id_h='$id_h'  order by date DESC" ;  
										 $result_h = $conn->query($sql_h) or die($conn->error);
										 while ($row_h = $result_h->fetch_assoc())   {
											$id_v=$row_h["id_v"] ;
											$sql_v="select * from user where id='$row_h[id_v]' " ;  
											$result_v= $conn->query($sql_v) or die($conn->error);
											while ($row_v = $result_v->fetch_assoc())   {

												$NOM_v= $row_v['NOM'] ;
												$IMG_v=$row_v['IMG'] ;


											}  
											$sql_m="select * from notif where id_v='$row_h[id_v]' and id_h='$row_h[id_h]'  " ;  
											$result_m= $conn->query($sql_m) or die($conn->error);
											while ($row_m = $result_m->fetch_assoc())   {

												$msg= $row_m['msg'] ;
												$date= $row_m['date'] ;
											


											} 

                                              

											echo'
										
											<div class="chat__element clickable">
											<div class="sender__pic">	
											<div>
													<img src="	 '.$IMG_v.' " alt="">
													<span class="is__online"></span>
												</div>
											</div>
											<div class="sender__infos">
												<h2 class="sender__title">'.$NOM_v.' :</h2>
												<p class="sender__desc">'.$msg.'</p>
												<span class="sender__meta text-right"><i class="ti-time"></i> '.$date.'</span>
											</div>
	
	
											
											<div class="sender__actions">
												<a class="action__elem" href="http://localhost/2a4/blog6/view/front/login_page/view/CHatBox-master/index.php?ID='.$id_v.'">
													<i class="ti-archive"></i>
												</a>
												
											</div>
										</div>
											
											
											' ;







										 }
										
								  ; ?>
								






							
									<!-- End of chat element -->
								</div>
							</div>
						</div>
						
						


					</div>
				</div>
			</div>
		</div>		
	</div>
	<br>
	<br>
	<div class="btn__toggle_menu"><i class="ti-menu clickable"></i></div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/main.js"></script>
	


</body>
</html>