@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">

                @if ($errors->storetask->any())
                    <div class="alert alert-danger my-2">
                        @foreach ($errors->storetask->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif

                <div class="card">
                    <form action="{{ route('admin.checklists.tasks.update', [$checklist, $task]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            {{ __('Edit Task') }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('Task Name') }}</label>
                                        <input type="text" id="name" value="{{ $task->name }}" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="editor">{{ __('Task Description') }}</label>
                                        <textarea id="editor" class="form-control" name="description" rows="5">{{ $task->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Update Task') }}</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
