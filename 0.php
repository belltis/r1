<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta http-equiv="Cache-Control" content="no-transform"> 
<meta http-equiv="Cache-Control" content="no-siteapp"> 
<title>无标题文档</title>
</head>

<body>
<dialog id="myDialog">
  <h2>提示</h2>
  <p>这是一个原生模态框！</p>
  <button onclick="myDialog.close()">关闭</button>
</dialog>

<button onclick="myDialog.showModal()">打开对话框</button>

<meter min="0" max="100" low="30" high="80" optimum="200" value="10"></meter>
</body>
</html>
