
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/newBlog.css"></head>
    <title>Create a Blog</title>
</head>
<body style="background-color:#798DC5;">

    
<div class="navbar">
    <a href="<?php echo site_url('Blog/index'); ?>">Ivana_Blogs</a>
    <a href="<?php echo site_url('Blog/pagination'); ?>">Pagination</a>

</div>

<h2 style="color:black;">Add a Blog!</h2>

<div class="container">
<form action="<?php echo site_url('Blog/submit_form'); ?>" method = "POST"> 
        <div class="row">
            <div class="col-25">
                <label for="title">Title</label>
            </div>
            <div class="col-75">
                <input type="text" id="title" name="title" placeholder="Title(50 character limit) . . ." maxlength="50" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="image_url">Image URL</label>
            </div>
            <div class="col-75">
                <input type="text" id="image_url" name="image_url" placeholder="URL of picture . . ." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="tags">Tags</label>
            </div>
            <div class="col-75">
                <input type="text" id="tags" name="tags" placeholder="Separate each tag with a comma(50 character limit) . ." maxlength="50" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="description">Description</label>
            </div>
            <div class="col-75">
                <input type="text" id="description" name="description" placeholder="Write your Blog (500 character limit). ." maxlength="500" required>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
</form>
</div>

</body>
</html>