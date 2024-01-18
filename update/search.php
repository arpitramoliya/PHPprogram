
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Filter Mange</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                <div class="card-header">
                    <h4>Filter Data in PHP MYSQL</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <form method="GET" action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="" name="search" value="" placeholder="Search your Data">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                                <a href="form.php" class="btn btn-warning">New Aedd!</a>
                        </form>
                      </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="cord-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
									<th>Actions</th>
                                </tr>
                            </thead>
                             <tbody id="tableData">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function(){


            //delete data
            function deleteData(param){


            }

            $.ajax({
                url:'data.php',
                method:'GET',
                success:function(res){
                    var arpit = JSON.parse(res);
                    // console.log(arpit[1][0]);
                    var i = 0;
                    var data = '';
                    arpit.forEach(element => {
                        console.log(element);
                        data += `<tr>`;
                        element.forEach(el => {
                            data += `<td>${el}</td>`; 

                        });

                        data += `<td><button class="btn btn-primary data-id="${arpit[i][0]}" id="update">Edit</button>`;
                        data += ` <button class="btn btn-danger" data-id="${arpit[i][0]}" id="delete">Delete</button>
                        </td>`;
                        data += `</tr>`;
                        i++;
                    });

                    data += `</tr>`;
                    $('#tableData').append(data);
                    // console.log(data);
                }
            });
            // $('#deleteData').click(function(){
        //     alert('Hello');
        // });

        $("body").delegate("#delete", "click", function(data){

            //delete id 
            var val = $(this).attr('data-id');
            // alert(val);
            $.ajax({
                url:'backend.php',
                method:'POST',
                data:{deleteId:val},
                success:function(res){
                location.reload();
                    alert(res);
                }
            });
        });
        $("body").delegate("#update", "click", function(data){
            alert("some data");
             var val = $(this).attr('data-id');
            $.ajax({
            url:'backend.php',
            method:'POST',
            data:{
            //success:function(res){
            //var userData=JSON.parse(res);
            updateId:val,
            // fullname:fullname,
            // email:email,
            // password:password
            },
            success:function(data){
            console.log(data);
            }
            
            });
        });
        });//main end
    </script>
</body>
</html>