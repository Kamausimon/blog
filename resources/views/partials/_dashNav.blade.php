  <div class="p-6 bg-slate-200 flex justify-between">
      <div class="">
          <form action="">

              <input type="search" name="q" placeholder="search here" class="bg-slate-400 h-8 mr-0 rounded-md text-slate-600">
              <button class="px-2 py-1 bg-slate-400 h-8">Search</button>
          </form>
      </div>

      <div class=" flex justify-between">
          <svg mr-3 xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
              <path fill="white" d="M19 7.25h-.25V5A1.76 1.76 0 0 0 17 3.25a.7.7 0 0 0-.24 0l-11.9 4h-.27l-.17.06h-.14l-.16.09l-.12.17l-.14.12l-.11.1l-.12.15a.4.4 0 0 0-.08.1a2 2 0 0 0-.1.18l-.06.11a2 2 0 0 0-.07.22a.5.5 0 0 1 0 .11a2 2 0 0 0 0 .34v10A1.76 1.76 0 0 0 5 20.75h14A1.76 1.76 0 0 0 20.75 19V9A1.76 1.76 0 0 0 19 7.25m-1.92-2.49a.26.26 0 0 1 .17.24v2.25H9.62ZM19.25 19a.25.25 0 0 1-.25.25H5a.25.25 0 0 1-.25-.25V9A.25.25 0 0 1 5 8.75h14a.25.25 0 0 1 .25.25Z" />
              <circle cx="16.5" cy="14" r="1.25" fill="white" />
          </svg>
          <svg class="ml-2 mr-10" xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
              <path fill="white" fill-rule="evenodd" d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z" clip-rule="evenodd" />
          </svg>
          <form action="{{ route('logout.destroy') }}" method="POST">
              @csrf
              <button type="submit" class="bg-red-500 p-2 ml-2 hover:bg-red-800 rounded-md">
                  logout
              </button>
          </form>

      </div>

  </div>