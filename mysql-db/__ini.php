<?php
//
require 'databases/DBConnection.php';
require 'databases/QueryBuilder.php';
QueryBuilder::make(DBConnection::make());
