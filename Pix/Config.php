<?php

namespace Ga\Pix;

class Config {

    const BaseImg = "./baseA.png"; //基础图片用哪个
    const FamilyImgPath = "./Family"; //每一代的图片放到哪个目录下
    const GenerationMaX = 100; //最多迭代多少次
    const drawByCnt = 10; //多少代画一次当前代内图片
    const FamilyCnt = 16; //种群内扇贝数量
    const ChdCnt = 2; //种群每次生成的孩子有几个（同时也是每次杀死的种群扇贝数量）
    const variationCnt = 2; //每次基因变异的个数（产生多少个随机像素点）

}