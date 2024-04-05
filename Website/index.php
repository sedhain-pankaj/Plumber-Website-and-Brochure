<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adding to Database</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>


<body>
  <h1>AT Plumbing & Services</h1>
  <h2>1. Fill the Service Details</h2>

  <form name="form" action="appliance.php" method="POST" enctype="multipart/form-data">


    <!--client details-->
    Client Name:
    <br>
    <input type="text" name="client_name" size="50" placeholder="Enter Client Name if known">
    <br><br>

    Client Email:
    <br>
    <input type="email" name="client_email" size="50" placeholder="Enter Client Email if known">
    <br><br>

    Client Contact:
    <br>
    <input type="tel" name="client_contact" size="50" placeholder="Enter Client Contact if known" pattern="[0-9]{10}">
    <br><br>


    <!--address-->
    Service Address:
    <br>
    <input type="text" name="service_address" size="50" placeholder="Enter the site address (Required)" title="Format: House No - Steet Name, Suburb, STATE" Required>
    <br /><br>



    <!--agent details-->
    Agent Name:
    <br>
    <input type="text" name="agent_name" size="50" placeholder="Enter Agent Name (Required)" Required>
    <br><br>

    Agent Email:
    <br>
    <input type="email" name="agent_email" size="50" placeholder="Enter Agent Email if known">
    <br><br>

    Agent Contact:
    <br>
    <input type="tel" name="agent_contact" size="50" placeholder="Enter Agent Contact if known" pattern="[0-9]{10}">
    <br><br><br>


    <!--date and time-->
    Date of Service:
    <br>
    <input type="date" name="date" title="Click the icon for picking date." Required>
    <br><br><br>

    Time of Service:
    <br>
    From <input type="time" name="start_time" title="Click the icon to select time." Required>
    To <input type="time" name="end_time" title="Click the icon to select time." Required>
    <br><br><br>


    <!--Residency Type-->
    Residency Type:
    <br>
    <select name="residency_type">
      <option> House </option>
      <option> Townhouse </option>
      <option> Apartment </option>
      <option> Unit </option>
      <option> Commercial </option>
      <option> Other </option>
    </select>
    <br><br>

    No. of Bedrooms:
    <br>
    <select name="no_of_bedrooms">
      <option> 1 </option>
      <option> 2 </option>
      <option> 3 </option>
      <option> 4 </option>
      <option> 5 </option>
      <option> 5+ </option>
    </select>
    <br><br><br>

    <!--Submit and Reset-->
    <input type="submit" name="submit" id="submit" style="padding:5px;" value="Submit Details" title="This will lead to step 2.">
    <input type="reset" name="reset" id="reset" style="padding:5px; margin-left:1ch;" value="Reset All Entries" title="This will clear all data. Proceed with caution.">
  </form>


</body>

</html>