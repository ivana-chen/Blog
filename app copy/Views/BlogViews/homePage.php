<!DOCTYPE html>
<html>
<head>
    <title>Ivana_Blogs</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/homePage.css">
</head>
<body>

<div class="header">
  <h2>Ivana_Blogs</h2>
</div>

<nav class="navbar">
    <a href="<?php echo site_url('Blog/newBlog') ?>">Create A Blog</a>
    <a href="<?php echo site_url('Blog/pagination') ?>">Pagination</a>
</nav>

<div class="row">
    <div class="maincolumn">
        <?php $rank = 1; // Initialize rank counter for top 5?>
        <?php foreach ($blog_data as $blog): ?>
            <?php if ($rank <= 5): // Display only for top 5 blogs ?>
                <div class="card">
                    <div class="blog-rank">#<?php echo $rank; // Display the rank ?></div>
                    <h2><?php echo htmlspecialchars($blog->blog_title); ?></h2>
                    <h5><strong>Tags:</strong> <?php echo htmlspecialchars(implode(', ', array_unique(explode(',', $blog->tag_names)))); ?></h5>
                    <img src="<?php echo htmlspecialchars($blog->blog_image_url); ?>" alt="Blog Image" style="height:200px;">
                    <p><?php echo htmlspecialchars($blog->blog_description); ?></p>
                </div>
                <?php $rank++; // Increment rank ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>