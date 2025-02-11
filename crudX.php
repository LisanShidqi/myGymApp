<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
</head>
<body>

    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Plan </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Plan Name </label>
                            <input type="text" name="planName" class="form-control" placeholder="Enter Plan Name">
                        </div>

                        <div class="form-group">
                            <label> Plan Description </label>
                            <input type="text" name="planDescription" class="form-control" placeholder="Enter Plan Description">
                        </div>

                        <div class="form-group">
                            <label> Plan Duration </label>
                            <input type="text" name="planDuration" class="form-control" placeholder="Enter Plan Duration">
                        </div>

                        <div class="form-group">
                            <label> Plan Member </label>
                            <input type="text" name="planMembers" class="form-control" placeholder="Enter Plan Member">
                        </div>

                        <div class="form-group">
                            <label> Plan Cost</label>
                            <input type="number" name="planCost" class="form-control" placeholder="Enter Plan Cost">
                        </div>

                        <div class="form-group">
                            <label> Trainer </label>
                            <input type="text" name="planTrainers" class="form-control" placeholder="Enter Trainer Name">
                        </div>

                        <div class="form-group">
                            <label> Owner ID </label>
                            <input type="text" name="ownerId" class="form-control" placeholder="Enter Owner ID">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> Plan Name </label>
                            <input type="text" name="planName" id="planName" class="form-control"
                                placeholder="Enter Plan Name">
                        </div>

                        <div class="form-group">
                            <label> Plan Description </label>
                            <input type="text" name="planDescription" id="planDescription" class="form-control"
                                placeholder="Enter Description">
                        </div>

                        <div class="form-group">
                            <label> Plan Duration (months) </label>
                            <input type="text" name="planDuration" id="planDuration" class="form-control"
                                placeholder="Enter Duration">
                        </div>

                        <div class="form-group">
                            <label> Plan Member </label>
                            <input type="text" name="planMembers" id="planMembers" class="form-control"
                                placeholder="Enter member amount">
                        </div>

                        <div class="form-group">
                            <label> Plan Cost </label>
                            <input type="text" name="planCost" id="planCost" class="form-control"
                                placeholder="Enter Cost">
                        </div>

                        <div class="form-group">
                            <label> Trainer </label>
                            <input type="text" name="planTrainers" id="planTrainers" class="form-control"
                                placeholder="Enter Trainers Name">
                        </div>

                        <div class="form-group">
                            <label> Owner ID </label>
                            <input type="text" name="ownerId" id="ownerId" class="form-control"
                                placeholder="Enter Trainers Name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->
                        <h4 id="fname"> <?php echo ''; ?> </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2> PHP CRUD Bootstrap MODAL (POP UP Modal) </h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD DATA
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'gyma');

                $query = "SELECT * FROM plan";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">Plan Name</th>
                                <th scope="col">Plan Description </th>
                                <th scope="col"> Plan Duration (months) </th>
                                <th scope="col"> Plan Member </th>
                                <th scope="col"> Plan Cost </th>
                                <th scope="col"> Trainer </th>
                                <th scope="col"> Owner ID </th>
                                <th scope="col"> VIEW </th>
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['planId']; ?> </td>
                                <td> <?php echo $row['planName']; ?> </td>
                                <td> <?php echo $row['planDescription']; ?> </td>
                                <td> <?php echo $row['planDuration']; ?> </td>
                                <td> <?php echo $row['planMembers']; ?> </td>
                                <td> <?php echo $row['planCost']; ?> </td>
                                <td> <?php echo $row['planTrainers']; ?> </td>
                                <td> <?php echo $row['ownerId']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-info viewbtn"> VIEW </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#planName').val(data[1]);
                $('#planDescription').val(data[2]);
                $('#planDuration').val(data[3]);
                $('#planMembers').val(data[4]);
                $('#planCost').val(data[5]);
                $('#planTrainers').val(data[6]);
                $('#ownerId').val(data[6]);
            });
        });
    </script>


</body>
</html>