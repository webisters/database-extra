<?php
/*
 * This file is part of Webisters Database Extra Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Framework\Database\Definition\Table\TableDefinition;
use Framework\Database\Extra\Migration;

return new class() extends Migration {
    protected string $table = 'Users';

    public function up() : void
    {
        $this->getDatabase()->alterTable($this->table)
            ->add(static function (TableDefinition $definition) : void {
                $definition->column('bio')->text()->after('name');
            })->run();
    }

    public function down() : void
    {
        $this->getDatabase()->alterTable($this->table)
            ->dropColumnIfExists('bio')
            ->run();
    }
};
