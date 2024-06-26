<?php
function get_products() {
  return [
    '1' => [
      'title' => 'Эпичная кружка',
      'url' => 'img/1.jpeg',
      'text' => 'Кружка с ярким и запоминающимся дизайном, создающая ощущение величия и значимости.',
    ],

    '2' => [
      'title' => 'Механическая кружка',
      'url' => 'img/2.jpeg',
      'text' => 'Кружка с элементами механики или техники, напоминающая о промышленном стиле.',
    ],

    '3' => [
      'title' => 'Стеклянная кружка',
      'url' => 'img/3.jpeg',
      'text' => 'Прозрачная кружка из стекла, позволяющая видеть напиток внутри и создающая элегантный внешний вид.',
    ],

    '4' => [
      'title' => 'Золотая кружка',
      'url' => 'img/4.jpeg',
      'text' => 'Кружка с элементами золотого декора или покрытием, придающая роскошь и изысканность.',
    ],

    '5' => [
      'title' => 'Аристократическая кружка',
      'url' => 'img/5.jpeg',
      'text' => 'Кружка с изысканным дизайном, подчеркивающая высокий статус и изысканность владельца.',
    ],

    '6' => [
      'title' => 'Королевская кружка',
      'url' => 'img/6.jpeg',
      'text' => 'Кружка с роскошным и королевским дизайном, символизирующая благородство и величие.',
    ],

    '7' => [
      'title' => 'Магическая кружка',
      'url' => 'img/7.jpeg',
      'text' => 'Кружка с мистическими узорами или символами, создающая атмосферу волшебства и загадочности.',
    ],

    '8' => [
      'title' => 'Расписная кружка',
      'url' => 'img/8.jpeg',
      'text' => 'Кружка с яркими узорами или рисунками, придающая индивидуальность и оригинальность каждому экземпляру.',
    ]
  ];
}

function get_product_attribute($id, $attr) {
  $products = get_products();
  $result = $products[$id][$attr] ?? null;
  return $result;
}

function get_product_title($id) {
  return get_product_attribute($id, 'title');
}

function get_img_url($id) {
  return get_product_attribute($id, 'url');
}

function get_text($id) {
    return get_product_attribute($id, 'text');
}