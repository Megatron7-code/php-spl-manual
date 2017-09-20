<?php
/**
 * Created by PhpStorm.
 * User: megatron
 * Date: 2017/9/20
 * Time: 下午2:00
 */
include_once "tools.php";

/*
 * 队列 先进先出的原则
 */
$queue = new SplQueue();
$queue->enqueue('a');
$queue->enqueue('b');
$queue->enqueue('c');

$queue->dequeue();

pp($queue);