@extends('layouts.report')

@section('content')
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col">
				<h5 class="text-center"><b>ANÁLISIS DE DATOS</b></h5>

				<h5 class="text-center">AL MES DE SEPTIEMBRE DE 2017</h5>

				<p class="text-right">
					<small>CÒDIGO:205BL10000/00(I05)(F01)</small>
				</p>

				<p class="text-right">
					Fecha: <u>24 de enero de 2017</u>
				</p>

				<p><b>Proceso: </b> Enseñansa apredizaje</p>
				<table class="table table-hover table-bordered table-sm">
					<thead>
						<tr>
							<th scope="col" class="text-center">Procedimiento / Indicador</th>
							<th scope="col" class="text-center">Valor Meta</th>
							<th scope="col" class="text-center p-0">
								E-A
								<hr />
								Cuatrimestre 1
							</th>
							<th scope="col" class="text-center p-0">
								M-A
								<hr />
								Cuatrimestre 2
							</th>
							<th scope="col" class="text-center p-0">
								S-D
								<hr />
								Cuatrimestre 3
							</th>
							<th scope="col" class="p-0 text-center">Observaciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 300px !important;">
								<b><i>Selección de personal Docente</i></b>
								<br />
								Porcentaje de aspirantes contratados: (No. De docentes contratados/No. De aspirantes evaluados)
							</td>
							<td class="text-center">50%</td>
							<td></td>
							<td></td>
							<td>
								<sup>4</sup>
								&frasl;
								<sub>4</sub>
								INI = 100%
							</td>
							<td style="width: 250px !important;">
								<p>La maestra Beatriz Adriana Chavez Ramirez no fue contratada debido a que  manifestó problemas personales, lo que originó no cubrir la asignatura propuesta, sin embargo realizó el proceso de Selección de personal docente.</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection