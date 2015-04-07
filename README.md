# workerman-for-win
workerman-for-win
## 运行
双击start.bat运行

## 与Linux多进程版本的区别
1、单进程，也就是说count属性无效  
2、由于php在win下无法fork进程，Applications/YourApp/start.php被拆成多个子启动项，如start_web.php   start_gateway.php，每个文件自动启动一个进程运行  
3、由于php在win下不支持信号，所以无法使用reload、status命令  
