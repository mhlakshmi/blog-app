<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FunctionControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Mocking the database data
        $mockedBlogs = factory(\App\Models\Blog::class, 3)->create();

        // Making a request to the index method
        $response = $this->get('/');

        // Asserting that the response has a successful status code
        $response->assertStatus(200);

        // Asserting that the view contains the mocked blogs
        foreach ($mockedBlogs as $blog) {
            $response->assertSee($blog->title);
        }
    }

    public function testBlogDetails()
    {
        // Mocking a blog
        $mockedBlog = factory(\App\Models\Blog::class)->create();

        // Making a request to the blog_details method with the blog's slug
        $response = $this->get('/blog/' . $mockedBlog->slug);

        // Asserting that the response has a successful status code
        $response->assertStatus(200);

        // Asserting that the view contains the mocked blog details
        $response->assertSee($mockedBlog->title);
        $response->assertSee($mockedBlog->content);

        // Asserting that the view contains related blogs
        $relatedBlogs = factory(\App\Models\Blog::class, 3)->create();
        foreach ($relatedBlogs as $blog) {
            $response->assertSee($blog->title);
        }
    }
}
