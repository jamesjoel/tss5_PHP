<?php
include("../config/db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
    header("location:../index.php");
}
include("includes/header.php");
include("includes/navbar.php");

$que = "SELECT * FROM category";

$result = mysqli_query($con, $que);

// $data = mysqli_fetch_assoc($result);

// ("name"=>"Elector")


?>
<div class="container mt-3" style="min-height:600px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4 class="text-center">View All Category</h4>
            <table class="table table-dark table-bordered table-striped">
                <tr>
                    <th>S.No.</th>
                    <th>Category Name</th>
                    <th>Delete</th>
                </tr>
                <?php
                while($data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data["name"]."</td>";
                    echo "<td><a href='delete_category.php?id=".$data['id']."' class='btn btn-danger btn-sm'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>