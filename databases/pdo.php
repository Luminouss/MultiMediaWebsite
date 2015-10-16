<?php
/**
 * Created by PhpStorm.
 * User: devin
 * Date: 16.10.2015
 * Time: 15:04
 */

class PDO
{
    private $_connection;

    /** Variabeln fuer die Datenbank verbindung */
    private $_dbhost = "localhost"; //hostname
    private $_dbname = "web"; // datenbankname
    private $_dbuser = "root"; //username
    private $_dbpass = ""; //password

    /**
     * Konstruktor. wird beim laden der datei automatisch gecallt
     */
    public function __construct()
    {
        $this->dbConnect();
    }


    /**
     * Verbindung mit der Datenbank
     */
    private function dbConnect()
    {
        try
        {
            /** Erstellt die Datenbankverbindung als eine Variable */
            $this->_connection = new PDO('mysql:host=' . $this->_dbhost . ';dbname=' . $this->_dbname,$this->_dbuser,$this->_dbppass);
        }
        catch (PDOException $e)
        {
            /** Gibt Fehler aus, falls welche auftreten */
            printf($e->getMessage() . "<br>");
        }
    }
}