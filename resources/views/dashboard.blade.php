@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card card-chart">
                <div class="card-header">
                    Homme Femme Chart
                </div>
                <div class="card-body justify-content-center">
                    <div id="homme-femme-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card card-chart">
                <div class="card-header">
                    Histogramme Tranche D'Ages
                </div>
                <div class="card-body">
                    <canvas id="tranche-age"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <input type="range" name="mySlider" id=mySlider min="10" max="100" value="40">
                </div>
                <div class="card-body">
                    <div id="my_dataviz"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Diagramme NHL
                </div>
                <div class="card-body">
                    <div id="nhl-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Diagramme Chord
                </div>
                <div class="card-body">
                    <div id="chord-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card card-tasks">
                <div class="card-header ">
                    <h6 class="title d-inline">Articles</h6>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Auteur</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->titre }}</td>
                                    <td>{{ $article->user->name }}</td>
                                    <td>
                                        <a href="{{ route('article.read', ['article' => $article->id]) }}" class="btn btn-primary">Lire</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Recommendations</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter">
                            <thead class="text-primary">
                                <tr>
                                    <th>Recommendation</th>
                                    <th>taux de glycémie</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recommendations as $recommendation)
                                    <tr>
                                        <td>{{ $recommendation->rec }}</td>
                                        <td>{{ $recommendation->tauxGL }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
    var margin = {top: 30, right: 30, bottom: 30, left: 50},
    width = 600 - margin.left - margin.right,
    height = 400 - margin.top - margin.bottom;


    var svg = d3.select("#my_dataviz")
        .append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
        .append("g")
        .attr("transform","translate(" + margin.left + "," + margin.top + ")");


    axios.get('http://localhost:8000/data/density')
    .then(response => {
        const {data} = response
        console.log(data);
        var x = d3.scaleLinear()
                    .domain([0, 2000000])
                    .range([0, width]);
        svg.append("g")
            .attr("transform", "translate(10," + (height + 0) + ")")
            .call(d3.axisBottom(x));

        // add the y Axis
        var y = d3.scaleLinear()
                    .range([height, 0])
                    .domain([0, 0.01]);
        svg.append("g")
        .attr("transform", "translateY(10," + (width + 10) + ")")
            .call(d3.axisLeft(y));

        // Compute kernel density estimation
        var kde = kernelDensityEstimator(kernelEpanechnikov(4), x.ticks(50))
        var density =  kde( data.map(function(d){  return d.population; }) )

        // Plot the area
        var curve = svg
            .append('g')
            .append("path")
            .attr("class", "mypath")
            .datum(density)
            .attr("fill", "#69b3a2")
            .attr("opacity", ".8")
            .attr("stroke", "#000")
            .attr("stroke-width", 1)
            .attr("stroke-linejoin", "round")
            .attr("d",  d3.line()
                .curve(d3.curveBasis)
                .x(function(d) { return x(d[0]); })
                .y(function(d) { return y(d[1]); })
            );

            // A function that update the chart when slider is moved?
            function updateChart(binNumber) {
                kde = kernelDensityEstimator(kernelEpanechnikov(10), x.ticks(binNumber))
                density =  kde( data.map(function(d){  return d.population; }) )
                console.log(binNumber)
                console.log(density)

                // update the chart
                curve
                .datum(density)
                .transition()
                .duration(1000)
                .attr("d",  d3.line()
                    .curve(d3.curveBasis)
                    .x(function(d) { return x(d[0]); })
                    .y(function(d) { return y(d[1]); })
                );
            }
            d3.select("#mySlider").on("change", function(d){
                    selectedValue = this.value
                updateChart(selectedValue)
    })
    }).catch(err => {
        alert(err)
    })


    function kernelDensityEstimator(kernel, X) {
    return function(V) {
            return X.map(function(x) {
                return [x, d3.mean(V, function(v) { return kernel(x - v); })];
            });
        };
    }
    function kernelEpanechnikov(k) {
        return function(v) {
            return Math.abs(v /= k) <= 1 ? 0.75 * (1 - v * v) / k : 0;
        };
    }
    </script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(drawNHLChart);

        function drawNHLChart() {
            axios.get('http://localhost:8000/data/nhl')
            .then(response => {
                    var options = {'title':'Repartition des taux des glucose',
                       'width':400,
                       'height':300};

                    var data = new google.visualization.DataTable();

                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    var rows = []
                    for (let index = 0; index < response.data.data.length; index++) {
                        rows.push([response.data.labels[index], response.data.data[index]])
                    }
                    data.addRows(rows);

                    var chart = new google.visualization.PieChart(document.getElementById('nhl-chart'));
                    chart.draw(data, options);

                })
        }
        function drawChart() {
            axios.get('http://localhost:8000/data/homme-femme-chart')
                .then(response => {
                    var options = {'title':'Repartition Homme/Femme',
                       'width':400,
                       'height':300};

                    var data = new google.visualization.DataTable();

                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    var rows = []

                    for (let index = 0; index < response.data.data.length; index++) {
                        rows.push([response.data.labels[index], response.data.data[index]])
                    }

                    data.addRows(rows);

                    var chart = new google.visualization.PieChart(document.getElementById('homme-femme-chart'));
                    chart.draw(data, options);

                })
        }
    </script>
    <script>
        axios.get('http://localhost:8000/api/chord/data')
        .then(response => {
            const { matrix, nameProvider } = response.data
            let NameProvider = nameProvider
            var colors = ["#C4C4C4","#69B40F","#EC1D25","#C8125C","#008FC8","#10218B","#134B24","#737373","33FFDA"];
            var svg = d3.select("#chord-chart")
                        .append("svg")
                        .attr("width", 440)
                        .attr("height", 440)
                        .append("g")
                        .attr("transform", "translate(220,220)")

            var res = d3.chord()
                .padAngle(0.05)     // padding between entities (black arc)
                .sortSubgroups(d3.descending)
                (matrix)


            svg
                .datum(res)
                .append("g")
                .selectAll("g")
                .data(function(d) { return d.groups; })
                .enter()
                .append("g")
                .append("path")
                    .style("fill", function(d,i){ return colors[i] })
                    .style("stroke", "black")
                    .attr("d", d3.arc()
                        .innerRadius(200)
                        .outerRadius(210)
                    )

            svg
                .datum(res)
                .append("g")
                .selectAll("path")
                .data(function(d) { return d; })
                .enter()
                .append("path")
                    .attr("d", d3.ribbon().radius(200))
                    .style("fill", function(d){ return(colors[d.source.index]) })
                    .style("stroke", "black");
            // this group object use each group of the data.groups object
            var group = svg
            .datum(res)
            .append("g")
            .selectAll("g")
            .data(function(d) { return d.groups; })
            .enter()

            // add the group arcs on the outer part of the circle
            group.append("g")
                .append("path")
                .style("fill", "white")
                .style("stroke", "black")
                .attr("d", d3.arc()
                .innerRadius(190)
                .outerRadius(200)
                )

            group.append("svg:text")
                .each(function(d) { d.angle = (d.startAngle + d.endAngle) / 2; })
                .attr("dy", ".35em")
                .attr("class", "titles")
                .attr("text-anchor", function(d) { return d.angle > Math.PI ? "end" : null; })
                .attr("transform", function(d) {
		            return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")"
		                + "translate(" + (innerRadius + 55) + ")"
		                + (d.angle > Math.PI ? "rotate(180)" : "");
                })
                .attr('opacity', 0)
                .text(function(d,i) { return NameProvider[i]; });

            group
            .selectAll(".group-tick")
            .data(function(d) { return groupTicks(d, 25); })    // Controls the number of ticks: one tick each 25 here.
            .enter()
            .append("g")
                .attr("transform", function(d) { return "rotate(" + (d.angle * 180 / Math.PI - 90) + ") translate(" + 200 + ",0)"; })
            .append("line")               // By default, x1 = y1 = y2 = 0, so no need to specify it.
                .attr("x2", 6)
                .attr("stroke", "white")

            // Add the labels of a few ticks:
            group
            .selectAll(".group-tick-label")
            .data(function(d) { return groupTicks(d, 25); })
            .enter()
            .filter(function(d) { return d.value % 25 === 0; })
            .append("g")
                .attr("transform", function(d) { return "rotate(" + (d.angle * 180 / Math.PI - 90) + ") translate(" + 200 + ",0)"; })
            .append("text")
                .attr("x", 8)
                .attr("dy", ".35em")
                .attr("transform", function(d) { return d.angle > Math.PI ? "rotate(180) translate(-16)" : null; })
                .style("text-anchor", function(d) { return d.angle > Math.PI ? "end" : null; })
                .text(function(d) { return d.value })
                .style("font-size", 9)


                // Returns an array of tick angles and values for a given group and step.
                function groupTicks(d, step) {
                var k = (d.endAngle - d.startAngle) / d.value;
                return d3.range(0, d.value, step).map(function(value) {
                    return {value: value, angle: value * k + d.startAngle};
                });
            }

        })
    </script>
@endpush

