<div style="display: grid; grid-template-rows:2fr 1fr">
    <div class="text-center bg-primary fs-1" style="color:white; display: flex; align-items: center; justify-content: center">
        <div>HAPPY BOOK STORE</div>
    </div>
    <div style="color:white; display: flex; align-items: center; justify-content: center">
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
              <ul class="dropdown-menu">
                @foreach ($name as $item)
                  <li><a class="dropdown-item" href='/Category/{{$item->id}}'>{{$item->name}}</a></li>                    
                @endforeach
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Contact">Contact</a>
            </li>
          </ul>
    </div>
</div>
