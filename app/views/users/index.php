<div class="container">
<form action="/item/add" method="post">
    <input type="text" value="点击添加" onclick="this.value=''" name="value">
    <input type="submit" value="添加">
</form>
<br/>
<?php foreach ($users as $item): ?>
    <a class="big" href="/item/view/<?php echo $item['id'] ?>" title="点击修改">
        <span class="item">
            <?php echo $item['id'] ?>
            <?php echo $item['name'] ?>
        </span>
    </a>
    ----
    <a class="big" href="/item/delete/<?php echo $item['id']?>">删除</a>
    <br/>
<?php endforeach ?>
<h1>引入了ZUI框架，是什么样子呢</h1>
</div>
<!-- ZUI Javascript 依赖 jQuery -->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/zui/1.7.0/lib/jquery/jquery.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/zui/1.7.0/js/zui.min.js"></script>-->

<!--<script src="https://cdn.staticfile.org/jquery/1.11.0/jquery.min.js"></script>-->
<!--<script src="https://cdn.staticfile.org/zui/1.6.0/js/zui.min.js"></script>-->
