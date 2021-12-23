<table class="table table-hover table-bordered mb-0 align-middle">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Owner</th>
        <th>Control</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->user->name }}</td>
                <td>
                    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>
                <td>
                    <p class="small mb-0">
                        <i class="fas fa-clock"></i>
                        {{ $category->created_at->format("h : i a") }}
                    </p>
                    <p class="small mb-0">
                        <i class="fas fa-calendar"></i>
                        {{ $category->created_at->format("d m Y") }}
                    </p>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">There is no Category Yet</td>
            </tr>
        @endforelse
    </tbody>
</table>
