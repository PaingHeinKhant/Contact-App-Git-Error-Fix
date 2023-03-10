<div class="sidebar">
    <div class=" rounded my-3 mx-4 py-2 px-4 rounded-pill ">
        <a class="list-group-item list-group-item-action d-flex align-items-center ps-3 shadow px-2" href="{{ route('contact.create') }}">
            <i class="bi bi-plus fs-1"></i>
            <span class="h6 fw-bold m-0 p-0 letter-spacing">Create</span>
        </a>
    </div>

    <div class="list-group mb-3 underline">
        <a class="list-group-item list-group-item-action border-0 rounded btn-rounded ps-5 " href="{{ route('contact.index') }}">
            <i class="bi bi-person fs-4 me-3 "></i>
            <span class="h6 my-1">Contacts</span>
        </a>
    
        <a class="list-group-item list-group-item-action border-0 rounded btn-rounded ps-5 mb-3" href="{{ route('store.index') }}">
            <i class="bi bi-box fs-4 me-3"></i>
            <span class="h6 my-1">Shared Contact</span>
        </a>
    </div>


    <div class="list-group mb-3 underline">
    
        <a class="list-group-item list-group-item-action border-0 rounded btn-rounded ps-5 " href="{{route('export-all')}}">
            <i class="bi bi-cloud-arrow-down fs-4 me-3"></i>
            <span class="h6 my-1">Export</span>
        </a>
        <a class="list-group-item list-group-item-action border-0 rounded btn-rounded ps-5 mb-3" href="">
            <i class="bi bi-printer fs-4 me-3"></i>
            <span class="h6 my-1">Print</span>
        </a>
    </div>

    <div class="list-group mb-3 underline">
        <a class="list-group-item list-group-item-action border-0 rounded btn-rounded ps-5 mb-3" href="{{ route('trash') }}">
            <i class="bi bi-trash fs-4 me-3"></i>
            <span class="h6 my-1">Trash</span>
        </a>
    </div>


</div>
