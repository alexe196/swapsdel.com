<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #e3f2fd;">
    <div class="container">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Motorcicle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Water</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Camp</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if( Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{Auth::user()->getNameUserName()}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Signin</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Signgup</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
