<?php

//debug_backtrace() || header('LOCATION:../view');
//namespace fujitsu\model;

abstract class Table
{
    protected $tableName = '';
    protected $display_error = 1;

    public function __construct()
    {
    }

    protected function setTableName($value)
    {
        $this->tableName = $value;
    }

    protected function getTableName()
    {
        return $this->tableName;
    }

    protected function get_errors($class = "", $function = "", $line = "", $thrown = "", $statement = "")
    {

        // Display the mysql ERROR
        if ($this->display_error == 1) {
            $errors = new stdClass();
            $errors->CLASS_NAME = $class;
            $errors->FUNCTION_NAME = $function;
            $errors->LINE_NUM = $line;
            $errors->ERROR_THROWN = $thrown;
            $errors->SQL_STATEMENT = $statement;

            return $errors;
        } else {
            return null;
        }
    }

    private function executeQuery($statement, &$error = '')
    {
        global $dbcon;
        
        $q = $dbcon->query($statement);
        return $q->fetch(PDO::FETCH_ASSOC);

        // try {
        //     if (!$q = $dbcon->query($statement)) {
        //         throw new PDOException(json_encode($dbcon->errorInfo()));
        //     }
        //     $results = $q->fetchAll(PDO::FETCH_ASSOC);

        //     if (!empty($results)) {
        //         return $results;
        //     } else {
        //         return 0;
        //     }
        // } catch (PDOException $e) {
        //     $error = 'ERROR';
        //     return $this->get_errors(get_class($this), __FUNCTION__, __LINE__, $e->getMessage(), $statement);
        // }
    }

    public function getAllRecords($error)
    {
        $statement = "SELECT * FROM {$this->tableName} WHERE status = '1' and 1";

        return $this->executeQuery($statement, $error);
    }

    public function insertRecord(array $data, $error)
    {
        $fields='';
        $values='';
        foreach ($data as $k => $v) {
            $fields .= "`" . $k . "`,";
            $values .= "'" . $v . "',";
        }
        $fields = trim($fields, ",");
        $values = trim($values, ",");

        $statement = "INSERT INTO {$this->tableName} ({$fields}) VALUES ($values)";

        return $this->executeQuery($statement, $error);
    }

    public function updateRecords(array $primaryKey, $error)
    {
        foreach ($primaryKey as $key) {
            $condition .= "`empID` = '" . $key . "' or ";
        }
        $condition = trim($condition, ' or ');
        $statement = "UPDATE employee SET `status` = '0' WHERE {$condition} and 1";

        return $this->executeQuery($statement, $error);
    }
}