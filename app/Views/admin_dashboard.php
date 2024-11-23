<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>

<body>
    <h1>Daftar Reservasi</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Nomor Telepon</th>
                <th>Dokter</th>
                <th>Tanggal Reservasi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $reservation['name']; ?></td>
                    <td><?= $reservation['phone']; ?></td>
                    <td>
                        <?php
                        // Ambil nama dokter berdasarkan doctor_id
                        $doctor = (new \App\Models\DoctorModel())->find($reservation['doctor_id']);
                        echo $doctor['name'] . ' - ' . $doctor['specialization'];
                        ?>
                    </td>
                    <td><?= $reservation['reservation_date']; ?></td>
                    <td><?= $reservation['status']; ?></td>
                    <td>
                        <a href="/admin/updateStatus/<?= $reservation['id']; ?>/Approved">Approve</a>
                        <a href="/admin/updateStatus/<?= $reservation['id']; ?>/Cancelled">Cancel</a>
                        <a href="/admin/delete/<?= $reservation['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>