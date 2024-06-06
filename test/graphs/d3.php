<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D3 Chart Example</title>
    <script src="https://d3js.org/d3.v6.min.js"></script>
    <style>
        .bar {
            fill: steelblue;
        }
    </style>
</head>
<body>
    <svg width="500" height="300"></svg>
    <script>
        const data = [30, 86, 168, 281, 303, 365];
        const width = 500;
        const height = 300;
        const barWidth = width / data.length;

        const svg = d3.select("svg");

        svg.selectAll("rect")
            .data(data)
            .enter()
            .append("rect")
            .attr("class", "bar")
            .attr("x", (d, i) => i * barWidth)
            .attr("y", d => height - d)
            .attr("width", barWidth - 2)
            .attr("height", d => d);
    </script>
</body>
</html>
