<?php

class FileAgent {
    
    //attributes for the file name and the contents
    public static $contents = "";
    private static $fileName = "";

    //This functio  loads the contents
    static function read($fileN) {
        $fileName = $fileN;
        
        try {
            $fh = fopen($fileName, 'r');

            if (!$fh)   {
                throw new Exception("We couldnt open the file $fileName.");

            }
            self::$contents = fread($fh, filesize($fileName));
            fclose($fh);
        } catch (Exception $ex) {
            
            echo $ex->getMessage();
        }

    }
    
    //This function saves the file
    static function write($fileContents) {
        try {
            //Open the file handle with the write mode
            $fh = fopen(DATA_FILE,'w');
    
            fwrite($fh,$fileContents);
            //Check if the contents are empty, if they are then throw an exception
            if(empty($fileContents))
            {
                throw new Exception("No contents to be written");
            }
    
            fclose($fh);
        }
        catch(Exception $ex)
        //Catch the exception
        {
            echo $ex->getMessage();
            //Wirte to the error log
            error_log($ex->getMessage(),0);
        }
    
    }
}

?>