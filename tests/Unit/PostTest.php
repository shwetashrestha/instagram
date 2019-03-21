<?php   
use App\Models\Post;
use Illuminate\Foundation\Testing\TestCase;

class BasicTest extends TestCase{
    public function testHasItemInPost(){

        $post = new      Post(['title','body','like','dislike','image']);    
    
        $this->assertTrue($post->has('title'));
        // $this->assertTrue($post->has('body'));
        // $this->assertTrue($post->has('like'));
        // $this->assertTrue($post->has('dislike'));
        // $this->assertTrue($post->has('image'));
        // $this->assertFalse($post->has('name'));
        $this->assertFalse($post->has('email'));

    }

}