<form action="/users/update" method="post">
    <input type="text" name="value" value="<?php echo $user['name'] ?>">
    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
    <input type="submit" value="修改">
</form>

<a class="big" href="/users/index">返回</a>