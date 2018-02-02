<?php

function display_title(){
    echo "Signup Page";
}

function display_content(){ ?>

    <section class="section-steps">
        <div class="row">
            <form action="add_item.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-4">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file form-control-sm">
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Description:</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Category:</label>
                        <input type="text" name="category" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Price:</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                </div>
                <input type="submit" class="btn btn-success" name="submit" value="Submit">
            </form>
        </div>
    </section>

<?php
}
    require 'index.php';

?>