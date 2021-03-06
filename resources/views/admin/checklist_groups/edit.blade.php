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

                <div class="card">
                    <form action="{{ route('admin.checklist_groups.update', $checklistGroup) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            {{ __('Edit Checklist Group') }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('Checklist Group Name') }}</label>
                                        <input type="text" id="name" name="name" value="{{ $checklistGroup->name }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Update Checklist Group') }}</button>
                        </div>
                    </form>

                    <div class="col-md-12 ml-1">
                        <form action="{{ route('admin.checklist_groups.destroy', $checklistGroup) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger show_confirm">{{ __('Delete Checklist Group') }}</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
