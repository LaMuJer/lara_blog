<div class="header bg-primary p-2 rounded my-2">
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <input type="text" class="form-control d-inline me-1">
            <button class="btn btn-light text-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="headerDropDown" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="headerDropDown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
