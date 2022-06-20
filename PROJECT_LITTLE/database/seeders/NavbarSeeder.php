<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Navbar;
  
class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'Trang chủ',
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Sự kiện',
                'route' => 'products.index',
                'ordering' => 2,
            ],
            [
                'name' => 'Liên hệ',
                'route' => 'about.us',
                'ordering' => 3,
            ]
        ];
  
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}