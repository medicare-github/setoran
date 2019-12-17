<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <div class="page-header-toolbar">
            
            <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                <a href="Dashboard.php" class="btn btn-<?php if(basename($_SERVER['SCRIPT_NAME']) == 'Dashboard.php'){echo 'primary'; }else { echo 'secondary'; } ?>">Progress Karyawan</a>
            </div>
            <div class="filter-wrapper">
                <a href="User_Set.php" class="btn btn-<?php if(basename($_SERVER['SCRIPT_NAME']) == 'User_Set.php'){echo 'primary'; }else { echo 'secondary'; } ?>">List Users</a>
            </div>
            <div class="filter-wrapper">
                <a href="Pekerjaan_data.php" class="btn btn-<?php if(basename($_SERVER['SCRIPT_NAME']) == 'Pekerjaan_data.php'){echo 'primary'; }else { echo 'secondary'; } ?>">List Pekerjaan</a>
            </div>
            <div class="filter-wrapper">
                <a href="category_acces.php" class="btn btn-<?php if(basename($_SERVER['SCRIPT_NAME']) == 'category_acces.php'){echo 'primary'; }else { echo 'secondary'; } ?>">Hak Akses</a>
            </div>
        </div>
    </div>
</div>
<hr>