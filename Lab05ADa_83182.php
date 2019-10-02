<?php
/*
 * This lab should have the following requirements:
 * POPO - Plain Old PHP Objects (Player Object).
 * File Agent - Utility Class for file operations.
 * Error Handling class - A custom error handline class.
 * HTML form to upload the CSV file. (via the page class)
 */


 //Require files
 require_once "inc/config.inc.php";
 require_once "inc/FileAgent.class.php";
 require_once "inc/Page.class.php";
 require_once "inc/Player.class.php";
 require_once "inc/Team.class.php";
 require_once "inc/TeamParser.class.php";


//Instantiate a new Team
$t =new Team();

//Instantiate a new Team Parser
$tp = new TeamParser();

//Instantiate a new FileAgent
$fa = new FileAgent();

//Check if the file was uploaded, if it was save it.
if (!empty($_FILES)) {
    //Load the file
    $fa::read($_FILES['CSVUpload']['tmp_name']);
    //Save the file
    $fa::write($fa::$contents);
}
    //Load the current file
if (file_exists(DATA_FILE))   {
    //Load the file
    $fa::read(DATA_FILE);
    //Parse the roster
    $t = $tp::parseRoaster($fa::$contents);

    //Sort the team
    $t->sortBy('L');
    //Handle the sorting requested look for the $_GET parameter (I used $_GET["sortBy"])
    if (isset($_GET["sortBy"])) {
    //Check the param, use a switch
      switch($_GET["sortBy"])
      {
          case 'N':
              $t->sortBy('N');
          break;
          case 'F':
              $t->sortBy('F');
          break;
          case 'L':
              $t->sortBy('L');
          break;
          case 'B':
              $t->sortBy('B');
          break;
          case 'A':
              $t->sortBy('A');
          break;
          case 'T':
              $t->sortBy('T');
          break;
          case 'H':
              $t->sortBy('H');
          break;
          case 'W':
              $t->sortBy('W');
          break;
          case 'P':
              $t->sortBy('P');
          break;
          case 'Bp':
              $t->sortBy('Bp');
          break;
          default:
              $t->sortBy('A');
          break;
  
      }
  }
   
} 
//There was no team file...
else {
    //Initialize an empty team.
    $t = new Team();
}
//Render the page
$p = new Page($t->teamName);

//Display the Page headder
$p->header();

//Show the upload form
$p->uploadForm();

//Show the roster
$p->showRoster($t);
    
//Display the page footer
$p->footer();

?>
