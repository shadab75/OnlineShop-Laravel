<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Categories Permissions
         */
        Permission::query()->insert([
         [
             'title'=>'read-category',
             'label'=>'مشاهده دسته بندی',
         ],
         [
                'title'=>'create-category',
                'label'=>'ایجاد دسته بندی',
         ],
         [
                'title'=>'update-category',
                'label'=>'ویرایش دسته بندی',
         ],

          [
                'title'=>'delete-category',
                'label'=>'حذف دسته بندی',
          ],


        ]);
        /**
         * Brands Permissions
         */
        Permission::query()->insert([
            [
                'title'=>'read-brand',
                'label'=>'مشاهده برند',
            ],
            [
                'title'=>'create-brand',
                'label'=>'ایجاد برند',
            ],
            [
                'title'=>'update-brand',
                'label'=>'ویرایش برند',
            ],

            [
                'title'=>'delete-brand',
                'label'=>'حذف برند',
            ],


        ]);
        /**
         * products Permissions
         */
        Permission::query()->insert([
            [
                'title'=>'read-product',
                'label'=>'مشاهده محصول',
            ],
            [
                'title'=>'create-product',
                'label'=>'ایجاد محصول',
            ],
            [
                'title'=>'update-product',
                'label'=>'ویرایش محصول',
            ],

            [
                'title'=>'delete-product',
                'label'=>'حذف محصول',
            ],

        ]);
        /**
         * Discounts Permissions
         */
        Permission::query()->insert([
            [
                'title'=>'read-discounts',
                'label'=>'مشاهده تخفیف',
            ],
            [
                'title'=>'create-discounts',
                'label'=>'ایجاد تخفیف',
            ],
            [
                'title'=>'update-discounts',
                'label'=>'به روز رسانی تخفیف',
            ],

            [
                'title'=>'delete-discounts',
                'label'=>'حذف تخفیف',
            ],


        ]);

        /**
         * Pictures Permissions
         */
        Permission::query()->insert([
            [
                'title'=>'read_picture',
                'label'=>'مشاهده تصویر',
            ],
            [
                'title'=>'create_picture',
                'label'=>'ایجاد تصویر',
            ],
            [
                'title'=>'update_picture',
                'label'=>'به روز رسانی تصویر',
            ],

            [
                'title'=>'delete_picture',
                'label'=>'حذف تصویر',
            ],


        ]);

        /**
         * [ببثقس] Permissions
         */
        Permission::query()->insert([
            [
                'title'=>'read-offer',
                'label'=>'مشاهده کد تخفیف',
            ],
            [
                'title'=>'create-offer',
                'label'=>'ایجاد کد تخفیف',
            ],
            [
                'title'=>'update-offer',
                'label'=>'به روز رسانی کد تخفیف',
            ],

            [
                'title'=>'delete-offer',
                'label'=>'حذف کد تخفیف',
            ],


        ]);
        /**
         * roles Permissions
         */
        Permission::query()->insert([
            [
                'title'=>'read-role',
                'label'=>'مشاهده نقش',
            ],
            [
                'title'=>'create-role',
                'label'=>'ایجاد نقش',
            ],
            [
                'title'=>'update-role',
                'label'=>'به روز رسانی نقش',
            ],

            [
                'title'=>'delete-role',
                'label'=>'حذف نقش',
            ],

        ]);

        /**
         * ِdashboard Permissions
         */
        Permission::query()->insert([
            [
                'title'=>'view-dashboard',
                'label'=>'مشاهده داشبورد',
            ],



        ]);

    }
}
