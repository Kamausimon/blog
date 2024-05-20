  <!--navigation and logo area -->
  <nav class="bg-slate-700 p-6">
      <div class="flex items-center justify-between flex-wrap">
          <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
              <div class="text-sm lg:flex-grow lg:flex lg:justify-start text-gray-50 hover:text-blue-400 ">
                  <a href="/">
                      <img class="inline-block h-28" src="/images/the-crying-wall-high-resolution-logo-black-transparent.png" alt="logo">
                  </a>


              </div>
              <div class="text-sm lg:flex-grow lg:flex lg:justify-end">
                  @if(!Route::currentRouteNamed('login'))
                  <a href="/login" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-12">
                      Login
                  </a>
                  @endif
                  @if(!Route::currentRouteNamed('register'))
                  <a href="/register" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                      Register
                  </a>
                  @endif
              </div>

          </div>
      </div>
  </nav>

  <!--emd of that area-->