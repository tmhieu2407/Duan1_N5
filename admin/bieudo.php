<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
          // Set Data
          const data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'],

            <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $key => $value) {
              extract($value);
              $dauphay = ($i == $tongdm) ? "" : ",";
              echo "['" . $tendm . "'," . $countsp . "]" . $dauphay;

              $i += 1;
            }
            ?>
          ]);

          // Set Options
          const options = {
            title: 'Biểu đồ danh mục',
            is3D: true
          };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
