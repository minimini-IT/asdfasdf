<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
            [
                "belongs_id" => 1,
                "ranks_id" => 1,
                "roles_id" => 2,
                "username" => "tanaka",
                "first_name" => "田中",
                "last_name" => "高志",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ],
            [
                "belongs_id" => 2,
                "ranks_id" => 2,
                "roles_id" => 3,
                "username" => "honda",
                "first_name" => "本田",
                "last_name" => "啓介",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ],
            [
                "belongs_id" => 3,
                "ranks_id" => 3,
                "roles_id" => 4,
                "username" => "yamanaka",
                "first_name" => "山中",
                "last_name" => "雄大",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 1
            ],
            [
                "belongs_id" => 4,
                "ranks_id" => 4,
                "roles_id" => 4,
                "username" => "yoshida",
                "first_name" => "吉田",
                "last_name" => "啓介",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ],
            [
                "belongs_id" => 1,
                "ranks_id" => 1,
                "roles_id" => 2,
                "username" => "nagata",
                "first_name" => "永田",
                "last_name" => "ドンキー",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ],
            [
                "belongs_id" => 2,
                "ranks_id" => 4,
                "roles_id" => 3,
                "username" => "ootori",
                "first_name" => "鳳",
                "last_name" => "要",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ],
            [
                "belongs_id" => 3,
                "ranks_id" => 1,
                "roles_id" => 3,
                "username" => "abeno",
                "first_name" => "アベノ",
                "last_name" => "ミクス",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ],
            [
                "belongs_id" => 4,
                "ranks_id" => 3,
                "roles_id" => 3,
                "username" => "oono",
                "first_name" => "大野",
                "last_name" => "香住",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ],
            [
                "belongs_id" => 1,
                "ranks_id" => 3,
                "roles_id" => 3,
                "username" => "takeuchi",
                "first_name" => "竹内",
                "last_name" => "正志",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ],
            [
                "belongs_id" => 2,
                "ranks_id" => 3,
                "roles_id" => 3,
                "username" => "maki",
                "first_name" => "牧",
                "last_name" => "翔悟",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ],
            [
                "belongs_id" => 3,
                "ranks_id" => 2,
                "roles_id" => 3,
                "username" => "asada",
                "first_name" => "浅田",
                "last_name" => "優子",
                "password" => $this->_setPassword("123456"),
                "user_sort_number" => 20,
                "delete_flag" => 0
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }

    protected function _setPassword($value){
      $hasher = new DefaultPasswordHasher();
      return $hasher->hash($value);
    }
}
