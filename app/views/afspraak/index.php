<?php require_once APPROOT . '/views/includes/header.php'; ?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th, table td {
        padding: 8px;
        text-align: left;
    }

    table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tbody tr:hover {
        background-color: #ddd;
    }
</style>

<h3><?php echo $data['title']; ?></h3>

<a href="<?= URLROOT; ?>/homepages/index">Homepage</a>

<!-- Table to display the appointments -->
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Roze</th>
            <th>Blauw</th>
            <th>Roze2</th>
            <th>Geel</th>
            <th>Telefoonnummer</th>
            <th>Email</th>
            <th>Afspraak Datum</th>
            <th>Nagelbijt Arrangement</th>
            <th>Luxe Manicure</th>
            <th>Nagelreparatie</th>
            <th>Verzend Datum Tijd</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($data['appointments'])): ?>
            <?php foreach ($data['appointments'] as $appointment) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($appointment->id); ?></td>
                    <td><?php echo htmlspecialchars($appointment->roze); ?></td>
                    <td><?php echo htmlspecialchars($appointment->blauw); ?></td>
                    <td><?php echo htmlspecialchars($appointment->roze2); ?></td>
                    <td><?php echo htmlspecialchars($appointment->geel); ?></td>
                    <td><?php echo htmlspecialchars($appointment->telefoonnummer); ?></td>
                    <td><?php echo htmlspecialchars($appointment->email); ?></td>
                    <td><?php echo htmlspecialchars($appointment->afspraak_datum); ?></td>
                    <td><?php echo htmlspecialchars($appointment->nagelbijt_arrangement ? 'Ja' : 'Nee'); ?></td>
                    <td><?php echo htmlspecialchars($appointment->luxe_manicure ? 'Ja' : 'Nee'); ?></td>
                    <td><?php echo htmlspecialchars($appointment->nagelreparatie ? 'Ja' : 'Nee'); ?></td>
                    <td><?php echo htmlspecialchars($appointment->verzend_datum_tijd); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="12">Geen afspraken gevonden.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
