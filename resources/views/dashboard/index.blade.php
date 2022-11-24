@extends('layouts.base')
@section('body')
<div>
    <canvas id="titleChart" style="position: relative; height:10vh; width:20vw"></canvas>
</div>

<div>
    <canvas id="salesChart" style="position: relative; height:10vh; width:20vw"></canvas>
</div>

<div class="chart-container" style="position: relative; height:20vh; width:40vw">
    <canvas id="itemsChart"></canvas>
</div>
@endsection