<?php
/*
 * This file is part of Webisters Database Extra Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Database\Extra\Seeds;

use Framework\Database\Extra\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        $this->call([
            UsersSeeder::class,
            PostsSeeder::class,
        ]);
    }

    public function call(Seeder | array | string $seeds) : void
    {
        parent::call($seeds);
    }
}
