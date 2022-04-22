<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['is_admin'], $_SESSION['adminEmail'])) {
    header("refresh:0.001; url=../index.php");
}
include("AdminHeader.php");
include("../DB/dbConnection.php");
?>
<div class="col-sm-9 mt-5">
    <p class="bg-dark text-white p-2">List of Feedbacks</p>
    <?php
    $sql = "select * from feedback";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        echo '
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Feedback ID</th>
                    <th scope="col">Feedback </th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>';
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <th scope='row'>" . $row['id'] . "</th>
                <td>" . $row['feedback'] . "</td>
                <td>" . $row['stu_id'] . "</td>
                <td><form action='' method='post' class='d-inline'>
                    <input type='hidden' name='id' value=" . $row['id'] . '>
                    </div><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                </form></td>
            </tr>';
        }
        echo '</tbody>
        </table>';
    } else {
        echo "No Result Found";
    }
    if (isset($_POST['delete'])) {
        $sql = "delete from feedback where id={$_POST['id']}";
        if ($con->query($sql) == TRUE)
            header("refresh:0.001; url=feedback.php");
        else
            echo "unable To delete";
    }
    ?>