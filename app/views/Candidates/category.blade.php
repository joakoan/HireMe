
@extends('layout')


@section('content')

<div class="container">
    <h1>{{ $category->name }}</h1>

    <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripcioon</th>
            <th>Ver</th>
        </tr>
    @foreach ($category->paginate_candidates as $candidate)
        <tr>
            <th>{{$candidate->user->full_name}}</th>
            <th>{{$candidate->job_type_title}}</th>
            <th>{{$candidate->description}}</th>
            <th width="50">
                <a  href="{{ route('candidate',[$candidate->slug,$candidate->id]) }}" class="btn btn-info" >Ver</a>
            </th>
        </tr>
    @endforeach

    </table>

    {{ $category->paginate_candidates->links() }}

</div>