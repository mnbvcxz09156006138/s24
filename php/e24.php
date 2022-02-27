<?php
include"detabase.php";
$x=mysqli_query($connection,"SELECT * FROM messages");
?>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css\s24.css">

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> اسمای مخاطبین</a>
            </div>
        </nav>
        <div class="row ">
            <div class="col-2 mt-3">
                <button type="button" id="btn_add" class="btn btn-primary p-2" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                    +<i class="fas fa-plus" ></i>
                    
                </button>
                <div class="modal fade" id="modl1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modl7"> +</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" >
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">نام طرف</label>
                                        <input type="text" name="firstname" class="form-control" id="modl2" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"> نام خانوادگی</label>
                                        <input type="text" name="lastname" class="form-control" id="modl3" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"> موبایل</label>
                                        <input type="number" name="mobile" class="form-control" id="modl4" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"> ایمیل</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3"> سیوکردن</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 mt-3">
                <form action="a.php" method="post">
                    <button type="submit"  name="btn_del" id="btn_delete" class="btn btn-danger "> -<i class="fas fa-trash"></i></button>
                </form>
            </div>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table list-table table-light table-nowrap align-middle table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" class="ps-4" style="width: 50px;">
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="contacusercheck">
                                    <label class="form-check-label" for="contacusercheck"></label>
                                </div>
                            </th>
                            <th scope="col" style="width: 50px;">#</th>
                            <th scope="col"> نام خانوادگی</th>
                            <th scope="col">ایمیل</th>
                            <th scope="col">  شماره موبایل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($x as $list) : ?>
                            <tr class=" mt-2">
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                        <label class="form-check-label" for="contacusercheck1"></label>
                                    </div>
                                </th>
                                <td>
                                    <?php echo $list["id"];  ?>
                                </td>
                                <td>
                                    <?php echo $list["Last"];  ?>
                                </td>
                                <td>
                                    <?php echo $list["Email"];  ?>
                                </td>
                                <td>
                                    <?php echo $list["Mobile"];  ?>
                                </td>
                                <td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                  
                              
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>
</html>