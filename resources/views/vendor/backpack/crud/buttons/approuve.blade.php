@if($entry->active == false)
    <a href="{{ url($crud->route.'/'.$entry->getKey().'/approuve') }}" class="btn btn-sm  btn-success">
        <i class="la la-check"></i>
        Approuver
    </a>
@else
    <button class="btn-sm btn-danger" disabled>
        <i class="la la-check"></i>
        Activé
    </button>
@endif
