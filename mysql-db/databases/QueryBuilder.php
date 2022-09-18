<?php
//
class QueryBuilder
{
    private static $pdo;
    //
    public static function make(PDO $pdo)
    {
        self::$pdo = $pdo;
    }
    //
    public static function get(string $table)
    {
        $query = self::$pdo->prepare("SELECT * FROM  {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    //
    public static function insert($table,$data)
    {
        $fields = array_keys($data);
        $fieldsStr = implode(',',$fields);
        $fieldsVal = str_repeat('?,',count($fields)-1).'?';
        $q = "INSERT INTO {$table} ({$fieldsStr}) VALUES({$fieldsVal})";
        $statment = self::$pdo->prepare($q);
        $statment->execute(array_values($data));
    }
    //
    public static function update($table,$id,$data)
    {
        $fields = implode('= ?,',array_keys($data)).'=?';
        $values = array_values($data);
        $q = "UPDATE {$table} SET {$fields} WHERE id={$id}";
        $statment = self::$pdo->prepare($q);
        $statment->execute($values);
    }
    //
    public static function delete($table,$id,$columen = 'id',$operator = '='){
        $q = "DELETE FROM {$table} WHERE {$columen} {$operator} {$id}";
        $statment = self::$pdo->prepare($q);
        $statment->execute();
    }
}
