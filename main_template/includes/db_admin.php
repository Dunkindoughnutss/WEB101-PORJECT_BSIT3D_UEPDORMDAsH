<?php
include('../dbconnection.php'); // Main Database

$total_bh = 0;
try {
    $stmt = $conn->query("SELECT COUNT(*) AS total_bh FROM bh_listing");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $total_bh = $row['total_bh'];
    }
} catch (PDOException $e) {
    $total_bh = 0;
}

$total_renters = 0;
try {
    $stmt = $conn->query("SELECT COUNT(*) AS total_renters FROM renter_details");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $total_renters = $row['total_renters'];
    }
} catch (PDOException $e) {
    $total_renters = 0;
}

?>


<!-- Page Heading -->
<div class="mb-4">
    <h1 class="h3 text-gray-800">Dashboard</h1>
    <h3 class="h5 text-gray-600 mt-2">Welcome to UEP DORM DASH!</h3>

</div>

<div class="row">
<!-- Renters available -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Renters Available
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo $total_renters; ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BH available -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Boarding Houses Available
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo $total_bh; ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
