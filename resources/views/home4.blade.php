@extends('layouts.app')

@section('content')



<table style="width: 1300px;height:  770px ;border: solid thin; color: gray;">
		<colgroup>
		<col style="width: 600px">
		<col style="width: 250px">
		<col style="width: 350px">
		</colgroup>
		<tr bgcolor="gainsboro" style="border: solid thin; color: gray">
			<td height="25" ></td>
			<td ></td>
			<td ></td>
		</tr>
			
		<tr style="border: solid thin; color: gray">
			<td height="55">
			<h3  style="color: black ;text-align: left;font-weight: 300; bold;font-family: 'Arial' ">   SIMULADOR 2019/06/09 </h3>
			</td>
			<td></td>
			<td></td>
		</tr>
		<tr bgcolor="gainsboro" style="border: solid thin; color: gray">
			<td height="25" ></td>
			<td ></td>
			<td ></td>
		</tr>
		<tr style="border: solid thin; color: gray">
			<td heigth="400" valign="top" style="border: solid thin; color: gray">

                        <button type="button" class="btn btn-primary next-step" onclick="foto_aplicar_clip_path()">Clip foto</button>
               
					<img x="0" y="10" id="foto_final" width="450" heigth="400">
					<svg id="svg1" style="display: none;"></svg>
			</td>
			<td valign="top" align="center" style="border: solid thin; color: gray" >
				<h5 style="color: black">Escoja un color:</h5>

			</td>
			<td valign="top" align="center" style="border: solid thin; color: gray">
				<h5 style="color: black">Mis diseños:</h5>
				<p>Ladrillo a usar:</p>

									 <canvas id="myCanvas3" width="350" height="300" style="border:1px solid #d3d3d3;">
										</canvas>
				
			</td>
		</tr>
		<tr style="border: solid thin; color: gray">
			<td heigth="200" valign="top" style="border: solid thin;">
				<h5 style="color: black">Escoja un diseño: </h5>
					<div id="mosaicos">
						<table style="width: 600x">
						<colgroup>
						<col style="width: 600px">
						</colgroup>
						<tr>
							<td id="tabla1">
							</td>
						</tr>
						<tr>
							
								<td id="imagenes_lista">
								<form>
								<label class="radio-inline">
								<input type="radio" name="optradio" onclick="foto_personalizada()" checked>Imágenes personalizadas
								</label>
								<label class="radio-inline">
								<input type="radio" name="optradio" onclick="foto_sistema()" >Imágenes prediseñadas
								</label>
								
					</form> 
								<div style="position:relative; height: 100%">
                                <div style="overflow-y: scroll; position: absolute; top: 0; right:0; bottom: 0; left: 0;">
                                    <div >
                                    </div>
                                    
                                </div>
								</div>
						
						
						
						
									</td>
						
						
						</tr>
						</table>
					</div>
	
			</td>
			<td heigth="380" valign="top" style="border: solid thin;">

					  <div >
								<table style="table-layout:fixed;width: 250px">
								<colgroup>
								<col style="width: 250px">
								
								</colgroup>
								<tr >
									
									<td valign="top" height="350" style="word-wrap:break-word;">
									
										<svg id="paleta_col" viewBox="0 0 100 203" xmlns="http://www.w3.org/2000/svg">

									  <circle onclick="hacer_verde()" cx="25" cy="25" r="5" stroke="green" fill="green" stroke-width="5"/>
									  
									  <circle onclick="hacer_azul()" cx="25" cy="25" r="5" stroke="blue" fill="blue" stroke-width="5"
									  transform="translate(0,20)" 
									  />
									  
									   <circle onclick="hacer_rojo()" cx="25" cy="25" r="5" stroke="red" fill="red" stroke-width="5"
									  transform="translate(0,40)" 
									  />

										<circle onclick="hacer_amarillo()" cx="25" cy="25" r="5" stroke="yellow" fill="yellow" stroke-width="5"
									  transform="translate(0,60)" 
									  />
									  
									  
									   <circle onclick="hacer_naranja()" cx="25" cy="25" r="5" stroke="orange" fill="orange" stroke-width="5"
									  transform="translate(40,0)" 
									  />
									  
									   <circle onclick="hacer_rosado()" cx="25" cy="25" r="5" stroke="pink" fill="pink" stroke-width="5"
									  transform="translate(40,20)" 
									  />

										<circle onclick="hacer_gris()" cx="25" cy="25" r="5" stroke="gray" fill="gray" stroke-width="5"
									  transform="translate(40,40)" 
									  />



										</svg>
										
									</td>
									
								</tr>

								</table>
							</div>
							
			</td>
			<td  valign="top" style="border: solid thin;" >
				<div id="contenedor">
				
				</div>
					<div id="myModal" >
					<img id="lamp" width="400" heigth="350" style="display: none;">
					</div>
				
				
			</td>
		</tr>
		<tr>
			<td heigth="150" valign="top" style="border: solid thin;" > 
			
				<img id="foto" width="400" heigth="350" style="display: none">
			</td>
			<td valign="top" style="border: solid thin;">

                        <div>
							
					    </div> 
					    
        
                        	<table style="width: 250px">
								<colgroup>
								<col style="width: 250px">
								</colgroup>
								<tr>
									<td>
										
										 
									</td>
									
								</tr>
								<tr>
									<td>
										 
									</td>
								</tr>
							</table>
							
							
			</td>
			<td valign="top">
			
				 <canvas id="myCanvas4" width="350" height="350" onclick="storepath()" style="display: none;border:1px solid #d3d3d3;">
										</canvas>
				
			</td>
		
		</tr>
</table>



@endsection
