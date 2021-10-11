<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript">
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'http://api.ipstack.com/check?access_key=02fe41c8f5977fab7d9fd81ee321c7a4 & output = json',
        success: function(responseData){
          alert(responseData["country_name"]+" ,"+responseData["region_name"]+" ,"+responseData["city"];
        }
        /*error: function(XMLHttpRequest, textStatus, errorThrown){
          alert(errorThrown);
        }*/
    });
</script>
</head>
<body>
  <div id="line_top_x">hello</div>
</body>
</html>

