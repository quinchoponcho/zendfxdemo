@extends('layouts.app')

@section('content')

<!-- Write your comments here -->
			<table style="width: 1300px;height:  670px ;border: solid thin; color: gray;">
					<colgroup>
					<col style="width: 600px">
					<col style="width: 250px">
					<col style="width: 350px">
					</colgroup>
					
					<!-- primera fila gris   -->
					
					<tr bgcolor="gainsboro" style="border: solid thin; color: gray">
						<td height="25" ></td>
						<td ></td>
						<td ></td>
					</tr>
					
					<!-- 2da fila     -->
						
					<tr style="border: solid thin; color: gray">
						<td height="55">
						<h3  style="color: black ;text-align: left;font-weight: 300; bold;font-family: 'Arial' ">   
							SIMULADOR MOSAICOS versión:1.0 </h3>
						</td>
						<td></td>
						<td></td>
					</tr>
					
					<!-- 3ra franja gris   -->
					
					<tr bgcolor="gainsboro" style="border: solid thin; color: gray">
						<td height="25" ></td>
						<td ></td>
						<td ></td>
					</tr>
					
					<!-- 4ta franja   -->
					
					
					<tr style="border: solid thin; color: gray">
						
						<!-- celda de resultado final  -->
						<td height="400" valign="top" style="border: solid thin; color: gray">
										

								
								<button onclick="foto_aplicar_clip_path()"type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
										Clip foto
										</button>
								
								<div height="800px" class="modal " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 
									  <div y="-300px" class="modal-dialog" role="document" >
									 
											<canvas id="canvas_final" width="800px" height="800px" onclick="storepath()" style="z-index: 2;position:absolute;border:1px solid #d3d3d3;">
																				</canvas>
																				<canvas id="canvas_final2"  width="800px" height="800px" onclick="storepath()" style="z-index: 1;position:absolute;border:1px solid #d3d3d3;">
																				</canvas>
 
										</div>
							</div>
  
							<form>
									<label class="radio-inline">
									<input id="fotosistema" type="radio" name="optradio" onclick="foto_sistema()" checked>
									Imágenes prediseñadas
									</label>
									<label class="radio-inline">
									<input id="fotousuario" type="radio" name="optradio" onclick="foto_personalizada()" >
									Imágenes personalizadas
									</label>
									<div id="archivousuario" style="position:relative;height: 100%">
										 <div class="form-group">
											<label>Upload Image</label>
											<div class="input-group">
												<span class="input-group-btn">
													<span class="btn btn-default btn-file">
														Browse… <input type="file" id="imgInp">
													</span>
												</span>
												<input type="text" class="form-control" readonly>
											</div>
											<img id='img-upload' heigth="100px" onclick="imagen_sist_selecc('img-upload')"/>
										</div>
										
									</div>
									</form> 
							
									<div id="imagenes_lista" style="position:relative;height: 100%">
										
									</div>
  					
						</td>
						
						<!--     Panel de envío email                              -->
						
						<td valign="top" align="center" style="border: solid thin; color: gray" >
							
							<h1 style="color: black">Enviar correo </h1>
								<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								{!! Form::label('Nombre:') !!}
								{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Ingrese nombre']) !!}
								<span class="text-danger">{{ $errors->first('name') }}</span>
								</div>
								 
								<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
								{!! Form::label('Email:') !!}
								{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Ingrese email']) !!}
								<span class="text-danger">{{ $errors->first('email') }}</span>
								</div>
									 
								<div class="form-group">
								<button class="btn btn-success" onclick="location.href='{{ url('send_feedback') }}'">
										Enviar</button>
								</div>
								<!-- <a href="{{ url('completed') }}">Enviar3</a> -->
								<h5 style="color: black">Escoja un color:</h5>
						</td>
						
						<!-- celda ladrillo a usar   -->
						
						<td width="300" valign="top" align="center" style="border: solid thin; color: gray">
							<h5 style="color: black">Mis diseños:</h5>
							<p>Ladrillo a usar:</p>
							<canvas id="canvas_color_final" width="300" height="300" style="border:1px solid #d3d3d3;">
							</canvas>
							
						</td>
					</tr>
					
					<!-- 5ta franja  -->
					
					<tr style="border: solid thin; color: gray">
						
						<!-- Celda de diseños de ladrillos  -->
						<td heigth="200" valign="top" style="border: solid thin;">
							<h5 style="color: black">Escoja un diseño: </h5>
							<div id="mosaicos">
							<table style="width: 600x">
							<colgroup>
							<col style="width: 600px">
							</colgroup>
							<tr>
								<td id="contenedor_estilo_ladrillo">
								</td>
							</tr>
							<tr>
								<!--  Celda  Imágenes de Cocinas, Salas, Cuartos -->
								<td >
									
		
								</td>
							</tr>
							</table>
							</div>
						</td>
						<td heigth="260" valign="top" style="border: solid thin;">
							<div >
							<table style="table-layout:fixed;width: 250px">
							<colgroup>
							<col style="width: 250px">
							</colgroup>
							<tr >
								
								<!--   Paleta de Colores -->
								<td valign="top" height="300" style="word-wrap:break-word;">
								<svg id="paleta_col" viewBox="0 0 100 203" xmlns="http://www.w3.org/2000/svg">
                                <circle onclick="hacer_verde()" cx="25" cy="25" r="5" stroke="green" fill="green" stroke-width="5"/>
								<circle onclick="hacer_azul()" cx="25" cy="25" r="5" stroke="blue" fill="blue" stroke-width="5"
								 transform="translate(0,20)"  />
								<circle onclick="hacer_rojo()" cx="25" cy="25" r="5" stroke="red" fill="red" stroke-width="5"
								transform="translate(0,40)"  />
     							<circle onclick="hacer_amarillo()" cx="25" cy="25" r="5" stroke="yellow" fill="yellow" stroke-width="5"
	     						transform="translate(0,60)"   />
								<circle onclick="hacer_naranja()" cx="25" cy="25" r="5" stroke="orange" fill="orange" stroke-width="5"
								transform="translate(40,0)"   />
								<circle onclick="hacer_rosado()" cx="25" cy="25" r="5" stroke="pink" fill="pink" stroke-width="5"
								transform="translate(40,20)" 	  />
								<circle onclick="hacer_gris()" cx="25" cy="25" r="5" stroke="gray" fill="gray" stroke-width="5"
                                transform="translate(40,40)"  />
								</svg>
								</td>
							</tr>
							</table>
							</div>
										
						</td>
						
						<!--   Diseño de ladrillo a colorear    -->
						<td  width="300"  valign="top" style="border: solid thin;" >
							<div id="ladrillo_colorear" width="100%">
							</div>
							<img id="imagen_temp" width="250" heigth="250" style="display: none;">

						</td>
					</tr>

			</table>
			<img id="foto" width="500" heigth="350" style="display: none">
			<img x="0" y="10" id="foto_final" width="450" heigth="400" style="display: none;">
            <svg id="svg1" style="display: none;">
            </svg>
            <canvas id="canvastest1"  width="250" height="250" style="display: none;"></canvas>
            <canvas id="canvastest2"  width="250" height="250" style="display: none;"></canvas>
            <canvas id="canvastest3"  width="250" height="250" style="display: none;"></canvas>
            <canvas id="canvastest4"  width="250" height="250" style="display: none;"></canvas>
            
            <canvas id="canvastestf"  width="420" height="420" style="display: none;"></canvas>

@endsection
