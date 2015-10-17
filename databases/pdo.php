<?php
/**
 * Created by PhpStorm.
 * User: devin
 * Date: 16.10.2015
 * Time: 15:04
 */
class PDOConn
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
            $this->_connection = new PDO('mysql:host=' . $this->_dbhost . ';dbname=' . $this->_dbname, $this->_dbuser, $this->_dbpass);
        }
        catch (PDOException $e)
        {
            /** Gibt Fehler aus, falls welche auftreten */
            printf($e->getMessage() . "<br>");
        };
    }

    public function createQuery($type, $sqldata)
    {
        $sql = "";
        switch ($type) {
            case "select":
                $sql = "SELECT ";
                break;
            default:
                break;
        }

        $select = "";
        foreach ($sqldata as $value) {
            lol

        }
        $sql .=

    }

    public function GetQuery($sqldata)
    {
        $sqlstring = "SELECT " . $sqldata[]
    }


    public function getConn()
    {
        return $this->connection;
    }
}