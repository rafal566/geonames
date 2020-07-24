<html>
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>jQuery + AJAX + PHP</title>
    <style>
  table, tr, td {
    border: 2px solid black;
    border-collapse: collapse;
  }
  table td:nth-child(3n+1) {
    font-weight: bold;
    width: 150px;
  }

  table td:nth-child(2n+2) {
    width: 150px;
  }

</style>
    </head>
  <body>
    <h1>Some facts about my village</h1>
    <table id="place">
    </table>
    <script>
    var data = null;
    $.ajax({
        method: "GET",
        cache: false,
        url: "response.php",
        success: function (data) {
          data= JSON.parse(data);
          var temp = (data['geonames'][0]);
          // console.log(temp);
          $("#place").append("<tr><td>" + "Name:" + "</td><td>" + temp['name'] + "</td></tr>");
          $("#place").append("<tr><td>" + "Country:" + "</td><td>" + temp['countryName'] + "</td></tr>");
          $("#place").append("<tr><td>" + "District:" + "</td><td>" + temp['adminName1'] + "</td></tr>");
          $("#place").append("<tr><td>" + "Latitude:" + "</td><td>" + temp['lat'] + "</td></tr>");
          $("#place").append("<tr><td>" + "Longitude:" + "</td><td>" + temp['lng'] + "</td></tr>");

          // $.each(temp, function(key, value) {
          //   $("#place").append("<tr><td>" + key + "</td><td>" + value + "</td></tr>");
          // })
        }
    })
    </script>
  </body>
</html>
