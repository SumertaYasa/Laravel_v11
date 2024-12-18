<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <article class="max-w-screen-md py-8 ">
      <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
      <div>
        By
        <a href="/authors/{{ $post->author->username }}" class="text-base text-gray-500 hover:underline">{{ $post->author->name }}</a>
        in
        <a class="text-base text-gray-500 hover:underline" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
      </div>
    <p class="my-4 font-light">
      {{ $post['body'] }}
    </p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
  </article>
</x-layout>