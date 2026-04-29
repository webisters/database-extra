<?php declare(strict_types=1);
/*
 * This file is part of Webisters Database Extra Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\Database\Extra;

use Framework\Database\Database;

/**
 * Class Migration.
 *
 * @package database-extra
 */
abstract class Migration
{
    protected Database $database;

    public function setDatabase(Database $database) : static
    {
        $this->database = $database;
        return $this;
    }

    public function getDatabase() : Database
    {
        return $this->database;
    }

    /**
     * Run migration up.
     */
    abstract public function up() : void;

    /**
     * Run migration down.
     */
    abstract public function down() : void;
}
