@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">

                @if ($errors->any())
                    <div class="alert alert-danger my-2">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif

                @if (session('message'))
                    <div class="alert alert-success my-2">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card">
                    <form action="{{ route('admin.pages.update', [$page]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            {{ __('Edit Page') }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">{{ __('Page Title') }}</label>
                                        <input type="text" id="title" value="{{ $page->title }}" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="editor">{{ __('Page Content') }}</label>
                                        <textarea id="editor" class="form-control" name="content" rows="5">{{ $page->content }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Update Page') }}</button>
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
