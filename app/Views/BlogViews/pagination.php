<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/pagination.css"></head>
    <title>Blog Pagination</title>  
</head>
<body style="background-color:#798DC5;">

<div class="navbar">
    <a href="<?php echo site_url('Blog/index') ?>">Blogs</a>

    <a href="<?php echo site_url('Blog/newBlog') ?>">Create a Blog</a>

</div>
<h1>Pagination</h1>

<div class="blogs-container">
    <?php foreach ($blogs as $blog): ?>
        <div class="blog">
            <h2 class="blog-title"><?php echo $blog['blog_title']; ?></h2>
            <img src="<?php echo htmlspecialchars($blog['blog_image_url'], ENT_QUOTES, 'UTF-8'); ?>" alt="Blog Image">
            <?php 
                $tags = explode(',', $blog['tag_names']);
                $unique_tags = array_unique($tags);
                $unique_tags_string = implode(', ', $unique_tags);
            ?>
            <p class="blog-tags">Tags: <?php echo $unique_tags_string; ?></p>
            <p class="blog-description"><?php echo $blog['blog_description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

<!-- Display pagination links -->
<div class="pagination">
    <?php echo $pager->links(); ?>
</div>

</body>
</html>