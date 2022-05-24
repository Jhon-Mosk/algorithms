<?php

interface IAbstractFactory
{
    public function createDB();
}

class MySQLFactory implements IAbstractFactory
{
    public function createDB()
    {
        return new MySQLDB();
    }
}

class PostgreSQLFactory implements IAbstractFactory
{
    public function createDB()
    {
        return new PostgreSQLDB();
    }
}

class OracleFactory implements IAbstractFactory
{
    public function createDB()
    {
        return new OracleDB();
    }
}

interface IDB
{
    public function DBConnection();
    public function DBRecord();
    public function DBQueryBuiler();
}

class MySQLDB implements IDB
{
    public function DBConnection()
    {
        return "MySQLDBConnection";
    }
    public function DBRecord()
    {
        return "MySQLDBRecord";
    }
    public function DBQueryBuiler()
    {
        return "MySQLDBQueryBuiler";
    }
}

class PostgreSQLDB implements IDB
{
    public function DBConnection()
    {
        return "PostgreSQLDBConnection";
    }
    public function DBRecord()
    {
        return "PostgreSQLDBRecord";
    }
    public function DBQueryBuiler()
    {
        return "PostgreSQLDBQueryBuiler";
    }
}

class OracleDB implements IDB
{
    public function DBConnection()
    {
        return "OracleDBConnection";
    }
    public function DBRecord()
    {
        return "OracleDBRecord";
    }
    public function DBQueryBuiler()
    {
        return "OracleDBQueryBuiler";
    }
}

class DB
{
    public function createDB(IAbstractFactory $abstractFactory)
    {
        $db = $abstractFactory->createDB();
        $db->DBConnection();
        $db->DBRecord();
        $db->DBQueryBuiler();
    }
}
