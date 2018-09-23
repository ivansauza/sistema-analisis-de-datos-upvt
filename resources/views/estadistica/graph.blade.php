@extends('layouts.graph')

@section('scripts')
<script type="text/javascript" src="{{ asset('js/utils.js') }}"></script>
<script>
		var color = Chart.helpers.color;
		var barChartData = {
			labels: [
                @foreach ($periodos as $periodo)
                    "{{ $periodo->tiny_clave }}", 
                @endforeach
            ],
			datasets: [{
				label: '{{ $subindicador->nombre }}',
				backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
				borderColor: window.chartColors.green,
				borderWidth: 0,
				data: [
                    @foreach ($periodos as $periodo)
                        @php($result = $subindicador->calculateProcedimiento($periodo->id))
                        
                        @if(is_numeric($result))
                            "{{ $result * 100 }}", 
                        @else
                            "{{ 0 }}", 
                        @endif
                    @endforeach
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: '{{ $subindicador->indicador->nombre }}'
					}
				}
			});

		};
	</script>
@endsection