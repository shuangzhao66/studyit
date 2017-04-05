# cookie
浏览器端的存储

存储单位
```
1Byte = 8bit
1KB = 1024Byte
1MB = 1024KB
1GB = 1024MB
1TB = 1024GB
```

1. cookie可以用来存储信息（键值对），存储上限为4k
2. cookie分域名存储的（各个域名之间的cookie是相对独立的！）
3. cookie有存储时限的，默认的是浏览器关闭，则cookie到期
4. cookie可以用来在页面之间共享信息

## 如何操作cookie？

1. 直接使用document.cookie可以获取cookie的值，获取到是一个字符串！
2. 直接使用document.cookie可以设置cookie的值，这个设置是追加的操作（下面有演示，仔细看，不要再忘记了！），不是替换

<font color="red">cookie值设置必须是有网的状态，以域名的形式打开</font>

## 如何设置cookie的过期时间
```js
document.cookie = "key=value;expires=" + GMT格式的时间;
```


## document.cookie =  操作的内部实现
```js
var obj = {
	_cookie: ""
}

Object.defineProperty(obj, "cookie", {
	get: function(){
		return this._cookie;
	},
	set: function(value){
		this._cookie += value;
	}
})
```

## 在服务器端操作cookie