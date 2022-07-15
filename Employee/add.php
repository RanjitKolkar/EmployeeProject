<?php include("admin_header.php")?>
<div class="container mt-2">
    <div class="jumbotron">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Add Employee Record to databse</h2>
            </div>
           
            <form action="insert-process.php" method="post">

                <div class="form-group">
                    <label>Rank</label>
                    <input type="text" name="rank" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required="">
                </div>                        



                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" required="">
                </div>

                <input type="submit" class="btn btn-primary" name="submit" value="add">
            </form>
        </div>
    </div>        
    </div>
</div>

