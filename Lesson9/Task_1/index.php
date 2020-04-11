<?php
/*
 * Слишком мало информации о том, для чего нужны данные классы.
 * Я это понял так, Мы обратываем продукт в классе WorkProduct, создаем его, удаляем и т.д.
 * Потом передаем уже готовый продукт в class Product. Но зачем в методе get стоит параметр в задании, я подумал что
 * единственный вариант это кинуть туда класс PrintProduct. Для того чтоб работать в тоге только с class-ом Product.
 * Т.е. в итоге получается class Product в котором мы ничего не правим, один раз написали и все. А остальные два
 * остаются динамическими.
 *
 * И мне не совсем понятен метод Show, я его вынес в class WorkProduct только потому, что его некуда выносить больше,
 * т.к. в Product есть function get, а в PrintProduct есть function print. А по сути они делают отно и тоже.
 *
 * Вобщем отпишитесь, пожалуйста, правильно ли я понял логику данного примера. И что тут можно было бы сделать подругому.

 */

class Product {
    public function set(WorkProduct $name, WorkProduct $value) {}
    public function get(PrintProduct $product) {}
}
Class WorkProduct{
    public function save() {}
    public function update() {}
    public function delete() {}
    public function show() {}
}
Class PrintProduct{
    public function print(WorkProduct $product) {}
}