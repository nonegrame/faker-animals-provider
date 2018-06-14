# 中文版 faker 動物名稱

由於不會弄 i18n 所以只有中文😢

動物名稱翻譯使用 google,bing, wiki及本人的破爛英文

## 安裝

`composer require nonegrame/faker-provider-animals`

## 使用方法

 ```
 $faker = new Faker\Generator();
 // 動物 faker
 $faker->addProvider(new \FakerProviderAnimals\Animals($faker));
 // 形容動作 faker
 $faker->addProvider(new \FakerProviderAnimals\Actions($faker));
 
 echo $faker->action() . $faker->animal();
 ```
 輸出結果`帥氣的加拿大馬鹿`
 
 
 
