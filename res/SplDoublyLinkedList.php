<?php
/**
 * Created by PhpStorm.
 * User: megatron
 * Date: 2017/9/20
 * Time: 上午11:16
 */
include_once "tools.php";

$dlist = new SplDoublyLinkedList();
/*
 * 常规操作
 */
$dlist->push('apple');//插入值
$dlist->push('ball');
$dlist->push('ceil');
$dlist->add(2, 'h');//指定位置插入值，如果队列长度小于index，则抛出异常（OutOfRangeException:）
$dlist->shift();//弹出列表首部节点
$dlist->pop();  //弹出列表尾部节点
$dlist->unshift('unshift');//从列表头部插入节点
echo $dlist->count().PHP_EOL;//返回节点个数
echo $dlist->bottom().PHP_EOL;//返回底部节点
echo $dlist->top().PHP_EOL;//返回头部节点
p($dlist->isEmpty());//是否为空

/*
 * 迭代器操作 foreach
 */
$dlist->current();//返回当前节点
$dlist->next();//移动指针至下一个节点
$dlist->prev();//移动指针至上一个节点
$dlist->key();//当前节点key值
$dlist->valid();//检测列表是否有更多的节点   为空返回false
$dlist->rewind();//重置指针

/*
 * 设置迭代器
 */
p($dlist->getIteratorMode());
$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

/*
 * 根据偏移量操作列表,继承自ArrayAccess
 */
p($dlist->offsetExists(3));//检测偏移量是否存在
$dlist->offsetSet(2, 'j');//根据偏移量设置节点
$dlist->offsetUnset(2);//根据偏移量复原元节点
p($dlist->offsetGet(2));//根据偏移量获取节点

/*
 * 序列化
 */
pp($dlist->serialize());//序列化列表
$dlist->unserialize('');//反序列化列表

pp($dlist);