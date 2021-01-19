<div>
        <ol>
            <?php if($this->get('user_login')!==null){ ?>
                <li><a href="?"> <?php echo $this->get('user_name') ?></a>
                    <ul>
                        <li><a href="?task=login&action=logout">Wyloguj</a></li>
                    </ul>
                 </li>
                <li><a>Faktury</a>
                    <ul>
                        <?php if($this->get('user_role')!=="audytor"){ ?>
                            <li><a href="?task=addInvoices">Dodaj fakturę</a></li>
                            <li><a href="?task=myInvoices&action=getStats">Statystyki</a></li>
                        <?php } ?>
                        <li><a href="?task=myInvoices&action=getAll">Moje faktury</a></li>
                    </ul>
                </li>
                <li><a>Licencje</a>
                    <ul>
                        <?php if($this->get('user_role')!=="audytor"){ ?>
                            <li><a href="?task=addLicences">Dodaj nową licencję</a></li>
                        <?php } ?>
                        <li><a href="?task=myLicences&action=getAll">Moje licencje</a></li>
                    </ul>
                </li>
                <li><a>Sprzęt</a>
                    <ul>
                        <?php if($this->get('user_role')!=="audytor"){ ?>
                            <li><a href="?task=addDevices">Dodaj nowy sprzęt</a></li>
                        <?php } ?>
                        <li><a href="?task=myDevices&action=getAll">Mój sprzęt</a></li>
                    </ul>
                </li>
                <?php if($this->get('user_role')=="admin"){ ?>
                    <li><a href="?task=addUser">Dodaj użytkowika</a></li>
                <?php } ?>
            <?php } ?>
        </ol>
</div>