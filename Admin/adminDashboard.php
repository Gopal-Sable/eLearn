<?php
include("adminHeader.php")
?>
            <div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                             <div class="card-header">Courses</div>
                             <div class="card-body">
                                 <h4 class="card-title">5</h4>
                                 <a href="#" class="btn text-white">View</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                             <div class="card-header">Students</div>
                             <div class="card-body">
                                 <h4 class="card-title">50</h4>
                                 <a href="#" class="btn text-white">View</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-primary mb-3" style="max-width:18rem;">
                             <div class="card-header">Sold</div>
                             <div class="card-body">
                                 <h4 class="card-title">10</h4>
                                 <a href="#" class="btn text-white">View</a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="mx-5 mt-5 text-center">
                    <!-- table -->
                    <p class="bg-dark text-white p-2">Course Ordered</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col">Order ID</th>
                                <th class="col">Course ID</th>
                                <th class="col">Student Email</th>
                                <th class="col">Order Date</th>
                                <th class="col">Amount</th>
                                <th class="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <th scope="row">22</th>
                            <td>100</td>
                            <td>sonam@gmail.com</td>
                            <td>20/10/2020</td>
                            <td>2000</td>
                            <td><button type="submit" class="btn btn-secondary"name="delete"value="Delete"><i class="far fa-trash-alt"></i></button></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><?php
include("AdminFooter.php")?>