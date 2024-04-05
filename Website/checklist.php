<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adding to Database</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="image_preview.js"></script>
    <script src="show_hidden.js"></script>
</head>


<body>
    <h1>AT Plumbing & Services</h1>

    <span style="font-size:20px;cursor:pointer;float:right;position:fixed;right:2.2%;" onclick="openNav()">
        Checklist Item's Navigation &#9776;</span>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#A"> A. General Appliance Photo</a>
        <a href="#B"> B. Data Plate</a>
        <a href="#C"> C. Support/ Fixing/ Securing of Appliance</a>
        <a href="#D"> D. Water and Gas Connection</a>
        <a href="#E"> E. Integrity/ Clearances of Flue System</a>
        <a href="#F"> F. P.T.R Drain</a>
        <a href="#G"> G. Tempering Valve</a>
        <a href="#H"> H. Pilot/ Thermocouple/ Burner Storage</a>
        <a href="#I"> I. Gas Valves storage hot water</a>
        <a href="#J"> J. Gas/ Electrical Safety</a>
        <a href="#K"> K. Appliance Condition</a>
        <a href="#L"> L. Appliance Operation</a>
        <a href="#M"> M. Appliance Base</a>
        <a href="#N"> N. Safety on Completion</a><br>
        <a href="#summary_report"> Summary Report </a>
        <a href="#submit"> Submit </a>
    </div>
    <br><br>

    <script type="text/javascript">
        //right navigation pane for checklist
        function openNav() {
            document.getElementById("mySidenav").style.width = "365px";
            //shows pane
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            //hides pane
        }
    </script>


    <h2>3. Checklist</h2>


    <form name="form" action="insert.php" method="POST" enctype="multipart/form-data">





        <div id="A">
            <br>
            <h3>A. General Appliance Photo</h3>
            I. Take one photo 2 meters away of the appliance showing its surrounding:<br><br>
            <input id="image1" type="file" name="photo1" onchange="PreviewImage1();" accept="image/*">
            <br><br>
            <img id="preview1" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
            <br><br><br>

            II. Is there any visible pre-existing damage to the appliance?
            <br>
            <select name="yn1" onchange="showDiv1(this)">
                <option value="0" selected></option>
                <option value="1">No</option>
                <option value="2">Yes</option>
            </select>
            <br><br><br>


            <div id="hidden_div1" style="display:none;">
                III. Take a photo of the damage: <br><br>
                <input id="image2" type="file" name="photo2" onchange="PreviewImage2();" accept="image/*">
                <br><br>
                <img id="preview2" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
                <br><br><br>

                IV. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div2" style="display:none;">
                III. This section is finished. Progress to next section.
            </div>
        </div>










        <div id="B">
            <br>
            <h3>B. Data Plate</h3>

            I. Is the data plate accessible?
            <br>

            <select name="yn2" onchange="showDiv2(this)">
                <option value="0" selected></option>
                <option value="1">No</option>
                <option value="2">Yes</option>
            </select>
            <br><br><br>

            <div id="hidden_div3" style="display:none;">
                II. Reason for data plate not being accessible:<br>
                <select name="yn3" onchange="showDiv3(this)">
                    <option value="0" selected></option>
                    <option value="1">Data plate has been removed.</option>
                    <option value="2">Data plate no easily accessible.</option>
                    <option value="3">Data plate worn/ Unreadable.</option>
                </select>
                <br><br><br>

            </div>

            <div id="hidden_div4" style="display:none;">

                II. Take a photo of data plate:
                <br><br>

                <input id="image3" type="file" name="photo3" onchange="PreviewImage3();" accept="image/*">
                <br><br>
                <img id="preview3" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
                <br><br><br>

                III. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div5" style="display:none;">
                III. This section is finished. Progress to next section.<br>
            </div>

            <div id="hidden_div7" style="display:none;">
                III. This section is finished. Progress to next section.<br>
            </div>

            <div id="hidden_div6" style="display:none;">

                III. Take a photo of worn data plate:
                <br><br>

                <input id="image4" type="file" name="photo4" onchange="PreviewImage4();" accept="image/*">
                <br><br>
                <img id="preview4" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
                <br><br><br>

                IV. This section is finished. Progress to next section.
            </div>

        </div>
        <br><br>







        <div id="C">
            <br>
            <h3>C. Support/ Fixing/ Securing of Appliance</h3>

            I. Current Status of Appliance Support:
            <br><br>

            <select name="yn4" onchange="showDiv4(this)">
                <option value="0" selected></option>
                <option value="1">Appliance is secured correctly.</option>
                <option value="2">Appliance is secured incorrectly.</option>
                <option value="3">Appliance not required to be secured.</option>
                <option value="4">Appliance not secured.</option>
                <option value="5">Appliance not level and plumb.</option>
            </select>
            <br><br><br>

            <div id="hidden_div8" style="display:none;">

                II. Take a photo of Appliance Support:
                <br><br>

                <input id="image5" type="file" name="photo5" onchange="PreviewImage5();" accept="image/*">
                <br><br>
                <img id="preview5" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
                <br><br><br>

                III. This section is finished. Progress to next section.
            </div>


            <div id="hidden_div9" style="display:none;">

                II. What is wrong with current securing of appliance?
                <br>
                <textarea rows="5" cols="60" name="description1" placeholder="Enter text here."></textarea>
                <br><br>

                III. Take a photo of Appliance Support:
                <br><br>

                <input id="image6" type="file" name="photo6" onchange="PreviewImage6();" accept="image/*">
                <br><br>
                <img id="preview6" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
                <br><br><br>

                IV. This section is finished. Progress to next section.
            </div>


            <div id="hidden_div10" style="display:none;">
                II. This section is finished. Progress to next section.
            </div>


            <div id="hidden_div11" style="display:none;">

                II. How should the appliance be secured?
                <br>
                <textarea rows="5" cols="60" name="description2" placeholder="Enter text here."></textarea>
                <br><br>

                III. Take a photo of Appliance Support:
                <br><br>

                <input id="image7" type="file" name="photo7" onchange="PreviewImage7();" accept="image/*">
                <br><br>
                <img id="preview7" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
                <br><br><br>

                IV. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div12" style="display:none;">
                II. This section is finished. Progress to next section.
            </div>

        </div>
        <br><br>










        <div id="D">
            <br>
            <h3>D. Water and Gas Connection</h3>
        </div>
        <br><br><br><br>


        <div id="E">
            <br>
            <h3>E. Integrity/ Clearances of Flue System</h3>
        </div>
        <br><br><br><br>







        <div id="F">
            <br>
            <h3>F. P.T.R Drain</h3>
            <br>

            I. Is the PTR drain compliant with Technical Solution Sheet 6.09?
            <br>

            <select name="yn4" onchange="showDiv4(this)">
                <option value="0" selected></option>
                <option value="1">Appliance is secured correctly.</option>
                <option value="2">Appliance is secured incorrectly.</option>
                <option value="3">Appliance not required to be secured.</option>
                <option value="4">Appliance not secured.</option>
                <option value="5">Appliance not level and plumb.</option>
            </select>
            <br><br><br>

            <div id="hidden_div8" style="display:none;">

                II. Take a photo of Appliance Support:
                <br><br>

                <input id="image5" type="file" name="photo5" onchange="PreviewImage5();" accept="image/*">
                <br><br>
                <img id="preview5" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
                <br><br><br>

                III. This section is finished. Progress to next section.


        </div>
        <br><br><br><br>

        <!--
        Is the PTR drain compliant with Technical Solution Sheet 6.09?
yes/no. [photo and finish]-->







        <div id="G">
            <br>
            <h3>G. Tempering Valve</h3>
        </div>
        <br><br><br><br>


        <div id="H">
            <br>
            <h3>H. Pilot/ Thermocouple/ Burner Storage</h3>
        </div>
        <br><br><br><br>


        <div id="I">
            <br>
            <h3>I. Gas Valves storage hot water</h3>
        </div>
        <br><br><br><br>


        <div id="J">
            <br>
            <h3>J. Gas/ Electrical Safety</h3>
        </div>
        <br><br><br><br>








        <div id="K">
            <br>
            <h3>K. Appliance Condition</h3>

            I. What is the appliance condition?
            <br><br>

            <select name="yn12" onchange="showDiv12(this)">
                <option value="0" selected></option>
                <option value="1"> Good and Safe </option>
                <option value="2"> General Wear and Tear/ Working Condition </option>
                <option value="3"> Worn condition due to age (safe and operational) </option>
                <option value="4"> UNSAFE requires disconnection and rectification </option>
                <option value="5"> Poor Condition requires Replacement (Not disconnected) </option>
                <option value="6"> Poor Condition requires Replacement (Disconnected) </option>
                <option value="7"> Requires part but functional </option>
                <option value="8"> Requires part (Appliance not operational) </option>
                <option value="9"> Safety protocol that needs disconnection and replacement </option>
                <option value="10"> Appliance not operational </option>
            </select>
            <br><br><br>

            <div id="hidden_div22" style="display:none;">
                II. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div23" style="display:none;">
                II. Disconnect the Appliance immediately.
                <br><br><br>

                III. Is there asbestos flue to be removed?
                <br>
                <select name="yn13">
                    <option value="0" selected></option>
                    <option value="1"> No </option>
                    <option value="2"> Yes </option>
                </select>
                <br><br><br>

                IV. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div24" style="display:none;">
                II. Is there asbestos flue to be removed?
                <br>
                <select name="yn14">
                    <option value="0" selected></option>
                    <option value="1"> No </option>
                    <option value="2"> Yes </option>
                </select>
                <br><br><br>

                III. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div25" style="display:none;">
                II. Why is the appliance disconnected?
                <br><br>
                <textarea rows="5" cols="60" name="description8" placeholder="Enter the reason here."></textarea>
                <br><br><br>

                III. Is there asbestos flue to be removed?
                <br>
                <select name="yn15">
                    <option value="0" selected></option>
                    <option value="1"> No </option>
                    <option value="2"> Yes </option>
                </select>
                <br><br><br>

                IV. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div26" style="display:none;">
                II. Does the appliance needs to be disconnected until parts are replaced?
                <br>
                <select name="yn16">
                    <option value="0" selected></option>
                    <option value="1"> No </option>
                    <option value="2"> Yes </option>
                </select>
                <br><br><br>

                III. If Yes, disconnect the appliance. If No, progress to next section.
            </div>

            <div id="hidden_div27" style="display:none;">
                II. Was this appliance operating before your attendance?
                <br>
                <select name="yn17" onchange="showDiv17(this)">
                    <option value="0" selected></option>
                    <option value="1"> No </option>
                    <option value="2"> Yes </option>
                </select>
                <br><br><br>

                <div id="hidden_div28" style="display:none;margin-left:50px;">
                    a. Do we need a diagonistic to attend to fix?
                    <br>
                    <select name="yn18" >
                        <option value="0" selected></option>
                        <option value="1"> No </option>
                        <option value="2"> Yes </option>
                    </select>
                    <br><br><br>
                </div>

                III. This section is finished. Progress to next section.

            </div>

        </div>
        <br><br><br>










        <div id="L">
            <br>
            <h3>L. Appliance Operation</h3>

            I. Is the appliance working?
            <br><br>

            <select name="yn11" onchange="showDiv11(this)">
                <option value="0" selected></option>
                <option value="1"> Yes </option>
                <option value="2"> Appliance capped off </option>
                <option value="3"> No: Requires part </option>
                <option value="4">No: Was previously disconnected </option>
                <option value="5">No: Other reason </option>
            </select>
            <br><br><br>

            <div id="hidden_div17" style="display:none;">
                II. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div18" style="display:none;">
                II. Mark the capped off and filled out disconnection workflow.
                <br>Then, progress to next section.
            </div>

            <div id="hidden_div19" style="display:none;">
                II. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div20" style="display:none;">
                II. This section is finished. Progress to next section.
            </div>

            <div id="hidden_div21" style="display:none;">
                II. What is the reason?
                <br><br>
                <textarea rows="5" cols="60" name="description7" placeholder="Enter the reason here."></textarea>
                <br><br><br>
                III. This section is finished. Progress to next section.
                <br>
            </div>

        </div>
        <br><br>










        <div id="M">
            <br>
            <h3>M. Appliance Base</h3>

            I. Does the appliance needs a base?<br>
            (select No, if wall-mounted or sitting on a concrete.)
            <br><br>

            <select name="yn8" onchange="showDiv8(this)">
                <option value="0" selected></option>
                <option value="1">No</option>
                <option value="2">Yes</option>
            </select>
            <br><br><br>

            <div id="hidden_div16" style="display:none;">
                <div style="margin-left: 50px;">
                    a. Does it have a solid base?

                    <select name="yn9">
                        <option value="0" selected></option>
                        <option value="1">No</option>
                        <option value="2">Yes</option>
                    </select>
                </div>
                <br><br><br>
            </div>


            II. Is the appliance level?
            <br><br>

            <select name="yn10">
                <option value="0" selected></option>
                <option value="1">No</option>
                <option value="2">Yes</option>
            </select>
            <br><br><br>


            III. Take a photo showing appliance base:
            <br><br>

            <input id="image10" type="file" name="photo10" onchange="PreviewImage10();" accept="image/*">
            <br><br>
            <img id="preview10" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
            <br><br><br>

            IV. This section is finished. Progress to next section.
            <br><br><br>
        </div>
        <br><br>









        <div id="N">
            <br>
            <h3>N. Safety on Completion</h3>


            I. Take a wide-angle photo of the Appliance:
            <br><br>

            <input id="image8" type="file" name="photo8" onchange="PreviewImage8();" accept="image/*">
            <br><br>
            <img id="preview8" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
            <br><br><br>


            II. Any further work required?
            <br><br>

            <select name="yn5" onchange="showDiv5(this)">
                <option value="0" selected></option>
                <option value="1">No</option>
                <option value="2">Yes</option>
            </select>

            <div id="hidden_div13" style="display:none;">
                <br>
                <textarea rows="5" cols="60" name="description3" placeholder="Enter the work details here."></textarea>
                <br><br>
            </div>
            <br><br><br>


            III. Any further notes?
            <br><br>

            <select name="yn6" onchange="showDiv6(this)">
                <option value="0" selected></option>
                <option value="1">No</option>
                <option value="2">Yes</option>
            </select>

            <div id="hidden_div14" style="display:none;">
                <br>
                <textarea rows="5" cols="60" name="description4" placeholder="Enter the notes here."></textarea>
                <br><br>
            </div>
            <br><br><br>


            IV. Any accidenatal damage caused by you?
            <br><br>

            <select name="yn7" onchange="showDiv7(this)">
                <option value="0" selected></option>
                <option value="1">No</option>
                <option value="2">Yes</option>
            </select>

            <div id="hidden_div15" style="display:none;">
                <br>

                <div style="margin-left: 50px;">
                    a. Take a photo of the damage:
                    <br><br>
                    <input id="image9" type="file" name="photo9" onchange="PreviewImage9();" accept="image/*">
                    <br><br>
                    <img id="preview9" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
                    <br><br><br>

                    b. How did you cause the damage?
                    <br><br>
                    <textarea rows="5" cols="60" name="description5" placeholder="Enter details here."></textarea>
                    <br><br>
                </div>
            </div>
            <br><br><br>


            V. This section is finished. Fill the general summary report and submit the file.
            <br><br><br>

        </div>


        <h2 id="summary_report">Summary Report</h2>
        <textarea rows="8" cols="80" name="description6" placeholder="Enter summary report here."></textarea>
        <br><br><br>

        <!--Submit and Reset-->
        <input type="submit" name="submit" id="submit" style="padding:5px;" value="Submit Details" title="This will upload all the details from step 1,2 & 3. Finalize before uploading.">
        <input type="reset" name="reset" id="reset" style="padding:5px; margin-left:1ch;" value="Reset All Entries" title="This will clear all data. Proceed with caution.">
    </form>
</body>

</html>


<!--

CHECKLIST {For hot water storage tank}

4. Water and Gas Connection
  Is there a non return Valve?
  Option: Yes: [Photo]
           No: [Photo]
  Next: Is there a gas isolation valve? Yes/ No [photo]
  Next: Is there any pex connections? Yes
                                      {is the pex compliant? (black pex is UV stable.)}
                                          yes [photo and finish]
                                          no [photo of exposed pex pipe] ==>
                                                                            Can this be rectified with UV stable Duct tape?
                                                                            Options: (300 mm MAX) Yes, I have rectified this problem with duct tape. [photo of rectification finish]
                                                                                     No we will need a return visit. [Finish]
                                      No  [finish]

5. Integrity/ Clearances of Flue System
Does the Flue have correct clearances e.g. 300mm power flue as per fact sheet 26
Yes
NO: Describe the clearance issue (text box) and photo of incorrect flue clearance
    if we moved or relocated this appliance, will it correct the flue clearance?
      yes [what can we do to correct the clerance issue? (text box) and photo and finish]
      no. {finish}


6. P.T.R Drain
Is the PTR drain compliant with Technical Solution Sheet 6.09?
yes/no. [photo and finish]

7. Tempering Valve
Is there a tempering valve?
yes [photo] Any issues found in valve? Yes [Text Notes and finish]
                                       No {finish}
no {finish}

8. Pilot/ Thermocouple/ Burner Storage
ignition system:OPTIONS Flame sensor/igniter , pilot/thermocouple, hot surface ignitor
Any isssues with ignition system? yes [notes, photo finish]
                                  no [finish]

9. Gas Valves storage hot water
Photo of gas valve, inlet pressure, adjusted burner pressure, soapy water test {4 seperate pics}
Issues in gas valve: Yes {is the gas valve faulty and needs to be replaced?}
                          [You have indicated that gas valve needs replacement please check if its is low pressure issue from gas meter.]
                            - Faulty gas control [photo of Burner Aeration [finish]]
                            - Internal leak on the gas valve [will you be capping the water service off? Yes/ No ==> photo of Burner Aeration [finish]]
                     No: photo of Burner Aeration [finish]

10. Gas/ Electrical Safety
Are there any safety concerns with gas and electricity?
Yes: Is the situation life threatening?
  Yes: Contact Service Work Manager immediately. {notes photo finish}
No: Finish






1. General Appliance Photo
  a. Take 1 photo 2 meters away of the appliance showing its surrounding
    [Upload Photo]
  b. Is there any visible pre-existing damage to the appliance? [yes/ no option]
    if yes {photo of damage} if no (move to step 2)

2. Data Plate
  a. Is the data plate accessible?
    if yes [photo]/ if no [reason]
  b. if no [Why cant the data plate be accessed?]
     Options: Data plate has been removed.
              Not easily accessible.
              Worn unreadable.
  c. IF worn unreadable [take a photo of worn data plate.]

3. Support/ Fixing/ Securing of Appliance
  Options: Appliance is secured correctly. [Photo and finish.]
           Appliance is secured incorrectly. [note {What is wrong with current securing of appliance}, photo and finish.]
           Appliance is not required to be secured. [finish.]
           Appliance not secure. [note {How should the appliance be secured}, photo and finish]
           Appliance not level and plumb. [finish.]

11. Appliance Condition
Good and safe {finish}
General Wear and Tear/ Working Condition [finish]
Worn condition due to age (safe and operational) [finish]
UNSAFE requires disconnection and rectification [disconnect immediately and is there asbestos flue to be removed? Yes/no finish]
Poor Condition requires Replacement (Not disconnected) [is there asbestos flue to be removed? Yes/no finish]
Poor Condition requires Replacement (Disconnected) [Whats wrong? (text box) and is there asbestos flue to be removed? Yes/no finish]
Requires part but functional [finish]
Requires part (Appliance not operational) [Does the appliance needs to be disconnected until parts are replaced? yes - disconnect / finish
                                                                                                                 no - finish
Safety protocol that needs disconnection and replacement [Disconnect / is there asbestos flue to be removed? Yes/no finish]
Appliance not operational [Was this appliance not operating before your attendance?] yes - finish
                                                                                     no - do we need a diagonistic to attend to fix? yes/no finish.


12. Appliance Operation
Is the appliance working?
  Yes [finish]
  Appliance capped off [Mark the capped off and filled out disconnection workflow]
  NO: Appliance not operational, need diagonistic
  NO: requires part
  NO: was previously disconeeted
  NO: other reason [text box for reason]


13. Appliance Base
Do the appliance needs a base? (Select No, if sitting on a concrete or wall-mounted)
Yes- Does it have a solid base? (yes/no) - Is the appliance level? yes/no - photo
No- Is the appliance level? yes/no - photo

14. Safety on completion
  Photo - wide as possible
  Any further work required? yes - notes
                             no - ==>
  Any further notes? yes- notes
                     no - ==>
  Any accidenatal damage caused by you? yes - photo and explanation (text box)
                                        no - finish


-->