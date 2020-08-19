<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        $users = factory(User::class)->times(10)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'EZ-dreamer';
        $user->email = 'ez_dreamer@163.com';
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
        $user->save();

        // 初始化用户角色，将 1 号用户指派为『站长』
        $user->assignRole('Founder');

        // 将 2 号用户指派为『管理员』
        $user = User::find(2);
        $user->name = 'Eleven';
        $user->email = 'eleven@example.com';
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/Lhd1SHqu86.png';
        $user->save();
        $user->assignRole('Maintainer');
    }
}
