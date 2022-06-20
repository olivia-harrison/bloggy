<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Livewire\Component;

class Like extends Component
{
    /**
     * The post.
     *
     * @var Post
     */
    public Post $post;

    /**
     * Store a like.
     *
     * @param  Request  $request
     * @return void
     */
    public function store(Request $request): void
    {
        $request->user()->likes($this->post);

        $this->toast('Liked post!');
    }

    /**
     * Destroy a like.
     *
     * @param  Request  $request
     * @return void
     */
    public function destroy(Request $request): void
    {
        $request->user()->unlikes($this->post);

        $this->toast('Unliked post!');
    }

    /**
     * Render the component.
     *
     * @param  Request  $request
     * @return View
     */
    public function render(Request $request): View
    {
        if ($this->post->isLikedBy($request->user())) {
            return view('livewire.posts.unlike');
        }

        return view('livewire.posts.like');
    }

    /**
     * Toast to the screen.
     *
     * @param  string  $message
     * @return void
     */
    public function toast(string $message): void
    {
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => $message,
        ]);
    }
}
