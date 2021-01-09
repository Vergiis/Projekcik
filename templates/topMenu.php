<div>
        <ol>
            <?php if($this->get('user_login')!==null){ ?>
                <li><a href="?"> <?php echo $this->get('user_name') ?></a></li>
                <li><a>Faktury</a>
                    <ul>
                        <li><a href="?task=addInvoices">Dodaj fakturę</a></li>
                    </ul>
                </li>
                <li><a>Licencje</a>
                    <ul>
                        <li><a href="?task=addLicences">Dodaj nową licencję</a></li>
                        <li><a href="?task=myLicences&action=getAll">Moje licencje</a></li>
                    </ul>
                </li>
                <li><a>Sprzęt</a>
                    <ul>
                        <li><a href="?task=addDevices">Dodaj nowy sprzęt</a></li>
                        <li><a href="?task=myDevices&action=getAll">Mój sprzęt</a></li>
                    </ul>
                </li>
            <?php } ?>
        </ol>
</div>