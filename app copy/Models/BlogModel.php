<?php
namespace App\Models; 

use CodeIgniter\Model; 

class BlogModel extends Model
{
	protected $table = 'Blogs';
	protected $primaryKey = 'id';
	protected $allowedFields = ['title', 'description', 'image_url'];

    public function  __construct()
    {
        parent::__construct();
        
    } 
	/**
	 * Returns the top 5 blogs, based on blog creation time (most recent = first)
	 * Performs a left join BlogTag table based on blog id and left join Tags with tag name
	 * this makes sure that regardless of matching row, it will be included in result. 
	 */
	public function topBlogs(){
		return $this->select('b.id AS blog_id, b.title AS blog_title, b.description AS blog_description, b.image_url AS blog_image_url, GROUP_CONCAT(t.tag_name) AS tag_names')
					->from('Blogs b')
					->join('BlogTags bt', 'b.id = bt.blog_id', 'left')
					->join('Tags t', 'bt.tag_name = t.tag_name', 'left')
					->groupBy('b.id')
					->orderBy('b.id', 'desc')
					->limit(5)
					->get()
					->getResult();
	}
	public function newBlog($blogData, $tags){

		$this->db->table('Blogs')->insert($blogData);
	
		// Get the ID of the inserted blog
		$blogId = $this->db->insertID();
		
		
		// Insert tags into 'Tags' table (if they don't already exist)
		foreach ($tags as $tag) {
			$existingTag = $this->db->table('Tags')->where('tag_name', $tag)->get()->getRow();
			
			//If the tag doesnt exist, add it. 
			if ($existingTag == null) {
				$this->db->table('Tags')->insert(['tag_name' => $tag]);
				//Add to foreign table. 
			}
			
			//Add the Tags to corresponding blog. 
			$this->db->table('BlogTags')->insert(['blog_id' => $blogId, 'tag_name' => $tag]); 
		}
		
	}
	
	//Used for pagination 
	public function getAllBlogs()
{
    return $this->select('b.id AS blog_id, b.title AS blog_title, b.description AS blog_description, b.image_url AS blog_image_url, GROUP_CONCAT(t.tag_name) AS tag_names')
    ->from('Blogs b')
    ->join('BlogTags bt', 'b.id = bt.blog_id', 'left')
    ->join('Tags t', 'bt.tag_name = t.tag_name', 'left')
    ->groupBy('b.id')
    ->orderBy('b.id', 'desc')
    ->paginate(2); // number of blogs per page

}




}