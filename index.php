<!doctype html>
<html ng-app>
  <head>
    <script src="js/angular.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <style> 
      #panel, #flip {
          padding: 5px;
          text-align: center;
          background-color: #e5eecc;
          border: solid 1px #c3c3c3;
      }

      #panel {
          padding: 50px;
          display: none;
      }
    </style>
  </head>
  <body>
    <div>
      <label>Name:</label>
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
      <hr>
      <h1>Hello {{yourName}}!</h1>
    </div>

    <div id="flip">Click to slide down panel</div>
    <div id="panel">Hello world!</div>
  </body>

  <script> 
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideDown("slow");
        });
    });
</script>
</html>
<?php
$text = "Hi..";
echo $text;
?>