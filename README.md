# php-spl-manual

- 数据结构
  - 双链表是一种重要的线性存储结构，对于双链表中的每个节点，不仅仅存储自己的信息，还要保存前驱和后继节点的地址。
  - [双向列表-SplDoublyLinkedList](https://github.com/xushuai1898/php-spl-manual/blob/master/res/SplDoublyLinkedList.php)
  - [栈-SplStack 继承自SplDoublyLinkedList,默认模式IT_MODE_LIFO]()
  - [队列-SplQueue 继承自SplDoublyLinkedList]()
  - 堆(Heap)就是为了实现优先队列而设计的一种数据结构，它是通过构造二叉堆(二叉树的一种)实现。根节点最大的堆叫做最大堆或大根堆（SplMaxHeap），根节点最小的堆叫做最小堆或小根堆（SplMinHeap）。二叉堆还常用于排序(堆排序)。
  - [堆-SplHeap 抽象类]()
  - [最大堆-SplMaxHeap]()
  - [最小堆-SplMinHeap]()
  - 优先队列也是非常实用的一种数据结构，可以通过加权对值进行排序，由于排序在php内部实现，业务代码中将精简不少而且更高效。通过SplPriorityQueue::setExtractFlags(int  $flag)设置提取方式可以提取数据（等同最大堆）、优先级、和两者都提取的方式。
  - [优先队列-SplPriorityQueue]()
  
- 迭代器