<?php class MySQLDriver extends
DBCommonMethods implements DBInterface {
    public function __construct($host, $db, $uid, $password)
    {
        parent::__construct($host, $db, $uid, $password);
    }
    public function db_connect()
    {
        // TODO: Implement db_connect() method.
    }
    public function delete($where)
    {
        // TODO: Implement delete() method.
    }
    public function insert($data)
    {
        // TODO: Implement insert() method.
    }
    public function read($where)
    {
        // TODO: Implement read() method.
    }
    public function update($where)
    {
        // TODO: Implement update() method.
    }
}
?>

