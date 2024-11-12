<h1>Vendor dash</h1>

<form method="POST" action="{{ route('logout') }}">
  @csrf

      <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out </a>

    </form>