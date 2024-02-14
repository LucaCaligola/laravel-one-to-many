@extends('layouts.admin')

@section ('title', 'Projects')

@section('main-content')

<div class="m-3">
    <h1 class="text-center">
       Ecco i tuoi Progetti {{ Auth::user()->name }}
    </h1>
</div>
<div class="container">
    <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Project Url</th>
                        <th scope="col">Languages</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $projects as $project )
                        <tr>
                            <th scope="row">
                                {{ $project->id }}
                            </th>
                            <td>
                                {{ $project->title }}
                            </td>
                            <td>
                                {{ $project->description }}
                            </td>
                            <td>
                                {{ $project->date }}
                            </td>
                            <td>
                                {{ $project->project_url }}
                            </td>

                            <td>
                                {{ $project->languages }}
                            </td>
                            
                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}" class="text-decoration-none">
                                        <button class="btn btn-sm btn-primary">
                                            View
                                        </button>
                                    </a>
                                
                                
                              
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="text-decoration-none">
                                        <button class="btn btn-sm btn-success">
                                            Edit
                                        </button>
                                    </a>
                               

                               
                                    <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-warning" type="submit">
                                        Delete
                                    </button>
                                    </form>
                                </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                There are no posts available
                            </td>
                        </tr>
                    @endforelse

                </tbody>

    </table>

    <div class="create">
        <a href="{{ route('admin.projects.create') }}">
            <button class="btn btn-danger">
                Aggiungi Progetto
            </button>
        </a>
    </div>
</div>
@endsection