<?php

$repository = new BlogPostRepository();
$criteria = new Criteria();

$criteria->equals('BlogPost.ID', $blog_post_id);
$criteria->limit($limit);
$related_blog_poasts = $repository->getTagRelated($criteria);
