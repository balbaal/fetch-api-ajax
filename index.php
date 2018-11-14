<html lang="en">
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://use.fontawesome.com/1e803d693b.js"></script>

    <style>
      i {  vertical-align: middle; }
      .table-users tbody tr:hover {
        cursor: pointer;
        background-color: #eee;
      }
      .nav-user-photo {
          vertical-align: middle;
      }
      .user_panel {
          width: 60%;
          margin: 0 auto;
      }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fetch api</title>
  </head>
  <body>
    <div style="margin-top: 50px;" class="container">
      <div class="row">
        <div class="panel panel-default user_panel">
          <div class="panel-heading">
            <h3 class="panel-title">User List : <span id="user-count"></span></h3>
          </div>
          
          <div class="panel-body">
            <div class="table-container">
              <table class="table-users table" border="0">
                <tbody id="user-list">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
        $.ajax({
          url: "https://randomuser.me/api/?results=6",
          success: function(res){
            let data = res.results;
            console.log(data);

            $("#user-count").text(data.length);

            data.forEach(dat => {
              let userList = '<tr><td width="10"><img class="pull-left img-circle nav-user-photo" width="50" src="'+dat.picture.large+'" /></td><td>'+dat.name.title +' '+dat.name.first+ '<br><i class="fa fa-envelope"></i></td><td>'+dat.gender+'</td><td align="left">email:  '+dat.email+'<br><small class="text-muted">registered : '+dat.registered.date+'</small></td></tr>';

              $("#user-list").append(userList);
            });
          },
          error:function(xhr, status){
            console.log(xhr.status);
          }
        });
    </script>
  </body>
</html>