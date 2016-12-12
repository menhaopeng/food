<?php

class foodTableSeeder extends Seeder {
    public function run()
    {
        
        DB::table('food_caipu_category')->insert(array(
            
            array(
                'cate_id' => 1,
                'cate_name' => '菜系',
                'cate_title' => '菜系,又称“帮菜”,是指在选料、切配、烹饪等技艺方面,经长期演变而自成体系,具有鲜明的地方风味特色,并为社会所公认的中国饮食的菜肴流派。',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 0,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 2,
                'cate_name' => '鲁菜',
                'cate_title' => '鲁菜，是起源于山东的齐鲁风味，是中国传统四大菜系（也是八大菜系）中唯一的自发型菜系（相对于淮扬、川、粤等影响型菜系而言），是历史最悠久、技法最丰富、难度最高、最见功力的菜系。',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 1,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 3,
                'cate_name' => '川菜',
                'cate_title' => '川菜即四川菜肴，是中国特色传统的四大菜系之一、中国八大菜系之一。',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 1,
                'cate_pid' => 1,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 16,
                'cate_name' => '红烧',
                'cate_title' => '红烧菜，家家都在做，成品多为深红、浅红或枣红色，它的色泽红润，味道鲜咸微甜，酥烂适口，汁黄浓香。',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 12,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 12,
                'cate_name' => '烹饪',
                'cate_title' => '烹饪指的是膳食的艺术。对食品作加工处理，使食物更可口，更好看，更好闻。',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 1,
                'cate_pid' => 0,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 13,
                'cate_name' => '煎',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 12,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 14,
                'cate_name' => '炒',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 12,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 15,
                'cate_name' => '炸',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 12,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 17,
                'cate_name' => '煮',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 12,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 18,
                'cate_name' => '蒸',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 12,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 19,
                'cate_name' => '烧烤',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 12,
                'cate_view' => 0,
            ),

            array(
                'cate_id' => 20,
                'cate_name' => '焖',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 12,
                'cate_view' => 0,
            ),

        ));
        DB::table('food_shicai_category')->insert(array(
            
            array(
                'cate_id' => 1,
                'cate_name' => '肉类',
                'cate_title' => '肉类，是动物的皮下组织及肌肉，可以食用。其富含大量的蛋白质和脂肪，以及卡路里，其属于酸性食物。',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 0,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 4,
                'cate_name' => '猪',
                'cate_title' => '猪，古杂食类哺乳动物。分为家猪和野猪。现在一般认为猪是猪科的简称。',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 1,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 5,
                'cate_name' => '牛',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 1,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 6,
                'cate_name' => '羊',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 1,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 7,
                'cate_name' => '鸡',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 1,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 8,
                'cate_name' => '鸭',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 1,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 9,
                'cate_name' => '鹅',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 1,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 10,
                'cate_name' => '水产',
                'cate_title' => '海洋、江河、湖泊里出产的动物或藻类等的统称，和相关的服务或加工行业的总称。',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 0,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 11,
                'cate_name' => '虾',
                'cate_title' => '虾（Shrimp），是一种生活在水中的节肢动物，属节肢动物甲壳类，种类很多，包括南极红虾、青虾、河虾、草虾、对虾、明虾、龙虾等。',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 10,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 12,
                'cate_name' => '蟹',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 10,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 13,
                'cate_name' => '贝',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 10,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

            array(
                'cate_id' => 14,
                'cate_name' => '鱼',
                'cate_title' => NULL,
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_order' => 0,
                'cate_pid' => 10,
                'cate_view' => 0,
                'cate_thumb' => NULL,
            ),

        ));
        DB::table('food_user')->insert(array(
            
            array(
                'user_id' => 1,
                'username' => 'admin',
                'password' => 'eyJpdiI6IlBueVdUVFdFZTRYXC9tNlZIZlwvTGo2dz09IiwidmFsdWUiOiJ0aUswQVhoa09LeFphQzdUc1QwMG53PT0iLCJtYWMiOiJhODVhODI2ZTVhYTJjNWNmNjNkZDQzODUyZjg1YmE0YmQ4N2NjMDY2YTBmNmYyMGFiZTAzZDAxNWE3ZTUxNjU0In0',
            )

        ));
    }
}