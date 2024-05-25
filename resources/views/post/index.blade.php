  <!-- Check for errors -->
  @if ($errors->any())
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      <strong class="font-bold">Error!</strong>
      <span class="block sm:inline">{{ $errors->first() }}</span>
  </div>
  @endif

  <!-- Display posts as cards -->
  @if ($posts->count())
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      @foreach ($posts as $post)
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <div class="p-6">
              <h5 class="text-xl font-bold mb-2">{{ $post->title }}</h5>
              <p class="text-gray-700 text-base">
                  {{ \Illuminate\Support\Str::limit($post->content, 100, $end='...') }}
              </p>
              <a href="{{ route('post.show', $post->id) }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                  Read More
              </a>
          </div>
      </div>
      @endforeach
  </div>


  @else
  <p>No posts available.</p>
  @endif