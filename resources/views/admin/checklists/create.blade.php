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
                    <form action="{{ route('admin.checklist_groups.checklists.store', $checklistGroup) }}" method="post">
                        @csrf
                        <div class="card-header">
                            {{ __('New Checklist in ') }} {{ $checklistGroup->name }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('Checklists Name') }}</label>
                                        <input type="text" class="form-control" name="name" placeholder="{{ __('Give a checklists name...') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Save Checklists') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
