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

?>
<div class="container mt-4" style="min-height: 600px;">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="save_product.php" method="post">
            <div class="card">
                <div class="card-header">
                    <h4>Add New Product</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="product_name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" name="product_price" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Product Category</label>
                        <select class="form-control" name="category">
                            <option>Select</option>
                            <?php
                                while($data=mysqli_fetch_assoc($result))
                                {
                                    echo "<option>".$data['name']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Product Detail</label>
                        <textarea name="product_detail" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Discount</label>
                        <div class="input-group">
                            <input type="text" name="discount" class="form-control"/>
                            <div class="input-group-prepend">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Add"/>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>