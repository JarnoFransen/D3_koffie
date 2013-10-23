<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Koffie visualisatie</title>
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="d3.v3.min.js"></script>      
  </head>
  <body>
    <div id="header-container"></div>
    <div id="container">
      <h1>Koffieautomaat visualisatie</h1>
      <ul>
        <li style="background-color: #301e1a;">koffie</li>
        <li style="background-color: #a6612a;">espresso</li>
        <li style="background-color: #c69c6a;">cappuccino</li>
        <li style="background-color: #4a3229;">warme choco</li>
        <li style="background-color: #79aba2;">warm water</li>
        <li style="background-color: #a04b26;">overig</li>
      </ul>
      <p class="left">links</p>
      <p class="right">rechts</p>
      <div id="donut"></div>
      <div id="donut2"></div>
      <script type="text/javascript">
      var data = [63, 36, 31, 9, 0, 9];

      var w = 350,
          h = 350,
          r = 175,
          ir = 100,
          labelr = r + 30, // radius for label anchor
          color = d3.scale.ordinal().range(["#301e1a", "#a6612a", "#c69c6a", "#4a3229", "#79aba2", "#a04b26"]).domain([0, 1, 2, 3, 4, 5]);
          donut = d3.layout.pie().sort(null),
          arc = d3.svg.arc().innerRadius(ir).outerRadius(r);

      var svg = d3.select("#donut").append("svg:svg")
          .attr("width", w)
          .attr("height", h)
        .append("svg:g")
          .attr("transform", "translate(" + w / 2 + "," + h / 2 + ")");

      var arcs = svg.selectAll("path")
          .data(donut(data))
            .enter().append("svg:path")
              .attr("fill", function(d, i) { return color(i); })
              .attr("d", arc)
              .each(function(d) { this._current = d; });

      </script>      
      <script type="text/javascript">
      var data = [134, 88, 31, 4, 2,20];

      var w = 350,
          h = 350,
          r = 175,
          ir = 100,
          labelr = r + 30, // radius for label anchor
          color = d3.scale.ordinal().range(["#301e1a", "#a6612a", "#c69c6a", "#4a3229", "#79aba2", "#a04b26"]).domain([0, 1, 2, 3, 4, 5]);
          donut = d3.layout.pie().sort(null),
          arc = d3.svg.arc().innerRadius(ir).outerRadius(r);

      var svg = d3.select("#donut2").append("svg:svg")
          .attr("width", w)
          .attr("height", h)
        .append("svg:g")
          .attr("transform", "translate(" + w / 2 + "," + h / 2 + ")");

      var arcs = svg.selectAll("path")
          .data(donut(data))
            .enter().append("svg:path")
              .attr("fill", function(d, i) { return color(i); })
              .attr("d", arc)
              .each(function(d) { this._current = d; });

      </script>
      <br class="clear">
    </div>
  </body>
<html>