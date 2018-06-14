<?php

namespace FakerProviderAnimals;

use Faker\Provider\Base;

class Actions extends Base
{
    protected static $actions = array(
        "疝氣的",
        "匿名的",
        "快樂的",
        "悲傷的",
        "憤怒的",
        "痛苦的",
        "失敗的",
        "成功的",
        "無聊的",
        "有趣的",
        "樂觀的",
        "悲觀的",
        "帥氣的",
        "怪怪的",
        "幸福的",
        "狡猾的",
        "惱人的",
        "詭異的",
        "靈異的",
        "愚者的",
        "魔術師",
        "女祭司",
        "皇后的",
        "皇帝的",
        "教宗的",
        "戀人的",
        "戰車的",
        "正義的",
        "隱者的",
        "命運的",
        "力量的",
        "倒吊的",
        "死亡的",
        "節制的",
        "惡魔的",
        "高塔的",
        "星星的",
        "月亮的",
        "太陽的",
        "審判的",
        "世界的",
    );

    /**
     *
     *
     * @example '肥宅的'
     *
     * @return string
     */
    public static function action()
    {
        return static::randomElement(static::$actions);
    }
}