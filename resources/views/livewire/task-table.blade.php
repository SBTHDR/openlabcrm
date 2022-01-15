<div class="card p-3">
    <table class="table" wire:sortable="updateTaskOrder">
        <tbody>
        @foreach($tasks as $task)
            <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                <td>{{ $task->name }}</td>
                <td class="d-flex">
                    <div class="mr-2">
                        <a class="btn btn-primary" href="{{ route('admin.checklists.tasks.edit', [$checklist, $task]) }}">{{ __('Edit') }}</a>
                    </div>
                    <div>
                        <form action="{{ route('admin.checklists.tasks.destroy', [$checklist, $task]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <button type="submit"  class="btn btn-danger show_confirm">{{ __('Delete') }}</button>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
