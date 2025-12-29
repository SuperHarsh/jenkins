<?php 
require 'db.php'; 
include 'header.php'; 

// Fetch services from DB
$stmt = $pdo->query("SELECT * FROM services");
$services = $stmt->fetchAll();
?>

<div class="hero">
    <div>
        <h1>Our Solutions</h1>
        <p>Enterprise-grade tools powered by Azure</p>
    </div>
</div>

<div class="container">
    <div class="grid">
        <?php foreach($services as $s): ?>
            <div class="card">
                <h3><?= htmlspecialchars($s['title']) ?></h3>
                <p><?= htmlspecialchars($s['description']) ?></p>
                <a href="#" style="color: var(--primary);">Learn More &rarr;</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
