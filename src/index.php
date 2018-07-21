<!DOCTYPE html>
<!--тип документа-->
<html>
<head>
    <meta charset='utf-8'>
    <!--meta-работа с текстом,charset-кодировка, название кодировки</-->
    <title>Evgenii Popovich</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="content">
            <div id="header">
                <a href="index.php">Main</a>/
                <a href="pages/about_me.php">About Me</a>/
                <a href="pages/photo.php">Photo</a>
            </div>
            <div id="">
                 <h1>Junior Java Developer</h1><!--заголовок первого уровня</-->
            </div>
            <div id="center">
                <img id="avatar" src="img/popovich.png">
                <!-- alt-алтернативный текст, если картинка не загрузилась, src - ресурс</-->
                <div id="box_text">
                    <div id="contacts">
                        <p>Tel: <a href="tel:+375297261647">+375 (29) 7261647</a></p>
                        <p>Email: <a href="mailto:ip.popovich.1990@gmail.com">ip.popovich.1990@gmail.com</a></p>
                        <p>LinkedIn: <a href="https://www.linkedin.com/in/evgenii-popovich-068336143/" target="_blank">https://www.linkedin.com/in/evgenii-popovich-068336143/</a></p>
                        <p>GitHub: <a href="https://github.com/YauheniPo" target="_blank">https://github.com/YauheniPo</a></p>
                        <p>Skype:
                            <a href="skype:joncoffi1?chat"><img alt="joncoffi1"/></a>
                        </p>
                    </div>
                    <div id="mail">
                        <p>
                            Hi!<br> My name is <b>Evgenii Popovich</b>, I am a beginner Java Developer. I've been studying programming on courses for about an year and now I continue to study it myself. I am a results-oriented software developer. I enjoy all the challenges this industry offers; technology, customer satisfaction, innovation and on-going learning. I also understand the importance of creating highly readable and easily maintainable source code and constantly striving to learn new technologies and look to ways to better myself in this rapidly changing industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            Copyright &copy; <?php echo date("Y");?> <a href="mailto:ip.popovich.1990@gmail.com">YauheniPo</a> - All rights reserved.
        </div>
    </div>
</body>
</html>
