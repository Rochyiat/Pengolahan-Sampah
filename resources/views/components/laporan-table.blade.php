<!-- resources/views/components/laporan-table.blade.php -->
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Jenis Sampah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $laporan)
                <tr>
                    <td>{{ $laporan->tanggal }}</td>
                    <td>{!! $laporan->iframe !!}</td>
                    <td>{{ $laporan->jenis_sampah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
