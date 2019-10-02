<?php

class TeamParser {

    //The team that the Team parser will use
    public static $team = array();
    //This function will parse our cars data to an array
 static function parseRoaster($fileContents)   {
    //Instantiate a new team
    $team = new Team();

    //create an array out of each line of the file (split by newline character)
    $lines = explode("\n",$fileContents);
    //Iterating through each line of the file
    for($x=1; $x < count($lines); $x++)
    {
            $value= $lines[$x];
            //Split the columns up into an array
            $cols = explode(",",$value);
            //Check we have the right amount of columns
            if (count($cols) != 9)   {
                throw new Exception("There is a problem with the file on $key");
            } 
            else 
            {
                //Trim out the white space
                foreach($cols as $col)
                {
                    $col = trim($col);
                }
                //Split the name
                $name =explode(" ",$cols[1]);
                if(isset($name[0]) && isset($name[1]))
                {
                    $firstName = $name[0];
                    $lastName = $name[1];
                }
                

            //Instantiate a new Player
            $p = new Player($cols[0], 
            $firstName, 
            $lastName, 
            $cols[2], 
            $cols[3], 
            $cols[4], 
            $cols[5], 
            $cols[6], 
            $cols[7],
            $cols[8]);

            //Add the new player to the team
            $team->addPlayer($p);
            }
        }
    //Return the team
   return $team;
    
   
} }?>