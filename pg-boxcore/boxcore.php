<div class="container-fluid container-ab my-5" id="ab-boxcore">
	<div class="row my-5">
		<div class="col">
			<h1 class="ab-title"> Boxscore</h1>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-lg-2 col-6 col-sm-6  text-center my-auto order-first ">
					<img class="img-fluid img-round " style="max-width: 75%;" src="assent/img/LVBP/logos-completos/leones-del-caracas 1.png" alt="">
					<h4 class="gris-oscuro my-2"> ( 19 - 18 )</h4>
				</div>	
				<div class="offset-xl-1 col-xl-6 col-lg-8 col-xl-6 my-auto text-center">
					<h2 class="ab-title-equipo" style="font-size: 26px !important;"> Leones 8, Magallanes 2</h2>
					<h4 class="ab-subtitulo-equipo" style="font-size: 14px !important;"> Miércoles, 2 de Septiembre 2020</h4>
					<div class="table-responsive ab-table-boxcore border">
						<table class="table my-2 ">
							<thead>
								<tr>
									<th class="verde" scope="col">FINAL</th>
									<th scope="col">1</th>
									<th scope="col">2</th>
									<th scope="col">3</th>
									<th scope="col">4</th>
									<th scope="col">5</th>
									<th scope="col">6</th>
									<th scope="col">7</th>
									<th scope="col">8</th>
									<th scope="col">9</th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col">C</th>
									<th scope="col">H</th>
									<th scope="col">E</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td scope="row">LDC</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>3</td>
									<td>0</td>
									<td>0</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>8</td>
									<td>10</td>
									<td>0</td>
								</tr>
								<tr>
									<td scope="row">NDM</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>3</td>
									<td>0</td>
									<td>0</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>8</td>
									<td>10</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="row  ab-jugadores-boxcore">
						<div class="col-6 col-md-3 col-sm-6  col-lg-3 text-md-left gris-claro my-2">G: Garcia, Jhon <b class="gris-oscuro">(4 - 4) </b></div>
						<div class="col-6 col-md-3 col-sm-6  col-lg-3 text-md-left gris-claro my-2"> P: Carvallo, Felix <b class="gris-oscuro">(0 - 4) </b></div>
						<div class="col-12 col-md-6 col-sm-12 col-lg-6 text-md-right my-2"> 
							<span class="gris-oscuro ml-4"> <b> 0:</b> <i class="fas fa-circle ab-boxcore-circle active"></i> <i class="fas fa-circle ab-boxcore-circle active"></i> <i class="fas fa-circle ab-boxcore-circle active"></i> </span>
							<span class="gris-oscuro ml-4"> <b> S:</b> <i class="fas fa-circle ab-boxcore-circle active"></i> <i class="fas fa-circle ab-boxcore-circle"></i> <i class="fas fa-circle ab-boxcore-circle"></i> </span>
							<span class="gris-oscuro ml-4"> <b> B:</b> <i class="fas fa-circle ab-boxcore-circle"></i> <i class="fas fa-circle ab-boxcore-circle"></i> <i class="fas fa-circle ab-boxcore-circle"></i> </span>
						</div>
					</div>

				</div>
				
				<div class="offset-xl-1 col-xl-2 col-lg-2 col-6  col-sm-6 text-center my-auto  order-first order-lg-last">
					<img class="img-fluid img-round " style="max-width: 75%;" src="assent/img/LVBP/logos-completos/navegantes-del-magallanes 1.png" alt="">
					<h4 class="gris-oscuro my-2"> ( 12 - 25 )</h4>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="container">
	<nav>
		<div class="nav nav-tabs ab-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Boxscore</a>
			<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Jugada a Jugada</a>

		</div>
	</nav>
</div>

<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

		<?php include('pg-boxcore/tabla-boxcore.php')?>

	</div>
	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		<?php include('pg-boxcore/tabla-jugada-jugada.php')?>

	</div>

</div>


