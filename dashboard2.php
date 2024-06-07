<?php
error_reporting(E_ALL);
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Rayfit User Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <?php require_once "partials/sidebar.php" ?>
        <div class="main">
            <?php require_once "partials/nav.php" ?>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">Exercise</div>
                        <button type="submit" class="btn btn-primary">Add progress</button>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">Meal</div>
                        <button type="submit" class="btn btn-success">Add progress</button>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">Water</div>
                        <button type="submit" class="btn btn-warning">Add progress</button>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">Sleep</div>
                        <button type="submit" class="btn btn-danger">Add progress</button>
                    </div>
                </div>
            </div>
            <div class="row details">
                <div class="userdetails">
                    <div class="cardHeader"  style="padding: 20px;">
                        <h2>User Progress</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-7 shadow" style="padding:10px;border-radius: 50px;">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                      <th>S/N</th>
                                      <th>Name</th>
                                      <th>progress</th>
                                      <th>Status</th>
                                      <th>Daterecorded</th>
                                    </tr>
                                </thead>
        
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sanwo-olu</td>
                                        <td>pending</td>
                                        <td>pending</td>
                                        <td>01-01-2006</td>
                                    </tr>
        
                                    <tr>
                                        <td>2</td>
                                        <td>Tinubu-seyi</td>
                                        <td>pending</td>
                                        <td>pending</td>
                                        <td>01-01-2007</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sanwo-olu</td>
                                        <td>pending</td>
                                        <td>pending</td>
                                        <td>01-01-2006</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-5 shadow" style="padding:30px;border-radius: 50px;">
                    <form action="process_goals.php" method="post">
                        <h2>Set Your Activity Goals</h2>

                        <!-- Activity Type -->
                        <div class="mb-3">
                          <label for="description">Description</label>
                          <input type="text-area col">
                        </div>

                        <!-- Duration -->
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration per Session (in minutes):</label>
                            <input type="number" id="duration" name="duration" class="form-control">
                        </div>

                        <!-- Frequency -->
                        <div class="mb-3">
                            <label for="frequency" class="form-label">Frequency per Week:</label>
                            <input type="number" id="frequency" name="frequency" class="form-control">
                        </div>

                        <!-- Target -->
                        <div class="mb-3">
                            <label for="target" class="form-label">Target (optional):</label>
                            <input type="text" id="target" name="target" class="form-control">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" name="set_goals" class="btn btn-primary">Set Goals</button>
                    </form>

                </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>