<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Klinik</title>
</head>

<body>
    <h1>Form Reservasi</h1>
    <form action="/reservation/save" method="post">
        <label>Nama Pasien:</label>
        <input type="text" name="name" required><br>

        <label>Nomor Telepon:</label>
        <input type="text" name="phone" required><br>

        <label>Pilih Dokter:</label>
        <select name="doctor_id" required>
            <?php foreach ($doctors as $doctor): ?>
                <option value="<?= $doctor['id'] ?>"><?= $doctor['name'] ?> - <?= $doctor['specialization'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label>Tanggal Reservasi:</label>
        <input type="date" name="reservation_date" required><br>

        <button type="submit">Reservasi</button>
    </form>
</body>

</html>