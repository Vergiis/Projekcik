    
<?php if(isset($_GET['task']) && $_GET['task']=='addDevices') { 
    require_once 'addDevices.php';
} 
else if(isset($_GET['task']) && $_GET['task']=='myDevices') { 
    require_once 'myDevices.php';
} 
else if(isset($_GET['task']) && $_GET['task']=='addLicences') { 
    require_once 'addLicences.php';
} 
else if(isset($_GET['task']) && $_GET['task']=='myLicences') { 
    require_once 'myLicences.php';
} 
else if(isset($_GET['task']) && $_GET['task']=='addInvoices') { 
    require_once 'addInvoices.php';
}
else { ?>
    <div id="panel">
        <p><b>Role: </b>
            <?php echo $this->get('user_role'); ?>
        </p>
        <p><b>Name: </b>
            <?php echo $this->get('user_name'); ?>
        </p>
        <p><b>Login: </b>
            <?php echo $this->get('user_login'); ?>
        </p>
        <div id="lower">
            <form action="?task=login&action=logout" method="post">
                <input type="submit" id="sign_out" value="Wyloguj">
            </form>
        </div>
    </div>
<?php } ?>