{{-- One equipment row. $kind: 'card' (has its own card on the site), 'size' (listed inside a card), 'none' (no card). --}}
<tr class="{{ $kind === 'size' ? 'small' : '' }}">
    <td class="text-muted small align-middle">{{ $item->sort_order }}</td>
    <td class="align-middle">
        @if ($item->image_path)
        <img src="{{ $item->image_url }}"
             alt="{{ $item->name }}"
             class="rounded" style="width:48px;height:36px;object-fit:cover;">
        @else
        <div class="bg-light rounded d-flex align-items-center justify-content-center"
             style="width:48px;height:36px;">
            <i class="bi bi-image text-muted small"></i>
        </div>
        @endif
    </td>
    <td class="align-middle">
        <div class="{{ $kind === 'size' ? 'ps-4' : '' }}">
            @if ($kind === 'size')<i class="bi bi-arrow-return-right text-muted me-1"></i>@endif
            <span class="{{ $kind === 'card' ? 'fw-bold' : 'fw-semibold' }}">{{ $item->name }}</span>
            <div class="text-muted small font-monospace {{ $kind === 'size' ? 'ps-4' : '' }}">{{ $item->slug }}</div>
        </div>
    </td>
    <td class="align-middle small">
        @if ($kind === 'card')
            {{ $card['range'] }}
        @elseif ($kind === 'size')
            <span class="text-muted">Inside the {{ $card['card'] }} card</span>
        @else
            <span class="text-muted">—</span>
        @endif
    </td>
    <td class="align-middle" style="max-width:260px">
        @if ($kind === 'card')
            @foreach ($card['tags'] as $tag)
            <span class="badge rounded-pill text-bg-light border fw-normal">{{ $tag }}</span>
            @endforeach
        @endif
    </td>
    <td class="align-middle small text-muted">{{ $item->capacity ?? '—' }}</td>
    <td class="align-middle">
        <form method="POST" action="{{ route('admin.equipment.toggle', $item) }}" class="d-inline">
            @csrf
            @method('PATCH')
            <button type="submit"
                    class="badge border-0 {{ $item->is_active ? 'bg-success' : 'bg-secondary' }}"
                    title="Click to toggle">
                {{ $item->is_active ? 'Active' : 'Inactive' }}
            </button>
        </form>
    </td>
    <td class="align-middle text-end text-nowrap">
        <a href="{{ route('admin.equipment.edit', $item) }}"
           class="btn btn-sm btn-outline-primary me-1">
            <i class="bi bi-pencil"></i>
        </a>
        <form method="POST" action="{{ route('admin.equipment.destroy', $item) }}"
              class="d-inline"
              onsubmit="return confirm('Delete {{ addslashes($item->name) }}? This cannot be undone.')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger">
                <i class="bi bi-trash"></i>
            </button>
        </form>
    </td>
</tr>
