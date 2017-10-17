

<div class="Contacto">
				<form class="reservas"  action="envio" method="post">

				  {{ csrf_field() }}

				<p><input type="text" name="nombre" class="form-control" value="" required placeholder="Nombre completo del Estudiante"></p>
				<p><input type="number" name="edad" class="form-control" min="3" value="" required placeholder="Edad del Estudiante"></p>
				<p><select  class= "form-control"name="Especialidad">
					<option value="">Seleccione Especialidad</option>
					<option value="Psicopedagogia">Psicopedagogia</option>
					<option value="Psicologia">Psicologia</option>
					<option value="fonoaudiologia">Fonoaudiologia</option>
				</select>
				</p>
				<p><input type="text" name="Nombre" class="form-control" value="" required placeholder="Nombre de quien hace la solicitud"></p>
				<p><input type="" name="Rut" value="" class="form-control"placeholder="Ingrese su rut"></p>
				<p><div class="row">
					<div class="col">
						<select required class="form-control numero" name="clave">
							<option value="+56">+56</option>
							<option value="02">02</option>
						</select>
					</div>
					<div class="col">
						<input type="" required class="form-control telefono" name="telefono" placeholder="Numero de contacto">
					</div>
				</div></p>
				<p><input type="email" name="correo" class="form-control" value="" placeholder="E-mail"></p>
				<p><input type="text" name="hora" class="form-control" value="" placeholder="Mejor hora de contacto Ej: entre las 12:00 y 15:00"></p>
				<p><select name="comuna" required class="form-control" >
						<option selected value="No ingresada" >Seleccione su Comuna </option>
						<option value="Cerrillos">Cerrillos</option>
						<option value="Cerro Navia">Cerro Navia</option>
						<option value="Conchalí">Conchalí</option>
						<option value="El Bosque">El Bosque</option>
						<option value="Estación Central">Estación Central</option>
						<option value="Huechuraba">Huechuraba</option>
						<option value="Independencia">Independencia</option>
						<option value="La Cisterna">La Cisterna</option>
						<option value="La Florida">La Florida</option>
						<option value="La Granja">La Granja</option>
						<option value="La Pintana">La Pintana</option>
						<option value="La Reina">La Reina</option>
						<option value="Las Condes">Las Condes</option>
						<option value="Lo Barnechea">Lo Barnechea</option>
						<option value="Lo Prado">Lo Prado</option>
						<option value="Macul">Macul</option>
						<option value="Maipú">Maipú</option>
						<option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
						<option value="Peñalolén">Peñalolén</option>
						<option value="Providencia">Providencia</option>
						<option value="Pudahuel">Pudahuel</option>
						<option value="Puente Alto">Puente Altoí</option>
						<option value="Quilicura">Quilicura</option>
						<option value="Quinta Normal">Quinta Normal</option>
						<option value="Recoleta">Recoleta</option>
						<option value="Renca">Renca</option>
						<option value="San Bernardo">San Bernardo</option>
						<option value="San Joaquín">San Joaquín</option>
						<option value="San Miguel">San Miguel</option>
						<option value="San Ramón">San Ramón</option>
						<option value="Santiago">Santiago</option>
						<option value="Vitacura">Vitacura</option>
						<option value="Ñuñoa">Ñuñoa </option>

				</select></p>
				<p><textarea name="descripcion" rows="4" cols="80" class="form-control " placeholder="Una breve descripción de su solicitud"></textarea></p>
				<p><input type="submit"  value="Enviar" class="form-control btn btn-success" ></p>


				</form>
				</div>
<div class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.3383039016876!2d-70.6514954853052!3d-33.440491604386224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5a16316d54d%3A0xdccc746c92887a56!2sEstado+215%2C+Santiago%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1506558639352" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
