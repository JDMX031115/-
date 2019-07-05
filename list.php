<?php
require_once("config.php");
require_once("functions.php");
// 获取分类ID
// $categoryId = $_GET["categoryId"];
// //建立连接
// $connect = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
// //sql 语句
// $sql = "SELECT p.id,p.title,p.created,p.content,p.views,p.likes,p.feature,c.`name`,u.nickname,
// (SELECT count(id) FROM comments WHERE post_id = p.id) AS commentsCount
// FROM posts p
// LEFT JOIN categories c ON c.id = p.category_id
// LEFT JOIN users u ON u.id = p.user_id
// WHERE p.category_id = {$categoryId}
// ORDER BY p.created DESC
// LIMIT 10;";

// $postResult = mysqli_query($connect, $sql);
// $postArr = [];
// while ($row = mysqli_fetch_assoc($postResult)) {
//   $postArr[] = $row;
// }
// // print_r($postArr)
// ------------------------------------------------------
//获取分页ID
$categoryId = $_GET["categoryId"];
$connect = connect();
$sql = "SELECT p.id,p.title,p.created,p.content,p.views,p.likes,p.feature,c.`name`,u.nickname,
 (SELECT count(id) FROM comments WHERE post_id = p.id) AS commentsCount
 FROM posts p
 LEFT JOIN categories c ON c.id = p.category_id
 LEFT JOIN users u ON u.id = p.user_id
 WHERE p.category_id = {$categoryId}
 ORDER BY p.created DESC
 LIMIT 10;";
$postArr = query($connect, $sql);
?>



<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>阿里百秀-发现生活，发现美!</title>
  <link rel="stylesheet" href="static/assets/css/style.css">
  <link rel="stylesheet" href="static/assets/vendors/font-awesome/css/font-awesome.css">
</head>

<body>
  <div class="wrapper">
    <div class="topnav">
      <ul>
        <li><a href="javascript:;"><i class="fa fa-glass"></i>奇趣事</a></li>
        <li><a href="javascript:;"><i class="fa fa-phone"></i>潮科技</a></li>
        <li><a href="javascript:;"><i class="fa fa-fire"></i>会生活</a></li>
        <li><a href="javascript:;"><i class="fa fa-gift"></i>美奇迹</a></li>
      </ul>
    </div>
    <?php include_once("public/_header.php") ?>
    <?php include_once("public/_aside.php") ?>
    <div class="content">
      <div class="panel new">
        <h3><?php echo $postArr[0]["name"] ?></h3>
        <!-- <div class="entry">
          <div class="head">
            <a href="javascript:;">星球大战：原力觉醒视频演示 电影票68</a>
          </div>
          <div class="main">
            <p class="info">admin 发表于 2015-06-29</p>
            <p class="brief">星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯</p>
            <p class="extra">
              <span class="reading">阅读(3406)</span>
              <span class="comment">评论(0)</span>
              <a href="javascript:;" class="like">
                <i class="fa fa-thumbs-up"></i>
                <span>赞(167)</span>
              </a>
              <a href="javascript:;" class="tags">
                分类：<span>星球大战</span>
              </a>
            </p>
            <a href="javascript:;" class="thumb">
              <img src="static/uploads/hots_2.jpg" alt="">
            </a>
          </div>
        </div>
        <div class="entry">
          <div class="head">
            <a href="javascript:;">星球大战：原力觉醒视频演示 电影票68</a>
          </div>
          <div class="main">
            <p class="info">admin 发表于 2015-06-29</p>
            <p class="brief">星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯</p>
            <p class="extra">
              <span class="reading">阅读(3406)</span>
              <span class="comment">评论(0)</span>
              <a href="javascript:;" class="like">
                <i class="fa fa-thumbs-up"></i>
                <span>赞(167)</span>
              </a>
              <a href="javascript:;" class="tags">
                分类：<span>星球大战</span>
              </a>
            </p>
            <a href="javascript:;" class="thumb">
              <img src="static/uploads/hots_2.jpg" alt="">
            </a>
          </div>
        </div>
        <div class="entry">
          <div class="head">
            <a href="javascript:;">星球大战：原力觉醒视频演示 电影票68</a>
          </div>
          <div class="main">
            <p class="info">admin 发表于 2015-06-29</p>
            <p class="brief">星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯，星球大战:原力觉醒：《星球大战:原力觉醒》中国首映盛典红毯</p>
            <p class="extra">
              <span class="reading">阅读(3406)</span>
              <span class="comment">评论(0)</span>
              <a href="javascript:;" class="like">
                <i class="fa fa-thumbs-up"></i>
                <span>赞(167)</span>
              </a>
              <a href="javascript:;" class="tags">
                分类：<span>星球大战</span>
              </a>
            </p>
            <a href="javascript:;" class="thumb">
              <img src="static/uploads/hots_2.jpg" alt="">
            </a>
          </div>
        </div> -->


        <?php foreach ($postArr as $value) : ?>
          <div class="entry">
            <div class="head">
              <a href="detail.php?postId=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a>
            </div>
            <div class="main">
              <p class="info"><?php echo $value['nickname'] ?> 发表于 <?php echo $value['created'] ?></p>
              <p class="brief"><?php echo $value['content'] ?></p>
              <p class="extra">
                <span class="reading">阅读(<?php echo $value['views'] ?>)</span>
                <span class="comment">评论(<?php echo $value['commentsCount'] ?>)</span>
                <a href="javascript:;" class="like">
                  <i class="fa fa-thumbs-up"></i>
                  <span>赞(<?php echo $value['likes'] ?>)</span>
                </a>
                <a href="javascript:;" class="tags">
                  分类：<span><?php echo $value['name'] ?></span>
                </a>
              </p>
              <a href="javascript:;" class="thumb">
                <img src="static/uploads/hots_2.jpg" alt="">
              </a>
            </div>
          </div>
        <?php endforeach ?>

        <!-- 加载更多点击按钮 -->
        <div class="loadmore">
          <span class="btn">加载更多</span>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>© 2016 XIU主题演示 本站主题由 themebetter 提供</p>
    </div>
  </div>
  <script src="/static/assets/vendors/jquery/jquery.min.js"></script>
  <script>
    $(function() {
      var currentPage = 1;
      //注册点击事件
      $(".loadmore .btn").on("click", function() {
        //截取ID
        var categoryId = location.search.split("=")[1];
        // console.log(categoryId);
        // return;
        currentPage++
        $.ajax({
          type: 'post',
          url: "/api/_getMorePost.php",
          data: {
            categoryId: categoryId,
            currentPage: currentPage,
            pageSize: 10
          },
          success: function(res) {
            console.log(res);
            return;

            if (res.code == 1) {
              var data = res.data;
              $.each(data, function(index, val) {
                var str = '<div class="entry">\
          <div class="head">\
            <a href="detail.php?postId=' + val['id'] + '">' + val['title'] + '</a>\
          </div>\
          <div class="main">\
            <p class="info">' + val['nickname'] + ' 发表于 ' + val['created'] + '</p>\
            <p class="brief">' + val['content'] + ' </p>\
            <p class="extra">\
              <span class="reading">阅读(' + val['views'] + ')</span>\
              <span class="comment">评论(' + val['commentsCount'] + ')</span>\
              <a href="javascript:;" class="like">\
                <i class="fa fa-thumbs-up"></i>\
                <span>赞(' + val['likes'] + ')</span>\
              </a>\
              <a href="javascript:;" class="tags">\
                分类：<span>' + val['name'] + '</span>\
              </a>\
            </p>\
            <a href="javascript:;" class="thumb">\
              <img src="static/uploads/hots_2.jpg" alt="">\
            </a>\
          </div>\
        </div>';
                var entry = $(str);
                entry.insertBefore(".loadmore");





              });
              //判断文章是否全部加载 是就隐藏加载按钮
              var maxPage = Math.ceil(res.pageCount / 10)
              if (currentPage == maxPage) {
                $(".loadmore .btn").hide();
              }

            }


          }
        });

      })
    })
  </script>

</body>


</html>