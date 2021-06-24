<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class User extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
      $users = $this->table('users', array('id' => 'user_id'));
      $users->addColumn('user_name', 'string', ['limit' => 225])
            ->addColumn('email', 'string', ['limit' => 225])
            ->addColumn('password','string', ['limit' => 255])
            ->addColumn('gender', 'string', ['limit' => 225, 'null' => true])
            ->addColumn('telephone', 'string', ['limit' => 225, 'null' => true])
            ->addColumn('avatar', 'string', ['limit' => 225, 'null' => true])
            ->addColumn('address', 'string', ['limit' => 225, 'null' => true])
            ->addColumn('is_active', 'boolean')
            ->addColumn('role', 'string', ['limit' => 225, 'null' => true])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
