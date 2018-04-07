<?php
use Migrations\AbstractSeed;
use \Cake\Auth\DefaultPasswordHasher;

/**
 * Admins seed.
 */
class AdminsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'username' => 'admin',
            'password' => (new DefaultPasswordHasher)->hash('admin'),
        ];

        $table = $this->table('admins');
        $table->insert($data)->save();
    }
}
