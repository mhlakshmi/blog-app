<?php

namespace Tests\Unit\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Blog;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateBlog()
    {
        // Creating a new blog instance with dummy data
        $blogData = [
            'title' => 'Test Blog',
            'category' => 'Test Category',
            'slug' => 'test-blog',
            'short_description' => 'This is a test blog.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'date' => now(),
            'image' => 'test-image.jpg',
        ];

        $blog = Blog::create($blogData);

        // Assertions
        $this->assertInstanceOf(Blog::class, $blog);
        $this->assertEquals($blogData['title'], $blog->title);
        $this->assertEquals($blogData['category'], $blog->category);
        // Add similar assertions for other attributes
    }

    public function testBlogCasting()
    {
        // Creating a new blog instance with dummy data
        $blogData = [
            'title' => 'Test Blog',
            'category' => 'Test Category',
            'slug' => 'test-blog',
            'short_description' => 'This is a test blog.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'date' => now(),
            'image' => 'test-image.jpg',
        ];

        $blog = Blog::create($blogData);

        // Assertions
        $this->assertInstanceOf(\DateTimeInterface::class, $blog->date);
        // Add similar assertions for other casted attributes
    }
}
