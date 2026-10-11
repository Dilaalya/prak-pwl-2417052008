
<div class="table-responsive">
    <table class="table user-table text-center align-middle mb-0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->kelas->nama_kelas ?? '-' }}</td>

                    <td>
                        <div class="d-flex justify-content-center gap-2">

                            <a href="{{ route('user.edit', $user->id) }}"
                               class="btn btn-sm text-white px-3 py-2 rounded-3"
                               style="background-color: #0D9488; border: none;">
                                Edit
                            </a>

                            <form action="{{ route('user.destroy', $user->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-danger px-3 py-2 rounded-3">
                                    Hapus
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">
                        Belum ada data pengguna.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
