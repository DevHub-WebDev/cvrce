<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>

<h2>All Complaints</h2>

<div class="tab">
  <button class="tablinks" onclick="openComplient(event, 'Hostel')">Hostel</button>
  <button class="tablinks" onclick="openComplient(event, 'Food')">Food</button>
  <button class="tablinks" onclick="openComplient(event, 'DSW')">DSW</button>
   <button class="tablinks" onclick="openComplient(event, 'Placement')">Placement</button>
    <button class="tablinks" onclick="openComplient(event, 'Exam')">Exam</button>
     <button class="tablinks" onclick="openComplient(event, 'Other')">Others</button>
</div>

<div id="Hostel" class="tabcontent">
  <h3>Hostel</h3>
  	<?php

  	?>
</div>


<div id="Food" class="tabcontent">
  <h3>Food </h3>
  	<?php
  	
  	?>
</div>


<div id="DSW" class="tabcontent">
  <h3>DSW</h3>
  	<?php
  	
  	?>
</div>


<div id="Exam" class="tabcontent">
  <h3>Exam</h3>
  	<?php
  	
  	?>
</div>


<div id="Placement" class="tabcontent">
  <h3>Placement</h3>
  	<?php
  	
  	?>
</div>


<div id="Other" class="tabcontent">
  <h3>Other</h3>
  	<?php
  	
  	?>
</div>


<script>
function openComplient(evt, comp) {
    var i, tabcontent, tablinks;comp
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(comp).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 



