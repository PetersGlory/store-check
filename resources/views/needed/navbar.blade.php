<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ URL::to('/') }}">Store Check</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ URL::to('/home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('product') }}">Create a Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/') }}">Blog</a>
            </li>
        </ul>
    </div>
</nav>
