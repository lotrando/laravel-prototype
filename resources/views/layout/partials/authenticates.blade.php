@if (Route::has('login'))
  <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
    @auth
      <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Home</a>
    @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>
      @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
      @endif
    @endauth
  </div>
@endif
