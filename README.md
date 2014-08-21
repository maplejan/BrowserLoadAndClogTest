# Browser Load And Clog Test


一系列的 benchmark 和 case 测试。
  
## 目的
1. 主要用于检测不同浏览器在 DOM 解析过程中加载外部资源的规则
2. 观察 JavaScript 代码对 DOM 解析的堵塞情况

---------------------------------------

### 记录 2014-08-21

#### 测试浏览器
* Desktop
  * Chrome 36.0.1985.143
  * IE 11.0.9600.17239
  * Firefox 31.0
  * Safari 7.0.4
* iOS 7.1.2
  * Safari
  * Chrome 36.0.1985.57
  * MicroMessenger 5.4
* Android 4.0.4
  * Chrome 34.0.1847.114
  * UCBrowser 9.9.2.467
  * MQQBrowser 5.2
  * Native

#### 总结
* DOM 的解析过程，是自上而下的，“扫描”整个文档。
* DOMContentLoaded 触发前，任何 JavaScript 代码都会阻塞 DOM 的解析。
* 常见的外部资源，其加载优先级为：css > js > img。
* 资源加载和 DOM 解析是两个独立的线程。
* 资源加载的方式是并行加载，一般同时加载6个资源，其余资源会处于阻塞状态，等待前面的资源加载完成。
* 文档中的所有 css 和 js 外部资源，在 DOM 解析过程前便已发起加载请求。
* 只有当 DOM 解析到 img 标签时，才会发起相应的加载请求。
  
