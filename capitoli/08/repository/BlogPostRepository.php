<?php

class BlogPostRepository {

  protected $entity_manager;
  
  //...

  public function getTagRelated($blog_post_id, $limit) {
    
    $query = $this->entity_manager
                  ->createQuery('SELECT t.id ' .
                                'FROM ILC\BlogBundle\Entity\Tag t ' .
                                'JOIN t.blog_posts bp ' .
                                'WHERE bp.id = :blog_post_id');

    $tags = $query->execute(array('blog_post_id' => $blog_post_id), \Doctrine\ORM\Query::HYDRATE_ARRAY);
    
    $tag_ids = array_map(function($value){ return $value['id']; }, $tags);
    $query = $this->entity_manager
                  ->createQuery('SELECT DISTINCT b ' .
                                'FROM ILC\BlogBundle\Entity\BlogPost b ' .
                                'JOIN b.tags t ' .
                                'WHERE t.id IN ( ' . \implode(', ', $tag_ids) . ') ' .
                                'AND b.id <> :blog_post_id')
            ->setMaxResults($limit);

    return $query->execute(array('blog_post_id' => $blog_post_id));
  }

}

