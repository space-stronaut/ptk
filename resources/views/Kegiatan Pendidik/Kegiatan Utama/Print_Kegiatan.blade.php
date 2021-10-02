<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <style>
        li {
            list-style-type: none;
        }
    </style>

	<div class="container">
		<center>
			<ul>
                <li>Nama Pembuat: {{ $author }}</li>
                <li>Penugasan: {{ $penugasan }}</li>
                <li>Jenis Kegiatan: {{ $jenis }}</li>
                <li>Tanggal: {{ $tanggal }}</li>
            </ul>
		</center>
		<br/>
		<table class='table table-bordered'>
			<thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Jam/ Waktu</th>
                  <th>Aktifitas</th>
                  <th>Isi Kegiatan</th>
                  <th>Volume</th>
                  <th>Status</th>
                  <th>Author</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($kegiatans as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->tanggal }}</td>
                  <td>{{ $item->jam_mulai}} - {{ $item->jam_selesai }}</td>
                  <td>{{ $item->aktifitas }}</td>
                  <td>{{ Str::limit($item->kegiatan, 30) }}</td>
                  <td>{{ $item->volume_laporan }}</td>
                  @if( $item->status == NULL)
                  <td><span class="badge badge-warning">Proses</span></td>
                  @elseif($item->status == "Diterima")
                  <td><span class="badge badge-success">Diterima</span></td>
                  @else
                  <td><span class="badge badge-danger">Ditolak</span></td>
                  @endif
                  <td>
                    {{ $item->author->name }}
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jam/ Waktu</th>
                    <th>Aktifitas</th>
                    <th>Isi Kegiatan</th>
                    <th>Volume</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
		</table>

	</div>

</body>
</html>