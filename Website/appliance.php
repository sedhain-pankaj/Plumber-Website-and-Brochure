<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adding to Database</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>


<body>
    <h1>AT Plumbing & Services</h1>
    <h2>2. Fill the Appliance Details</h2>

    <form name="form" action="checklist.php" method="POST" enctype="multipart/form-data">


        Select the room regarding the appliance:
        <br>
        <select name="rooms">
            <option> Other </option>
            <option> Bedroom </option>
            <option> Hallway </option>
            <option> Kitchen </option>
            <option> Corridor </option>
            <option> Dining Room </option>
            <option> Living Room </option>
            <option> Bingalow </option>
            <option> Entrance </option>
            <option> Basement </option>
            <option> Garage </option>
            <option> Front Porch </option>
            <option> Balcony </option>
            <option> Carport </option>
            <option> Bathroom </option>
            <option> Ensuite </option>
            <option> Toilet </option>
            <option> Laundry </option>
            <option> Side of House </option>
            <option> Courtyard </option>
            <option> Shed </option>
            <option> Store </option>
            <option> Office </option>
        </select>
        <br><br>


        Select the house level regarding the appliance:
        <br>
        <select name="level">
            <option> Ground </option>
            <option> Level 1 </option>
            <option> Level 2 </option>
            <option> Level 3 </option>
            <option> Level 4 </option>
            <option> Level 5 </option>
            <option> Level 6 </option>
            <option> Level B </option>
            <option> Level B2 </option>
        </select>
        <br><br>


        Select the Appliance:
        <br>
        <select name="appliance">
            <option> Service Pressure Testing Gas Line Natural Gas </option>
            <option> Cooktop </option>
            <option> Hot Water Storage Tank (External) </option>
            <option> Ducted Heating Roof </option>
            <option> Free Standing Oven </option>
            <option> Ducted Heating External </option>
            <option> (Power Flue) External Instant Hot Water Service </option>
            <option> Wall Furnance </option>
            <option> Solar Hot Water With Instant Booster </option>
            <option> Space Heater </option>
            <option> Unable to test Appliance </option>
            <option> Hot Water Storage Tank (Internal) </option>
            <option> Space Heater Room Sealed </option>
            <option> Ducted Heating Cupboard </option>
            <option> Previously Decommissioned Appliance </option>
            <option> Ducted Heater Under Floor </option>
            <option> Hydronic Heating </option>
            <option> Wall Oven </option>
            <option> (Natural Draft) External Instant Hot Water Service </option>
            <option> Gas Log Fire Balanced Flue </option>
            <option> Type 2 decorative flame effect fire </option>
            <option> Gas log fire </option>
            <option> (Natural Draft) Internal Instant Hot Water Service </option>
            <option> Gas BBQ </option>
            <option> Elevated Cooker </option>
            <option> Type 1 decorative flame effect fire </option>
            <option> (Power Flue) Internal Instant Hot Water Service </option>
            <option> Hot Water Instantanoeus Room Sealed Internal </option>
            <option> Gas Pool Heater External </option>
            <option> Previously Decommissioned Appliance </option>
            <option> Service Pressure test fitting Line L.P.G </option>
            <option> Gas Log Fire Power Flue </option>
            <option> Appliance Inspection </option>
            <option> Co Test Appliance </option>
            <option> Appliance Service </option>
            <option> Ducted Heater in Garage </option>
            <option> Plumbing Maintenance </option>
            <option> Wall furnance Power Flue </option>
            <option> Wall furnance room sealed </option>
            <option> Gas Line Info </option>
            <option> Gas Pool Heater Internal </option>
            <option> Gas Potbelly </option>
            <option> No Power Unable to service appliances </option>
            <option> Further works pressure test at gas meter </option>
            <option> Replacing a gas line </option>
            <option> Solar Hot Water with Tank Booster </option>
        </select>
        <br><br><br>


        Select the Manufacturer of Appliance:
        <br>
        <select name="manufacturer">
            <option> Other </option>
            <option> Unknown </option>
            <option> Aquamax </option>
            <option> Bonaire </option>
            <option> Bosch </option>
            <option> Braemar </option>
            <option> Brivis </option>
            <option> Cannon </option>
            <option> Chef </option>
            <option> Detector Inspector </option>
            <option> Dux </option>
            <option> Emilia </option>
            <option> Euromaid </option>
            <option> Gas Meter </option>
            <option> Gas Pex </option>
            <option> Highland </option>
            <option> Kaden </option>
            <option> Omega </option>
            <option> Rheem </option>
            <option> Therman </option>
            <option> Viali </option>
            <option> Vulcan </option>
            <option> Westing House </option>
        </select>
        <br><br>


        Enter Model Number of the Appliance:
        <br>
        <input type="text" name="model" size="40" placeholder="Enter the Appliance Model No. if known">
        <br><br><br>


        <!--Submit and Reset-->
        <input type="submit" name="submit" id="submit" style="padding:5px;" value="Submit Details" title="This will lead to step 3.">
        <input type="reset" name="reset" id="reset" style="padding:5px; margin-left:1ch;" value="Reset All Entries" title="This will clear all data. Proceed with caution.">
    </form>


</body>

</html>