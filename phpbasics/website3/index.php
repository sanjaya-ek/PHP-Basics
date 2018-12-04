<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My website</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <script>
      function showSuggestion(str){
        if(str.length == 0){
          document.getElementById('output').innerHTML = '';
        }else{
          //AJAX REQ
          var xmlhttp = new XMHttpRequest();
          xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
              document.getElementById('output').innerHTML = this.responseText;
            }
          }
        }
      }
    </script>
  </head>
  <body>
    <div class="container">
      <h1>Search Users</h1>
      <form>
        Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
      </form>
      <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
      </div>
    </body>
</html>
