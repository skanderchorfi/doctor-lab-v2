@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card card-accent-danger">
                <div class="card-header">Diagram Chord</div>
                <div class="card-body">
                    <div class="col-md-10" id="chord-diagram">
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
<script src="https://d3js.org/d3.v3.min.js"></script>
<script>
    if(document.getElementById('chart')) {
        axios.get('http://localhost:8000/data/chord')
            .then(response => {
                let {matrix, nameProvider} = response.data
                console.log(matrix, nameProvider)
                let NameProvider = nameProvider
                var colors = ["#C4C4C4","#69B40F","#EC1D25","#C8125C","#008FC8","#10218B","#134B24","#737373"];

                var w = 980,
                h = 800,
                r1 = h / 2,
                r0 = r1 - 110;

                var chord = d3.layout.chord()
                .padding(.02)
                .sortSubgroups(d3.descending)
                .sortChords(d3.descending);

            var arc = d3.svg.arc()
                .innerRadius(r0)
                .outerRadius(r0 + 10);

            var svg = d3.select("#chart")
                .append('svg')
                .attr("width", w)
                .attr("height", h)
                .append("svg:g")
                .attr("id", "circle")
                .attr("transform", "translate(" + w / 2 + "," + h / 2 + ")");

            svg.append("circle")
                .attr("r", r0 + 20);

            chord.matrix(matrix);

            var g = svg.selectAll("g.group")
                .data(chord.groups())
                .enter().append("svg:g")
                .attr("class", "group")

            g.append("svg:path")
                .style("stroke", "grey")
                .attr("d", arc);

            g.append("svg:text")
                .each(function(d) {
                    d.angle = (d.startAngle + d.endAngle) / 2;
                })
                .attr("dy", ".35em")
                .style("font-family", "helvetica, arial, sans-serif")
                .style("font-size", "9px")
                .attr("text-anchor", function(d) {
                    return d.angle > Math.PI ? "end" : null;
                })
                .attr("transform", function(d) {
                    return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")" +
                        "translate(" + (r0 + 26) + ")" +
                        (d.angle > Math.PI ? "rotate(180)" : "");
                })
                .text(function(d) {
                    return NameProvider[d.index];
                });

            var colors = d3.scale.category20c();

            var chordPaths = svg.selectAll("path.chord")
                .data(chord.chords())
                .enter().append("svg:path")
                .attr("class", "chord")
                .style("stroke", "grey")
                .style("fill", function(d, i) {
                    return colors(i)
                })
                .attr("d", d3.svg.chord().radius(r0))

            })
    }
</script>
@endpush
