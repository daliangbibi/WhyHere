<?php
// 设置页面标题
$title = "Why Here? | 反思你为什么在这";
$bg_url = "https://api.xn--i2r.wang/pic/"; // 背景图片API
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: url('<?php echo $bg_url; ?>') no-repeat center center/cover;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
        }
        .container {
            background: rgba(0, 0, 0, 0.5);
            padding: 30px 40px;
            border-radius: 12px;
            text-align: center;
            backdrop-filter: blur(6px);
        }
        h1 {
            font-size: 2.2rem;
            margin-bottom: 15px;
        }
        p {
            font-size: 1rem;
            opacity: 0.85;
            margin-bottom: 20px;
        }
        .links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
        }
        .links a {
            display: inline-block;
            padding: 8px 14px;
            font-size: 0.95rem;
            color: #fff;
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.25s ease;
        }
        .links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }
        footer {
            position: fixed;
            bottom: 20px;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.75);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🤔 Why are you here?</h1>
        <p>想一想……你为什么会点进来？</p>
        <div class="links">
            <a href="https://喵.wang" target="_blank">喵服务</a>
            <a href="https://github.com/daliangbibi/WhyHere" target="_blank">GitHub 项目</a>
        </div>
    </div>
    <footer>
        © <?php echo date("Y"); ?> WhyHere | 反思人生的小角落
    </footer>
</body>
</html>