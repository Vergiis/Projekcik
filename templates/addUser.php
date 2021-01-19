<div id="panel">
    <form action="?task=addUser&action=addNew" method="post">
        <label for="user_Fname" id="device_code_label">Imie:</label>
        <input type="text" id="device_code" name="user_Fname" class="myinput" required>
        <br/><br/>
        <label for="user_Lname" id="device_name_label">Nazwisko:</label>
        <input type="text" id="device_name" name="user_Lname" class="myinput" required>
        <br/><br/>
        <label for="user_pass" id="device_serialNumber_label">Hasło:</label>
        <input type="text" id="device_serialNumber" name="user_pass" class="myinput" required>
        <br/><br/>
        <label for="user_login" id="device_buyDate_label">Login:</label>
        <input type="text" id="device_buyDate" name="user_login" class="myinput" required>
        <br/><br/>
        <label for="user_role" id="invoice_currencyType_label">Rola:</label>
        <select id="invoice_currencyType" name="user_role" class="myinput" required>
            <option value="admin">Admin</option>
            <option value="pracownik">Pracownik</option>
            <option value="audytor">Audytor</option>
        </select>

        <div id="lower">
            <input type="submit" id="addDevices" value="Dodaj">
        </div>
    </form>
</div>