@foreach ($data->research as $data)
<div>
    {{$data->event->model}}{{$data->updated_at}}
        @endforeach
</div>
