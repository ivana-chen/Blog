<?php

namespace App\Controllers;

class Blog extends BaseController
{
    /**
     * Controller for homepage 
     * Loads on default, will be the homepage. 
     * Loads model, calls model function topBlogs to grab the top blogs from the database. 
     * Store data into an array. 
     * return: homepage view with acquired data
     */
    public function index() 
    {
        $blogMod = model('BlogModel'); //load model
        $data['blog_data'] = $blogMod->topBlogs();
        return view("BlogViews/homePage", $data); //give data from model to view    
    }
    
    /**
     * Controller for pagination. 
     * Loads model, grabs data from Model. Uses built in pagination 
     * Returns view for pagination with data acquired from db 
     */
    public function pagination(){
        
        $blogMod = model('BlogModel'); // Load model
        
        $data = [
            'blogs' => $blogMod->getAllBlogs(),
            'pager' => $blogMod->pager,
        ];

        return view('BlogViews/pagination', $data);
        
    }
     
  
    /**
     * Submission form when user creates a new blog
     * Grabs data after submission from user. 
     * Tags will have to be specially managed to account for commas/whitespace/empty elements
     * Sends acquired data to model to store in the databbase. 
     * Returns a simple completion screen if successful. 
     */
    //When user creates a new blog submission form
    public function submit_form() {

        //Grab data from View form. Will also limit the length, ex) title = 50 characters max. 
        $title = substr($this,->request->getPost('title'), 0, 50);
        $image_url = $this->request->getPost('image_url'); 
        $description = substr($this->request->getPost('description'), 0, 500);
        $tags = substr($this->request->getPost('tags'), 0, 50);
      
        //Separate each tag by the comma and then remove 
        // extra whitespace/empty elements. 
        $tags_array = explode(',', $tags);
        $tags_array = array_map('trim', $tags_array);
        $tags_array = array_filter($tags_array);

        //Send to model
            
        $data = array( 
        'title'=> $title,
        'image_url'=> $image_url,
        'description'=> $description,
        );
    
        //Send data to be processed in Model.
        $blogMod = model('BlogModel'); 
        $blogMod->newBlog($data, $tags_array);

        return view('BlogViews/success'); // if successful 

    }
    /**
     * Simple function to return the creation blog view page (newBlog)
     */
    public function newBlog(){
        return view('BlogViews/newBlog'); 
    }
  
}
