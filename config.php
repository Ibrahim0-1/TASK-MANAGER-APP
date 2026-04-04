<?php
class Connexion{

    private static $_host = "localhost";
    private static $_user = "root";
    private static $_pwd = "";
    private static $_dbname = "task_db";

    public static function getPDO()
    {
        try {
            $pdo = new PDO(
                "mysql:host=" . self::$_host . ";dbname=" . self::$_dbname ,
                self::$_user,
                self::$_pwd
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

?>