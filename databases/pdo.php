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
    private $_dbname = "ni668344_1sql1"; // datenbankname
    private $_dbuser = "root"; //username
    private $_dbpass = "123"; //password

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

    public function createGetQuery($x, $y, $z, $order)
    {
        $z2 = "";
        for ($i = 0; i < count($z); $i++) {
            if (i > 0)
                $z2 .= " AND ";
            $z2 .= $z[i][0] . $z[i][1] . $z[i][2];
        }

        $params = array(":x" => $x, ":y" => $y, ":z" => $z2);
        $sql = "SELECT :x FROM :y WHERE :z";
        if (isset($order))
            $sql .= " ORDER BY " . order;

        $sth = $this->_connection->prepare($sql, )
    }

    public function getConn()
    {
        return $this->connection;
    }
}