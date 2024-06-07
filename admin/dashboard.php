<?php

    error_reporting(E_ALL);
    session_start();
    require_once "adminguard.php";
    require_once "partials/nav.php";

?>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3" style="text-align: center;">Admin Dashboard</h3>
                        <h3 class="fw-bold fs-4 my-3" style="text-align: center;">Users Goals and Progress</h3>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped">
                                    <thead>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
           <?php require_once "partials/footer.php"; ?>