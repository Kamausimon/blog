   <div class="container mx-auto px-4 py-8">

       <!-- Display posts as cards -->
       @if ($posts->count())
       <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
           @foreach ($posts as $post)
           <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200 ease-in">
               <div class="p-6">
                   <h5 class="text-xl font-bold mb-2 text-blue-700">{{ $post->title }}</h5>

                   <a href="{{route('post.confirmDelete', $post->id)}}" class="text-red-500 hover:text-red-700 transition-colors duration-200 ease-in">
                       <!-- SVG icon here -->
                   </a>

                   @if(strlen($post->context)>100)
                   <p class="text-gray-700 text-base mt-2">
                       {{ \Illuminate\Support\Str::limit($post->context, 100, $end='...') }}
                   </p>
                   <a href="/post/{{$post->id}}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors duration-200 ease-in">
                       Read More
                   </a>
                   @else
                   <p class="mt-2 text-gray-600">{{$post->context}}</p>
                   @endif
               </div>
           </div>
           @endforeach
       </div>
       <div class="mt-6">
           {{$posts -> links()}}
       </div>

       @else
       <p class="text-gray-700 text-lg">No posts available.</p>
       @endif
   </div>