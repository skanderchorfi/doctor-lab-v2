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
                    <div class="float-right">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-density">
                            Voir Plus
                          </button>
                    </div>
                    <div class="modal fade" id="modal-density" tabindex="-1" role="dialog" aria-labelledby="modal-densityTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modal-densityTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
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
                    <div class="float-right">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-nhl">
                            Voir Plus
                          </button>
                    </div>
                    <div class="modal fade" id="modal-nhl" tabindex="-1" role="dialog" aria-labelledby="modal-nhlTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modal-nhlTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
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
                    <div class="float-right">
                        <a href="{{ route('stats.index') }}" class="btn btn-sm btn-success">Diagramme</a>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-chord">
                            Voir Plus
                        </button>
                    </div>
                    <div class="modal fade" id="modal-chord" tabindex="-1" role="dialog" aria-labelledby="modal-chordTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modal-chordTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chord-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Diagramme Voronoi
                    <div class="float-right">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-voronoi">
                            Voir Plus
                          </button>
                    </div>
                    <div class="modal fade" id="modal-voronoi" tabindex="-1" role="dialog" aria-labelledby="modal-voronoiTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modal-voronoiTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="voronoi-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card card-tasks">
                <div class="card-header ">
                    <h6 class="title d-inline">Articles</h6>
                    <div class="float-right">
                        <form action="{{ url('/recherche') }}" method="POST">
                            @csrf
                            <input type="text" name="auteur" id="auteur" class="form-control">
                            <button type="submit" class="btn btn-sm btn-primary">rechercher</button>
                        </form>
                    </div>
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


    // set the dimensions and margins of the graph
    var margin = {top: 10, right: 30, bottom: 30, left: 40},
        width = 460 - margin.left - margin.right,
        height = 400 - margin.top - margin.bottom;

    // append the svg object to the body of the page
    var svg = d3.select("#my_dataviz")
      .append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
      .append("g")
        .attr("transform",
              "translate(" + margin.left + "," + margin.top + ")");

    // read data
    axios.get('http://localhost:8000/data/density')
    .then(response => {
        let {data} = response

        var x = d3.scaleLinear()
            .domain([1, 50])
            .range([ margin.left, width - margin.right ]);

        svg.append("g")
            .attr("transform", "translate(0," + height + ")")
            .call(d3.axisBottom(x));

        var y = d3.scaleLinear()
            .domain([1, 50])
            .range([ height - margin.bottom, margin.top ]);

        svg.append("g")
            .call(d3.axisLeft(y));

        var color = d3.scaleLinear()
                .domain([0, 0.1])
                .range(["#69b3a2", "#69b3fe", "#69a4fe", "#89b4f5"])

        // compute the density data
        var densityData = d3.contourDensity()
            .x(function(d) { return x(d.latitude); })
            .y(function(d) { return y(d.longitude); })
            .size([width, height])
            .bandwidth(20)(data)

      // show the shape!
        svg.insert("g", "g")
            .selectAll("path")
            .data(densityData)
            .enter().append("path")
            .attr("d", d3.geoPath())
            .attr("fill", function(d) { return color(d.value); })
    })
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
                .padAngle(0.05)
                .sortSubgroups(d3.descending)(matrix)
            svg
                .datum(res)
                .append("g")
                .selectAll("path")
                .data(function(d) { return d; })
                .enter()
                .append("path")
                    .attr("d", d3.ribbon()
                    .radius(190)
                    )
                .style("fill", function(d){ return(colors[d.source.index]) })
                .style("stroke", "black");

            var group = svg
                .datum(res)
                .append("g")
                .selectAll("g")
                .data(function(d) { return d.groups; })
                .enter()

            group.append("g")
                .append("path")
                .style("fill", "grey")
                .style("stroke", "black")
                .attr("d", d3.arc()
                .innerRadius(190)
                .outerRadius(200)
                )

            group
                .selectAll(".group-tick")
                .data(function(d) { return groupTicks(d, 25); })    // Controls the number of ticks: one tick each 25 here.
                .enter()
                .append("g")
                .attr("transform", function(d) { return "rotate(" + (d.angle * 180 / Math.PI - 90) + ") translate(" + 200 + ",0)"; })
                .append("line")               // By default, x1 = y1 = y2 = 0, so no need to specify it.
                .attr("x2", 6)
                .attr("stroke", "black")

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
                .style("font-size", 12)


            function groupTicks(d, step) {
                var k = (d.endAngle - d.startAngle) / d.value;
                return d3.range(0, d.value, step).map(function(value) {
                    return {value: value, angle: value * k + d.startAngle};
                });
            }

        })
    </script>
    <script>
        var w = 800,
        h = 400;

        axios.get('http://localhost:8000/data/voronoi')
        .then(response => {
            let {data} = response
            data = [
      [22.7433333333000,  53.4869444444000],
      [23.2530555556000,  53.5683333333000],
      [23.1066666667000,  53.7200000000000],
      [22.8452777778000,  53.7758333333000],
      [23.0952777778000,  53.4413888889000],
      [23.4152777778000,  53.5233333333000],
      [22.9175000000000,  53.5322222222000],
      [22.7197222222000,  53.7322222222000],
      [22.9586111111000,  53.4594444444000],
      [23.3425000000000,  53.6541666667000],
      [23.0900000000000,  53.5777777778000],
      [23.2283333333000,  53.4713888889000],
      [23.3488888889000,  53.5072222222000],
      [23.3647222222000,  53.6447222222000]
    ];
            var vertices = data.map(function(point) {return [2*h*(point[0]-22.5), h - 2*h*(point[1]-53.4)]})

            var svg = d3.select("#voronoi-chart")
                .append("svg:svg")
                .attr("width", w)
                .attr("height", h);

            var paths, points;

            points = svg.append("svg:g").attr("id", "points");
            paths = svg.append("svg:g").attr("id", "point-paths");

            paths.selectAll("path")
                .data(d3.geom.voronoi(vertices))
                .enter().append("svg:path")
            .attr("d", function(d) { return "M" + d.join(",") + "Z"; })
            .attr("id", function(d,i) {
            return "path-"+i; })
            .attr("clip-path", function(d,i) { return "url(#clip-"+i+")"; })
            .style("fill", d3.rgb(230, 230, 230))
            .style('fill-opacity', 0.4)
            .style("stroke", d3.rgb(50,50,50));

            points.selectAll("circle")
                .data(vertices)
                .enter().append("svg:circle")
                .attr("id", function(d, i) {
                    return "point-"+i; })
                .attr("transform", function(d) { return "translate(" + d + ")"; })
                .attr("r", 2)
                .attr('stroke', d3.rgb(0, 50, 200));
        })
    </script>
@endpush

