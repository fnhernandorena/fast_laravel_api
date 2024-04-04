@extends('layouts.app')

@section('template_title')
    Watch
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Watch') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('watches.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Title</th>
										<th>Description</th>
										<th>Price</th>
										<th>Stock</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($watches as $watch)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $watch->title }}</td>
											<td>{{ $watch->description }}</td>
											<td>{{ $watch->price }}</td>
											<td>{{ $watch->stock }}</td>

                                            <td>
                                                <form action="{{ route('watches.destroy',$watch->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('watches.show',$watch->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('watches.edit',$watch->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $watches->links() !!}
            </div>
        </div>
    </div>
@endsection
