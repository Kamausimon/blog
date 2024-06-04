   <div class="container mx-auto px-4 py-8">

       <!-- Display posts as cards -->
       @if ($posts->count())
       <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
           @foreach ($posts as $post)
           <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200 ease-in">
               <div class="p-6 flex justify-between items-start">
                   <div>
                       <h5 class="text-xl font-bold mb-2 text-blue-700">{{ $post->title }}</h5>

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

                   @if($post->user_id == auth()->id())
                   <a href="{{route('post.confirmDelete', $post->id)}}" class="ml-5 mr-0">
                       <!-- SVG icon here -->
                       <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                           <path fill="grey" d="M7.616 20q-.691 0-1.153-.462T6 18.384V6H5V5h4v-.77h6V5h4v1h-1v12.385q0 .69-.462 1.153T16.384 20zm2.192-3h1V8h-1zm3.384 0h1V8h-1z" />
                       </svg>
                   </a>
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