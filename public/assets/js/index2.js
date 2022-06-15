$(function () {
  "use strict";

  // chart 1

  $("#chart1").sparkline(
    [
      5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8, 9, 10, 8, 6, 4, 5, 8, 7, 10, 9, 5, 8, 7, 9, 5, 4, 8, 7, 10, 9, 5, 8,
      7, 9, 5, 4,
    ],
    {
      type: "bar",
      height: "25",
      barWidth: "2",
      resize: true,
      barSpacing: "2",
      barColor: "#008cff",
    }
  );

  // chart 2

  $("#chart2").sparkline(
    [
      5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8, 9, 10, 8, 6, 4, 5, 8, 7, 10, 9, 5, 8, 7, 9, 5, 4, 8, 7, 10, 9, 5, 8,
      7, 9, 5, 4,
    ],
    {
      type: "bar",
      height: "25",
      barWidth: "2",
      resize: true,
      barSpacing: "2",
      barColor: "#fd3550",
    }
  );

  // chart 3

  $("#chart3").sparkline(
    [
      5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8, 9, 10, 8, 6, 4, 5, 8, 7, 10, 9, 5, 8, 7, 9, 5, 4, 8, 7, 10, 9, 5, 8,
      7, 9, 5, 4,
    ],
    {
      type: "bar",
      height: "25",
      barWidth: "2",
      resize: true,
      barSpacing: "2",
      barColor: "#15ca20",
    }
  );

  // chart 4

  $("#chart4").sparkline(
    [
      5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8, 9, 10, 8, 6, 4, 5, 8, 7, 10, 9, 5, 8, 7, 9, 5, 4, 8, 7, 10, 9, 5, 8,
      7, 9, 5, 4,
    ],
    {
      type: "bar",
      height: "25",
      barWidth: "2",
      resize: true,
      barSpacing: "2",
      barColor: "#ff9700",
    }
  );

  // chart 5

  $("#chart5").sparkline(
    [
      5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8, 9, 10, 8, 6, 4, 5, 8, 7, 10, 9, 5, 8, 7, 9, 5, 4, 8, 7, 10, 9, 5, 8,
      7, 9, 5, 4,
    ],
    {
      type: "bar",
      height: "25",
      barWidth: "2",
      resize: true,
      barSpacing: "2",
      barColor: "#0dceec",
    }
  );

  // chart 6

  $("#chart6").sparkline(
    [
      5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8, 9, 10, 8, 6, 4, 5, 8, 7, 10, 9, 5, 8, 7, 9, 5, 4, 8, 7, 10, 9, 5, 8,
      7, 9, 5, 4,
    ],
    {
      type: "bar",
      height: "25",
      barWidth: "2",
      resize: true,
      barSpacing: "2",
      barColor: "#223035",
    }
  );

  // worl map

  jQuery("#dashboard-map").vectorMap({
    map: "world_mill_en",
    backgroundColor: "transparent",
    borderColor: "#818181",
    borderOpacity: 0.25,
    borderWidth: 1,
    zoomOnScroll: false,
    color: "#009efb",
    regionStyle: {
      initial: {
        fill: "#A72185",
      },
    },
    markerStyle: {
      initial: {
        r: 9,
        fill: "#fff",
        "fill-opacity": 1,
        stroke: "#000",
        "stroke-width": 5,
        "stroke-opacity": 0.4,
      },
    },
    enableZoom: true,
    hoverColor: "#009efb",
    markers: [
      {
        latLng: [21.0, 78.0],
        name: "Tandai",
      },
    ],
    hoverOpacity: null,
    normalizeFunction: "linear",
    scaleColors: ["#b6d6ff", "#005ace"],
    selectedColor: "#c9dfaf",
    selectedRegions: [],
    showTooltip: true,
  });

  // chart 8

  $("#chart8").sparkline(
    [5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8, 9, 10, 8, 6, 4, 5, 8, 7, 10, 9, 5, 8, 7, 9, 5, 4, 8],
    {
      type: "line",
      width: "100%",
      height: "40",
      lineWidth: "2",
      lineColor: "#0dceec",
      fillColor: "rgba(13, 206, 236, 0.2)",
      spotColor: "#0dceec",
    }
  );

  // chart 9

  $("#chart9").sparkline(
    [5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8, 9, 10, 8, 6, 4, 5, 8, 7, 10, 9, 5, 8, 7, 9, 5, 4, 8],
    {
      type: "line",
      width: "100%",
      height: "40",
      lineWidth: "2",
      lineColor: "#ff9700",
      fillColor: "rgba(255, 151, 0, 0.2)",
      spotColor: "#ff9700",
    }
  );

  // chart 10

  $("#chart10").sparkline(
    [5, 8, 7, 10, 9, 10, 8, 6, 4, 6, 8, 7, 6, 8, 9, 10, 8, 6, 4, 5, 8, 7, 10, 9, 5, 8, 7, 9, 5, 4, 8],
    {
      type: "line",
      width: "100%",
      height: "40",
      lineWidth: "2",
      lineColor: "#15ca20",
      fillColor: "rgba(21, 202, 32, 0.2)",
      spotColor: "#15ca20",
    }
  );

  // chart 11

  Morris.Donut({
    element: "chart11",
    data: [
      {
        label: "Samsung",
        value: 15,
      },
      {
        label: "Nokia",
        value: 30,
      },
      {
        label: "Apple",
        value: 20,
      },
    ],
    resize: true,
    colors: ["#008cff", "#15ca20", "#fd3550"],
  });
});
